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
                        <h3>+ {{$dateDiff_f}} ans d'exp&eacute;riences professionnelles</h3>
                        <p>Assurer le meilleur retour sur investissement pour votre entreprise avec AmeenTECH.</p>
                    </div>

                    <div class="experiences-inner-content">
                        <img src="{{asset('frontend/assets/images/experiences/img1.png')}}" alt="image">
                        <p>AmeenTECH est &agrave; la fois une agence web et une agence conseil digitale, nous vous accompagnons dans la r&eacute;alisation de tous vos projets de d&eacute;veloppement d'application web et mobile.</p>
                    </div>

                    <div class="experiences-inner-content">
                        <img src="{{asset('frontend/assets/images/experiences/img2.png')}}" alt="image">
                        <p>Quelques soient vos besoins en ma&icirc;trise d'ouvrage ou de ma&icirc;trise d'oeuvre informatique, nous sommes votre partenaire privil&eacute;gi&eacute; pour analyser et auditer vos syst&egrave;mes d'information.</p>
                    </div>

                    <div class="experiences-inner-content">
                        <img src="{{asset('frontend/assets/images/experiences/img3.png')}}" alt="image">
                        <p>Nous vous apportons des solutions et des outils pour optimiser la performance des diff&eacute;rents services de votre entreprise.</p>
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
</div>
