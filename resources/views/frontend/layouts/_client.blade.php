@if(count($clients)>0)
<div class="clients-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Nos Clients T&eacute;moignent</h2>
            <p>D&eacute;couvrez ce que nos clients disent de leur exp&eacute;rience avec AmeenTECH.</p>
        </div>

        <div class="clients-slides owl-carousel owl-theme">
            @foreach ($clients as $client)
                <div class="clients-item">
                    <img src="{{asset($client->photo)}}" style="width:100px; height:100px;" alt="image">
                    <p>''{{$client->feedback}}''</p>

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
                </div>
            @endforeach
        </div>
    </div>
</div>
@endif
