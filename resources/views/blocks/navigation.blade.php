@if($menus)

<div class="side">
    <ul class="menu">

        @foreach($menus as $k => $items)
           @if(count($items) > 2)

       <li class="menu__list"><a href="{!! $items[1] !!}">{!! $items[0] !!}</a>
                    <ul class="menu__drop">
                       @foreach($items['children'] as $key => $item)
                            <li><a href="{!! $item[1] !!}">{!! $item[0] !!}</a></li>
                       @endforeach
                    </ul>
        </li>
            @else
                <li><a href="{!! $items[1] !!}">{!! $items[0] !!}</a>
            @endif
       @endforeach
    </ul>
</div>

@endif
{{--<div class="side">
    <ul class="menu">
        <li><a href="{{asset('/')}}">Главная</a></li>

        <li class="menu__list"><a href="{{asset('/articles')}}">Объявления</a>
            <ul class="menu__drop">
                <li><a href="{{asset('/articles/cat/electric')}}">Электроэнергия</a></li>
                <li><a href="{{asset('/articles/cat/water')}}">Вода</a></li>
                <li><a href="{{asset('/articles/cat/due')}}">Взносы</a></li>
            </ul>
        </li>
        <li><a href="{{asset('/comments')}}">Задать вопрос</a></li>
        <li><a href="{{asset('/ordinance')}}">Устав</a></li>
    </ul>
</div>--}}
