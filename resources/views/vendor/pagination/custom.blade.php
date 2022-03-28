{{-- <div class="col-lg-12 col-md-12">
    <div class="pagination-area">
        <a href="#" class="prev page-numbers"><i class="ri-arrow-left-line"></i></a>
        <span class="page-numbers current" aria-current="page">1</span>
        <a href="#" class="page-numbers">2</a>
        <a href="#" class="page-numbers">3</a>
        <a href="#" class="page-numbers">4</a>
        <a href="#" class="next page-numbers"><i class="ri-arrow-right-line"></i></a>
    </div>
</div> --}}

@if ($paginator->hasPages())
    <div class="pagination-area">
        <nav>
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                        <span class="page-numbers current" aria-current="page" aria-hidden="true">&lsaquo;</span>
                    </li>
                @else
                    <li>
                        <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;<i class="ri-arrow-left-line"></i></a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="disabled" aria-disabled="true"><span class="page-numbers current" aria-current="page">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="active" aria-current="page"><span class="page-numbers current" aria-current="page">{{ $page }}</span></li>
                            @else
                                <li><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li>
                        <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;<i class="ri-arrow-right-line"></i></a>
                    </li>
                @else
                    <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <span class="page-numbers current" aria-current="page" aria-hidden="true">&rsaquo;</span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
@endif