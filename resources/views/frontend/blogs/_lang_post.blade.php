<div class="widget widget_categories">
    <h3 class="widget-title">Filtrer par Langage</h3>
    @if (!empty($_GET['language']))
        @php
            $filter_langs = explode(',',$_GET['language']);
        @endphp
    @endif
    @foreach ($languages as $lang)
        <ul>
            <li>
                <input type="checkbox"
                    @if (!empty($filter_langs) && in_array($lang->slug,$filter_langs))
                        checked
                    @endif
                    class="form-check-input custom-control-input" id="{{$lang->slug}}" name="language[]" onchange="this.form.submit();" value="{{$lang->slug}}">
                    <label for="{{$lang->slug}}" class="form-check-label custom-control-label">{{ucfirst($lang->title)}} <span class="text-muted">({{count($lang->publications)}})</span></label>
            </li>
        </ul>
    @endforeach
</div>