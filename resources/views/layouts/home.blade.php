<!-- Slide 1 -->
<div class="container">
    <div class="container1">
        <div class="home">
            <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
            <h1 class="home-subheadline"> Atasi Dahagamu Dengan Minum Teh Poci</h1>
            <p class="home-headline">Jangan Lupa Nikmatnya teh</p>
        </div>
        <a href="#">
            <center><img src="{{ asset('asset-img/logoawal.png') }}" alt=""></center>
        </a>
        <div class="text-with-lines">
            <div class="line"></div>
            <div class="text">PERFECT BRAND IS FEATURED ON : </div>
            <div class="line"></div>
        </div>
        <div class="featured-image">
            <img src="{{ asset('asset-img/livin.jpg') }}" alt="">
            <img src="{{ asset('asset-img/gits.png') }}" alt="">
            <img src="{{ asset('asset-img/googledev.png') }}" alt="">
            <img src="{{ asset('asset-img/logokm.png') }}" alt="">
            <img src="{{ asset('asset-img/msib.png') }}" alt="">
        </div>
    </div>

    <!-- slide 2 -->
    <div class="container2">
        <div class="slide2">
            <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
            <div class="image-with-text">
                <img src="{{ asset('asset-img/tehpoci.png') }}" alt="Deskripsi Gambar">

                <ul class="list">
                    <p> DARI BAHAN - BAHAN KUALITAS PILIHAN </p>
                    <li>Tastes like dessert without added sugars or sugar alcohols</li>
                    <li>No artificial sweeteners, dairy, say or corn fiber</li>
                    <li>10G of collagen protein from grass-fed cows</li>
                    <li>Formulated to reduce blood sugar intact</li>
                    <li>Organic almond Butter, Sunflower Lecithin</li>
                    <li>No energy crashes. Collagen Protein, Stevia</li>
                    <li>10G of collagen protein from grass-fed cows</li>
                    <button type="submit">Know More</button>
                </ul>
            </div>
        </div>
    </div>
    <!-- slide 3 -->
    <div class="container3">
        <div class="slide3">
            <link rel="stylesheet" href="{{ asset('css/style3.css') }}">

            <center><img src="{{ asset('asset-img/logo-poci.png') }}" alt=""></center>
            <p class="slide3-headline"> VARIAN RASA </p>
            <br>
            <br>
            {{-- begin show product --}}
            <div class="product-container">
                @if (auth()->check())
    @foreach ($product as $item)
        <div class="product">
            <img src="/katalog/{{ $item->image }}" alt="Gambar Produk">
            <h1 class="card-title">
                @if ($item->manajemenProduct)
                    {{ $item->manajemenProduct->nama_produk }}
                @else
                    Product Not Found
                @endif
            </h1>
            <h3 class="card-text">{{ $item->description }}</h3>
            <p class="card-text">{{ $item->price }}</p>
            <p class="card-text"></p>
            <a href="{{ route('order') }}" class="buy-now-button">Buy Now</a>
        </div>
    @endforeach
@else
    <p style="color: red">Silahkan Login dulu untuk belanja!!!!.</p>
