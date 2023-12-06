@include('Admin.partials.layouts.head')

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

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <div class="col-lg-6">
                    <div class="card">
                        <header>
                            <h1>Tambah Produk</h1>
                        </header>

                        <div class="card-body">
                            <form action="{{ url('/addProduk') }}" method="post" class="needs-validation" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom01">Nama Produk</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                        placeholder="" name="namaProduk" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom02">Harga</label>
                                    <input type="number" class="form-control" id="validationCustom02"
                                        placeholder="" name="harga" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom03">Stok</label>
                                    <input type="number" class="form-control" id="validationCustom03" placeholder=""
                                        name="stok" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid Kuantity.
                                    </div>
                                </div>

                                <button class="add-product-btn" type="submit" name="submit">Tambah</button>
                            </form>

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->


            </div>
        </div>

    </div>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

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
