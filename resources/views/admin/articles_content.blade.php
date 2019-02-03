@extends('layouts.adminbase')

@section('title', 'Админ страница просмотра объявлений по кооперативу "Локомотив"')

@section('navigation')
    @parent
@endsection

@section('content')

    <h2>Добавленные объявления</h2>

    <div class="container box-in">
        <div class="container__element"><p>id</p></div>
        <div class="container__element"><p>Заголовок</p></div>
        <div class="container__element"><p>Текст</p></div>
        <div class="container__element"><p>Изображение</p></div>
        <div class="container__element"><p>Категория</p></div>
        <div class="container__element"><p>Псевдоним</p></div>
        <div class="container__element"><p>Действие</p></div>
    </div>
    <div class="container">
        <div class="container__element"><p>#1</p></div>

        <div class="container__element">
            <p>Второй блок</p>
        </div>
        <div class="container__element">
            <p>14 февраля 2019 года в 12 часов будет осуществляться пломбирование электросчетчиков работниками КРЭС.</p>
        </div>
        <div class="container__element">
            <p>Четвертый блок</p>
        </div>
        <div class="container__element">
            <p>Пятый блок</p>
        </div>
        <div class="container__element">
            <p>шестой блок</p>
        </div>
        <div class="container__element">
            <p>Удалить</p>
        </div>
    </div>

    <div class="box-in">
        <a href="{{asset('/admin/articles/create')}}">Добавить  материал</a>
    </div>
    <br>

@endsection