@endif



                {{-- @foreach ($products as $product)
                <div class="product">
                  <img src="{{ asset('asset-img/'.$product->image) }}" alt="Gambar Produk 1">

                            <h5 class="card-title">{{ $product->name }}</h5>
                            <h4 class="card-text">Rp. {{ $product->price }},00</h4>
                            <h5 class="card-text">{{ $product->description }}</h5>
                            <a href="{{ route('order') }}" class="buy-now-button">Buy Now</a>
                  </div>
                @endforeach --}}

                {{-- <div class="product">
                    <img src="{{ asset('asset-img/melati.png') }}" alt="Gambar Produk 1">
                    <a href="#" class="buy-now-button">Buy Now</a>
                </div>
                <div class="product">
                    <img src="{{ asset('asset-img/vanilla.png') }}" alt="Gambar Produk 2">
                    <a href="#" class="buy-now-button">Buy Now</a>
                </div>
                <div class="product">
                    <img src="{{ asset('asset-img/thai.png') }}" alt="Gambar Produk 2">
                    <a href="#" class="buy-now-button">Buy Now</a>
                </div>
                <div class="product">
                    <img src="{{ asset('asset-img/lemon.png') }}" alt="Gambar Produk 2">
                    <a href="#" class="buy-now-button">Buy Now</a>
                </div>
                <div class="product">
                    <img src="{{ asset('asset-img/guava.png') }}" alt="Gambar Produk 2">
                    <a href="#" class="buy-now-button">Buy Now</a>
                </div>
                <div class="product">
                    <img src="{{ asset('asset-img/blackcurrant.png') }}" alt="Gambar Produk 2">
                    <a href="#" class="buy-now-button">Buy Now</a>
                </div>
                <div class="product">
                    <img src="{{ asset('asset-img/leci.png') }}" alt="Gambar Produk 2">
                    <a href="#" class="buy-now-button">Buy Now</a>
                </div>
                <div class="product">
                    <img src="{{ asset('asset-img/mango.png') }}" alt="Gambar Produk 2">
                    <a href="#" class="buy-now-button">Buy Now</a>
                </div>
                <div class="product">
                    <img src="{{ asset('asset-img/apel.png') }}" alt="Gambar Produk 2">
                    <a href="#" class="buy-now-button">Buy Now</a>
                </div>
                <div class="product">
                    <img src="{{ asset('asset-img/capucino.png') }}" alt="Gambar Produk 2">
                    <a href="#" class="buy-now-button">Buy Now</a>
                </div>
                <div class="product">
                    <img src="{{ asset('asset-img/cokelat.png') }}" alt="Gambar Produk 2">
                    <a href="#" class="buy-now-button">Buy Now</a> --}}
                {{-- </div> --}}
            </div>
        </div>
        <!-- slide 4 -->
        <div class="container4">
            <div class="slide4">
                <link rel="stylesheet" href="{{ asset('css/style4.css') }}">
                <div class="image-with-text">
                    <img src="{{ asset('asset-img/teh.png') }}" alt="Deskripsi Gambar">

                    <ul class="content">
                        <p><b> ABOUT </b></p>
                        <p> Es Teh Poci adalah minuman asli Indonesia yang di sajikan dengan teh pilihan. Teh ini diberi
                            sentuhan
                            manis dari gula batu dan berbagai variasi rasa yang menarik. Setelah direbus, teh ini
                            dihidangkan dengan
                            es, menciptakan minuman teh yang meremukkan dahaga, memiliki cita rasa khas yang unik, dan
                            sangat ideal
                            diseruput saat cuaca sedang panas. Minuman ini menjadi favorit yang tak terhindarkan di
                            kalangan
                            masyarakat Tegal, Slawi, Pemalang, Brebes, dan daerah sekitarnya.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- slide 5 -->

    <div class="container5">
        <div class="slide5">
            <link rel="stylesheet" href="{{ asset('css/style5.css') }}">
            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
            </div>
            <p class="comment"> Rasa Teh Poci begitu autentik dan mendalam, dengan kombinasi sempurna antara teh
                pilihan, gula batu, dan
                rempah-rempah yang memberikan sentuhan unik. Setiap tegukan adalah perjalanan rasa yang luar biasa,
                segar, dan nikmat.
            </p>
            <center><img src="{{ asset('asset-img/daunteh.png') }}" alt="Deskripsi Gambar" class="image"></center>
        </div>
    </div>

    <!-- slide 6 -->

    <div class="container6">
        <div class="slide6">
            <link rel="stylesheet" href="{{ asset('css/style6.css') }}">
            <footer class="footer">
                <div class="footer-content">
                    <div class="logo">
                        <a href="#"><img src="{{ asset('asset-img/logo-poci.png') }}" alt=""></a>
                        <div class="logo-item">
                            <span class="title-1"> Teh Poci </span> <br>
                            <span class="title-2">Teh Indonesia</span>
                        </div>
                    </div>
                    <div class="description"><br><br><br><br><br>
                        <p> We don't just sell Poci Iced Tea, we take you on a journey of deep flavors and rich tea
                            drinking culture.</p>
                    </div>
                    <div class="contact-info">
                        <h3>Hubungi Kami</h3>
                        <p>Alamat : Pergudangan Kubik Jl. Tugu Raya Kel. Tugu Kec. Cimanggis Depok</p>
                        <p>Website : www.estehpoci.id</p>
                        <p>Telepon : (021) 22621372</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
