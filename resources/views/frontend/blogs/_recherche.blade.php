<div class="widget widget_search">
    <form class="search-form" action="{{route('search')}}" method="GET" style="position: relative;">
        <input type="search" id="search_text" name="query" class="search-field form-control" placeholder="Recherche" style="height: 60px;
            color: #2E2F46;
            border: 1px solid #E6EDF6;
            display: block;
            width: 100%;
            border-radius: 5px;
            padding: 0 0 0 15px;
            -webkit-transition: 0.6s;
            transition: 0.6s;
            font-size: 15px;
            font-weight: 400;
            outline: 0;"
        >
        <button type="submit" value="Send">
            <i class="ri-search-line"></i>
        </button>
    </form>
</div>