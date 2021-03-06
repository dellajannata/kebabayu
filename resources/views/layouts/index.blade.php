@extends('layouts.main')
@section('layouts.content')

    <main>
        <header class="row tm-welcome-section">
            <h2 class="col-12 text-center tm-section-title">Welcome to Kebab Ayu</h2>
        </header>

        <!-- Gallery -->
        <div class="row tm-gallery">
            <!-- gallery page 1 -->
            <div id="tm-gallery-page-pizza" class="tm-gallery-page">
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/1.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Kebab Daging</h4>
                            {{-- <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet
                                tellus accumsan</p> --}}
                            <p class="tm-gallery-price">Rp. 24000</p>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/6.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Kebab Mix</h4>
                            {{-- <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet
                                tellus accumsan</p> --}}
                            <p class="tm-gallery-price">Rp. 26000</p>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/5.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Kebab Sayur</h4>
                            {{-- <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet
                                tellus accumsan</p> --}}
                            <p class="tm-gallery-price">Rp. 17000</p>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/4.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Kebab Mozzarela</h4>
                            {{-- <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet
                                tellus accumsan</p> --}}
                            <p class="tm-gallery-price">Rp. 21000</p>
                        </figcaption>
                    </figure>
                </article>
            </div> <!-- gallery page 3 -->
        </div>
        <div class="tm-section tm-container-inner">
            <div class="row">
                <div class="col-md-6">
                    <figure class="tm-description-figure">
                        <img src="img/1.jpg" alt="Image" class="img-fluid" />
                    </figure>
                </div>
                <div class="col-md-6">
                    <div class="tm-description-box">
                        <h4 class="tm-gallery-title">Kebab Terfavorit</h4>
                        <p class="tm-mb-45">Kebab terdiri dari daging yang dipotong atau digiling, sayuran, dan berbagai pelengkap lainnya</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection