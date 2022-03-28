@if(count($clients)>0)
<div class="clients-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Our Respected Clients</h2>
            <p>Which peoples loves us a lot, please check out what about says about us</p>
        </div>

        <div class="clients-slides owl-carousel owl-theme">
            @foreach ($clients as $client)
                <div class="clients-item">
                    <img src="{{asset($client->photo)}}" style="width:100px; height:100px;" alt="image">
                    <p>‘’{{$client->feedback}}’’</p>

                    <div class="title-name">
                        <h3>{{$client->prenom}} {{$client->nom}}</h3>
                        <span>{{$client->poste}}</span>
                    </div>

                    <div class="star-rating">
                        @for ($i=0; $i<5; $i++)
                            @if (round($client->avg('rate'))>$i)
                                <i class="ri-star-fill" aria-hidden="true"></i>
                            @else
                                <i class="ri-star-line" aria-hidden="true"></i>
                            @endif
                        @endfor
                    </div>

                    <div class="shape-1">
                        <img src="{{asset('frontend/assets/images/clients/shape-4.png')}}" alt="image">
                    </div>

                    <div class="shape-2">
                        <img src="{{asset('frontend/assets/images/clients/shape-5.png')}}" alt="image">
                    </div>

                    <div class="shape-3">
                        <img src="{{asset('frontend/assets/images/clients/shape-6.png')}}" alt="image">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="clients-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/clients/shape-1.png')}}" alt="image">
    </div>
    <div class="clients-shape-2" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/clients/shape-2.png')}}" alt="image">
    </div>
    <div class="clients-shape-3" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/clients/shape-3.png')}}" alt="image">
    </div>
</div>
@endif