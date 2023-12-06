<style>
    .menu {
    position: relative;
}

.popup {
    display: none;
    position: absolute;
    top: 40px; /* Adjust this value based on your layout */
    right: 0;
    padding: 10px;
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    z-index: 1000; /* Ensure the popup is above other elements */
}

</style>
<nav>
    <div class="container">
        <div class="logo">
            <a href="#"><img src="{{ asset('asset-img/logo-poci.png') }}" alt=""></a>
            <div class="logo-item">
                <span class="title-1">Teh Poci</span> <br>
                <span class="title-2">Teh Indonesia</span>
            </div>
        </div>
        <div class="menu">
            <a class="menu-item" href="#">Home</a>
            <a class="menu-item" href="#">Ingredient</a>
            <a class="menu-item" href="#">Order</a>
            <a class="menu-item" href="#">Contact</a>
            <a class="menu-item" href="#">About</a>
        </div>

        <div class="ctas">

            @auth
            <div class="menu" style="margin-bottom:-30px">
                <img src="{{ asset('picture/accounts/' . auth()->user()->gambar) }}" alt="" width="40px" style="border-radius: 50%;margin-right:-40px">
                <a href="#" id="user-name">{{ auth()->user()->name }}</a>
            </div>
        @endauth
        
            <a href="#"><img src="{{ asset('asset-img/shopping-cart.png') }}" alt=""></a>
            <a href="{{ url('/login') }}"><img src="{{ asset('asset-img/grid.png') }}" alt=""></a>


       
        </div>

    </div>
</nav>
{{-- popup --}}
@auth
<div class="popup" id="popup">
    <!-- Your popup content goes here -->
    <!-- For example, you can show user details or links -->
    <p>Hello, {{ auth()->user()->name }}!</p>
  


    <!-- Add any other content you want to display -->
</div>
@endauth