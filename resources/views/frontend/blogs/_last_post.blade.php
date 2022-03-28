@foreach ($lastPublications as $post)
                                    <article class="item">
                                        <a href="{{route('publication.detail',$post->slug)}}" class="thumb">
                                            <span class="fullimage cover" role="img">
                                                <img src="{{asset($post->photo)}}" alt="">
                                            </span>
                                        </a>

                                        <div class="info">
                                            <h5 class="title usmall">
                                                <a href="{{route('publications.detail',$post->slug)}}">{{$post->title}}</a>
                                            </h5>

                                            <span><i class="ri-time-line"></i> {{$post->getCreatedAt()}}</span>
                                        </div>
                                    </article>
                                @endforeach