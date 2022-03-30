<div class="experiences-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="experiences-item">
                    <div class="experiences-content">
                        <div class="tag">
                            <img src="{{asset(get_setting('logo'))}}" alt="image">
                        </div>
                        @php
                            $date1 = new DateTime('2018-01-01');
                            $date2 = new DateTime(now());
                            $dateDiff = \Carbon\Carbon::parse($date1)->floatDiffInRealYears($date2);
                            $dateDiff_f = number_format($dateDiff);
                        @endphp
                        <h3>+ {{$dateDiff_f}} ans d'expériences professionnelles</h3>
                        <p>Assurer le meilleur retour sur investissement pour votre entreprise avec AmeenTECH.</p>
                        {{-- <p>Scelerisque amet odio velit eu auctor. Aliquet nam elit.</p> --}}
                    </div>

                    <div class="experiences-inner-content">
                        <img src="{{asset('frontend/assets/images/experiences/img1.png')}}" alt="image">
                        <p>AmeenTECH est à la fois une agence web et une agence conseil digitale, nous vous accompagnons dans la réalisation de tous vos projets de développement d’application web et mobile.</p>
                    </div>

                    <div class="experiences-inner-content">
                        <img src="{{asset('frontend/assets/images/experiences/img2.png')}}" alt="image">
                        <p>Quelques soient vos besoins en maîtrise d’ouvrage ou de maîtrise d’oeuvre informatique, nous sommes votre partenaire privilégié pour analyser et auditer vos systèmes d’information afin de vous proposer les meilleures solutions techniques au meilleur coût.</p>
                    </div>

                    <div class="experiences-inner-content">
                        <img src="{{asset('frontend/assets/images/experiences/img3.png')}}" alt="image">
                        <p>Nous vous apportons des solutions et des outils pour optimiser la performance des différents services de votre entreprise.</p>
                    </div>

                    <div class="experiences-btn">
                        {{-- <a href="about-1.html" class="default-btn">Read More <i class="ri-arrow-right-line"></i><span></span></a> --}}
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="experiences-image" data-speed="0.02" data-revert="true">
                    <img src="{{asset('frontend/assets/images/experiences/experiences-1.png')}}" alt="image">
                </div>
            </div>
        </div>
    </div>

    <div class="experiences-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/experiences/shape-1.png')}}" alt="image">
    </div>
    <div class="experiences-shape-2" data-speed="0.06" data-revert="true">
        <img src="{{asset('frontend/assets/images/experiences/shape-2.png')}}" alt="image">
    </div>
    <div class="experiences-shape-3" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/experiences/shape-3.png')}}" alt="image">
    </div>
    <div class="experiences-shape-4" data-speed="0.06" data-revert="true">
        <img src="{{asset('frontend/assets/images/experiences/shape-2.png')}}" alt="image">
    </div>
    <div class="experiences-shape-5" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/experiences/shape-3.png')}}" alt="image">
    </div>
    <div class="experiences-shape-6" data-speed="0.06" data-revert="true">
        <img src="{{asset('frontend/assets/images/experiences/shape-4.png')}}" alt="image">
    </div>
    <div class="experiences-shape-7" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/experiences/shape-5.png')}}" alt="image">
    </div>
</div>