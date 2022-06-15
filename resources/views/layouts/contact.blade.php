@extends('layouts.main')
@section('layouts.content')
<main>
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">Contact Page</h2>
        <p class="col-12 text-center">Sampaikan kritik, saran, pertanyaan, bagi cerita / pengalaman Anda dengan Solaria. Masukan Anda sangat berarti untuk meningkatkan pelayanan kami.</p>
    </header>

    <div class="row tm-welcome-section">
        <div class="row">
            
            <div class="col-12 text-center">
                <div class="placeholder-1">
                    <h4 class="tm-info-title tm-text-success">Our Address</h4>
                    <address>
                        Jl. Carik Grojogan Janti, Janti, Kec. Wates, Kabupaten Kediri, Jawa Timur 64174
                    </address>
                    <a href="tel:080-090-0110" class="tm-contact-link">
                        <i class="fas fa-phone tm-contact-icon"></i>0856-0090-0111
                    </a>
                    <a href="mailto:info@company.co" class="tm-contact-link">
                        <i class="fas fa-envelope tm-contact-icon"></i>kebabayu@gmail.com
                    </a>
                    <div class="tm-contact-social">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- How to change your own map point
 1. Go to Google Maps
 2. Click on your location point
 3. Click "Share" and choose "Embed map" tab
 4. Copy only URL and paste it within the src="" field below
-->
    <div class="tm-container-inner-2 tm-map-section">
        <div class="row">
            <div class="col-12">
                <div class="tm-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11196.961132529668!2d-43.38581128725845!3d-23.011063013218724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bdb695cd967b7%3A0x171cdd035a6a9d84!2sAv.%20L%C3%BAcio%20Costa%20-%20Barra%20da%20Tijuca%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%20Brazil!5e0!3m2!1sen!2sth!4v1568649412152!5m2!1sen!2sth"
                        frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="tm-container-inner-2 tm-info-section">
        <div class="row">
            <!-- FAQ -->
            <div class="col-12 tm-faq">
                <h2 class="text-center tm-section-title">FAQs</h2>
                <p class="text-center">This section comes with Accordion tabs for different questions and answers
                    about Simple House HTML CSS template. Thank you. #666</p>
                <div class="tm-accordion">
                    <button class="accordion">1. Fusce eu lorem et dui #09C maximus varius?</button>
                    <div class="panel">
                        <p>#666 Duis blandit purus vel nenenatis rutrum. Pellentesque pellentesque tindicunt lorem, ac
                            egestas massa sollicitudin vel. Nam scelerisque vulputate quam mollis pretium. Morbi
                            condimentum volutpat.</p>
                    </div>

                    <button class="accordion">2. Vestibulum #999 ante ipsum primis in faucibus orci?</button>
                    <div class="panel">
                        <p>Mauris euismod odio at commodo rhoncus. Maecenas nec interdum purus, sed auctor est. Sed
                            eleifend urna nec diam consectetur, a aliquet turpis facilisis. Integer est sapien, sagittis
                            vel massa vel, interdum euismod erat. Aenean sollicitudin nisi neque, efficitur posuere urna
                            rutrum porta.</p>
                    </div>

                    <button class="accordion">3. Can I redistribute this template as a ZIP file?</button>
                    <div class="panel">
                        <p>Redistributing this template as a downloadable ZIP file on any template collection site is
                            strictly prohibited. You will need to <a href="https://templatemo.com/contact">contact
                                TemplateMo</a> for additional permissions about our templates. Thank you.</p>
                    </div>

                    <button class="accordion">4. Ut ac erat sit amet neque efficitur faucibus et in
                        lectus?</button>
                    <div class="panel">
                        <p>Vivamus viverra pretium ultricies. Praesent feugiat, sapien vitae blandit efficitur, sem
                            nulla venenatis nunc, vel maximus ligula sem a sem. Pellentesque ligula ex, facilisis ac
                            libero a, blandit ullamcorper enim.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</main>
@endsection