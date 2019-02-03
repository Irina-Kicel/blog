<div class="side">
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
</div>