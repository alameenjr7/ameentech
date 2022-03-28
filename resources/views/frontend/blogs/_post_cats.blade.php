<div class="widget widget_categories">
    <h3 class="widget-title">Filtrer par Catégorie</h3>
    @if (!empty($_GET['category']))
        @php
            $filter_cats = explode(',',$_GET['category']);
        @endphp
    @endif
    @foreach ($cats as $cat)
        <ul>
            <li>
                <input type="checkbox"
                    @if (!empty($filter_cats) && in_array($cat->slug,$filter_cats))
                        checked
                    @endif
                    class="form-check-input custom-control-input" id="{{$cat->slug}}" name="category[]" onchange="this.form.submit();" value="{{$cat->slug}}">
                    <label for="{{$cat->slug}}" class="form-check-label custom-control-label">{{ucfirst($cat->title)}} <span class="text-muted">({{count($cat->publications)}})</span></label>
            </li>
        </ul>
    @endforeach
</div>