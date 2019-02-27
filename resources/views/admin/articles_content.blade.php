@extends('layouts.adminbase')

@section('title', 'Админ страница просмотра объявлений по кооперативу "Локомотив"')

@section('navigation')
    @parent
@endsection

@section('content')

@if($articles)
    <h2>Добавленные объявления</h2>

    <div class="container box-in">
        <div class="container__element"><p>id</p></div>
        <div class="container__element"><p>Заголовок</p></div>
        <div class="container__element"><p>Аннонс</p></div>
        <div class="container__element"><p>Текст</p></div>
        <div class="container__element"><p>Изображение</p></div>
        <div class="container__element"><p>Категория</p></div>
        <div class="container__element"><p>Действие</p></div>
    </div>
    <hr>
    @foreach($articles as $article)
    <div class="container">
        <div class="container__element">
            <p>{{$article->id}}</p>
        </div>

        <div class="container__element">
            <p>{{$article->title}}</p>
        </div>
        <div class="container__element">
            <p>{{$article->announce}}</p>
        </div>
        <div class="container__element">
            <p>{{$article->text}}</p>
        </div>

        <div class="container__element">
            <p>{{$article->image}}</p>
        </div>
        <div class="container__element">
            <p>{{ $article->categories->implode('name', ', ') }}</p>
        </div>

        <div class="container__element">
            <p>Удалить</p>
        </div>
    </div>
        <hr>
    @endforeach
@endif
    <br>
    <div class="box-in">
        <a href="{{asset('/admin/articles/create')}}">Добавить  материал</a>
    </div>
    <br>

@endsection