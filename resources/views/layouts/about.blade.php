@extends('layouts.main')
@section('layouts.content')
    <main>
        <header class="row tm-welcome-section">
            <h2 class="col-12 text-center tm-section-title">About Kebab Ayu</h2>
            <p class="col-12 text-center">
                Outlet 📍SLG (SIMPANG LIMA GUMUL)</p>
        </header>
        <div class="tm-container-inner tm-featured-image">
            <div class="row">
                <div class="col-12">
                    <div class="placeholder-2">
                        <div class="parallax-window-2" data-parallax="scroll" data-image-src="img/kebab1.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="tm-container-inner tm-features">
            <div class="row">
                <div class="col-lg-4">
                    <div class="tm-feature">
                        <i class="fas fa-4x fa-pepper-hot tm-feature-icon"></i>
                        <p class="tm-feature-description">Kebab terdiri dari daging yang dipotong atau digiling, terkadang dengan sayuran, dan berbagai pelengkap lainnya sesuai dengan resep tertentu.</p>
            
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tm-feature">
                        <i class="fas fa-4x fa-seedling tm-feature-icon"></i>
                        <p class="tm-feature-description">Maecenas pretium rutrum molestie. Duis dignissim egestas turpis
                            sit. Nam sed suscipit odio. Morbi in dolor finibus, consequat nisl eget.</p>
                       
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tm-feature">
                        <i class="fas fa-4x fa-cocktail tm-feature-icon"></i>
                        <p class="tm-feature-description">Burger adalah makanan berupa roti dan di tengahnya diisi dengan daging, kemudian sayur-sayuran berupa selada, tomat dan bawang bombai.</p>
                       
                    </div>
                </div>
            </div>
        </div> --}}

        
        <div class="tm-container-inner tm-history">
            <div class="row">
                <div class="col-12">
                    <div class="tm-history-inner">
                        <img src="img/kebab3.jpg" alt="Image" class="img-fluid tm-history-img" />
                        <div class="tm-history-text">
                            <h4 class="tm-history-title">History of Kebab Ayu</h4>
                            <p class="tm-mb-p">Kebab Ayu merupakan salah satu kedai makanan kebab di Kota Kediri. Kedai ini menjual kebab dengan berbagai macam varian rasa selama 1 tahun dengan harga yang terjangkau.
                                .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection