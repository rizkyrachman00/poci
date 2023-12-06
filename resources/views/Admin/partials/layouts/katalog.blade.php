@include('Admin.partials.layouts.head')



<style>
    .img-size {
        width: 100px;
    }
</style>


<body>

    <div class="wrapper">
        {{-- navbar start --}}
        @include('Admin.partials.navbar')
        {{-- navbar end --}}

        {{-- sidebar start --}}
        @include('Admin.partials.sidebar')
        {{-- sidebar end --}}

        <div class="content-page">

            <div class="content">

                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card">
                                <header>
                                    <h1>Tambah Katalog Produk</h1>
                                </header>
                                @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                <div class="card-body">
                                    <form action="{{ url('/add_katalog') }}" method="post" enctype="multipart/form-data"
                                        class="needs-validation" novalidate>
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom01">Title</label>
                                            <select class="form-control" name="title" id="productSelect">
                                                <option value="">Pilih Produk</option>
                                                @foreach ($data as $item)
                                                    <option value="{{ $item->id }}" data-id="{{ $item->id }}">
                                                        {{ $item->nama_produk }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Deskripsi</label>
                                            <input type="text" class="form-control" id="validationCustom02"
                                                placeholder="" name="description" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom03">Gambar</label>
                                            <input type="file" class="form-control" id="validationCustom03"
                                                placeholder="" name="image" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid Image.
                                            </div>
                                        </div>

                                        <!-- Input tersembunyi untuk quantity dan price -->
                                        <input type="hidden" name="quantity" id="hiddenQuantity" value="">
                                        <input type="hidden" name="price" id="hiddenPrice" value="">

                                        <div id="quantity" class="mb-3">
                                            <label class="form-label" for="validationCustom04">Jumlah</label>
                                            <div name="quantity" class="form-control" id="quantityValue"></div>
                                        </div>

                                        <div id="price" class="mb-3">
                                            <label class="form-label" for="validationCustom05">Harga</label>
                                            <div class="form-control" id="priceValue"></div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom06">Diskon</label>
                                            <input type="number" class="form-control" id="validationCustom03"
                                                placeholder="" name="dis_price" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid Discount.
                                            </div>
                                        </div>

                                        <button class="add-product-btn" type="submit" name="submit">Tambah</button>
                                    </form>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        {{-- kolom ke 2 --}}
                        <div class="col-lg-6">
                            <div class="card">
                                <header>
                                    <h1>Tabel Katalog</h1>
                                </header>
                                @if (session()->has('deleted_produk'))
                                    <div class="alert alert-success">
                                        {{ session()->get('deleted_produk') }}
                                    </div>
                                @endif

                                <table>
                                    <tr>
                                        <th>Title</th>
                                        <th>Deskripsi</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Diskon</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>

                                    @foreach ($product as $item)
                                        <tr>
                                            <td>
                                                @if ($item->manajemenProduct)
                                                    {{ $item->manajemenProduct->nama_produk }}
                                                @else
                                                    Product Not Found
                                                @endif
                                            </td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->discount_price }}</td>
                                            <td>
                                                <img class="img-size" src="/katalog/{{ $item->image }}"
                                                    alt="">
                                            </td>
                                            <td>
                                                <a onclick="return confirm('Apakah kamu yakin hapus produk ?')"
                                                    class="btn btn-danger"
                                                    href="{{ url('delete_product', $item->id) }}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>



                            </div>
                        </div> <!-- end col 2 -->
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- script otomatis stok dan harga  --}}

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Event listener untuk dropdown produk
            $('#productSelect').change(function() {
                // Dapatkan nilai yang dipilih
                var selectedValue = $(this).val();

                // Periksa apakah nilai yang dipilih adalah "Pilih Produk"
                if (selectedValue === '') {
                    // Reset nilai stok dan harga
                    $('#quantityValue').text('');
                    $('#priceValue').text('');
                    // Set nilai quantity dan price ke dalam input tersembunyi
                    $('#hiddenQuantity').val('');
                    $('#hiddenPrice').val('');
                    return;
                }

                // Dapatkan ID produk yang dipilih
                var selectedProductId = $(this).find(':selected').data('id');

                // Kirim permintaan AJAX ke server untuk mendapatkan stok dan harga berdasarkan ID produk
                $.ajax({
                    url: '/get_product_info/' + selectedProductId,
                    type: 'GET',
                    success: function(response) {
                        // Perbarui div jumlah dan harga dengan nilai yang diterima dari server
                        $('#quantityValue').text(response.stok);
                        $('#priceValue').text(response.harga);
                        // Set nilai quantity dan price ke dalam input tersembunyi
                        $('#hiddenQuantity').val(response.stok);
                        $('#hiddenPrice').val(response.harga);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>



    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- Daterangepicker js -->
    <script src="assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>

    <!-- Apex Charts js -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>

    <!-- Vector Map js -->
    <script src="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Dashboard App js -->
    <script src="assets/js/pages/dashboard.js"></script>


    <!-- App js -->
    <script src="assets/js/app.min.js"></script>
</body>
