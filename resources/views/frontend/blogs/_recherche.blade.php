<div class="widget widget_search">
    <h3 class="widget-title">Rechercher</h3>
    <form class="search-form" action="{{route('search')}}" method="GET" style="position: relative;">
        <input type="search" id="search_text" name="query" class="search-field form-control" placeholder="Rechercher...">
        <button type="submit" value="Send" style="position: absolute; right: 12px; top: 50%; transform: translateY(-50%); background: none; border: none; cursor: pointer; color: #2563eb;">
            <i class="ri-search-line"></i>
        </button>
    </form>
</div>
