@extends('layouts.adminbase')

@section('title', 'Админ страница просмотра меню')

@section('navigation')
    @parent
@endsection

@section('content')

    <div id="content-page" class="content group">
        <div class="hentry group">
            <h2>Пользователи</h2>


            <div class="short-table white">
                <table>
                    <thead>

                    <th>Name</th>
                    <th>Link</th>

                    <th>Удалить</th>
                    </thead>

                    <tr>
                        <td style="text-align: left;"> <a href="{{asset('/admin/menus/1/edit') }}">Главная</a></td>
                        <td>{{asset('/')}}</td>

                        <td>
                            <form method="POST" action="{{asset('/admin/menus/1/edit') }}" accept-charset="UTF-8" class="form-horizontal"><input name="_token" type="hidden" value="LsrzRU1LcGl7Y6YBERIi5LqgC1DNXyUGTVFu3Lr8">
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-french-5" type="submit">Удалить</button>
                            </form>

                        </td>
                    </tr>


                    <tr>
                        <td style="text-align: left;"> <a href="{{asset('/admin/menus/2/edit') }}">Объявления</a></td>
                        <td>{{asset('/articles')}}</td>

                        <td>
                            <form method="POST" action="{{asset('/admin/menus/2/edit') }}" accept-charset="UTF-8" class="form-horizontal"><input name="_token" type="hidden" value="LsrzRU1LcGl7Y6YBERIi5LqgC1DNXyUGTVFu3Lr8">
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-french-5" type="submit">Удалить</button>
                            </form>

                        </td>
                    </tr>

                    <tr>
                        <td style="text-align: left;">-- <a href="{{asset('/admin/menus/3/edit') }}">Электроэнергия</a></td>
                        <td>{{asset('/articles/cat/electric')}}</td>

                        <td>
                            <form method="POST" action="{{asset('/admin/menus/3') }}" accept-charset="UTF-8" class="form-horizontal"><input name="_token" type="hidden" value="LsrzRU1LcGl7Y6YBERIi5LqgC1DNXyUGTVFu3Lr8">
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-french-5" type="submit">Удалить</button>
                            </form>

                        </td>
                    </tr>


                    <tr>
                        <td style="text-align: left;">-- <a href="{{asset('/admin/menus/4/edit') }}">Вода</a></td>
                        <td>{{asset('/articles/cat/water')}}</td>

                        <td>
                            <form method="POST" action="{{asset('/admin/menus/4') }}" accept-charset="UTF-8" class="form-horizontal"><input name="_token" type="hidden" value="LsrzRU1LcGl7Y6YBERIi5LqgC1DNXyUGTVFu3Lr8">
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-french-5" type="submit">Удалить</button>
                            </form>

                        </td>
                    </tr>


                    <tr>
                        <td style="text-align: left;">-- <a href="{{asset('/admin/menus/5/edit') }}">Взносы</a></td>
                        <td>{{asset('/articles/cat/due')}}</td>

                        <td>
                            <form method="POST" action="{{asset('/admin/menus/5') }}" accept-charset="UTF-8" class="form-horizontal"><input name="_token" type="hidden" value="LsrzRU1LcGl7Y6YBERIi5LqgC1DNXyUGTVFu3Lr8">
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-french-5" type="submit">Удалить</button>
                            </form>

                        </td>
                    </tr>




                    <tr>
                        <td style="text-align: left;"> <a href="{{asset('/admin/menus/6/edit') }}">Задать вопрос</a></td>
                        <td>{{asset('/contacts')}}</td>

                        <td>
                            <form method="POST" action="{{asset('/admin/menus/6') }}" accept-charset="UTF-8" class="form-horizontal"><input name="_token" type="hidden" value="LsrzRU1LcGl7Y6YBERIi5LqgC1DNXyUGTVFu3Lr8">
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-french-5" type="submit">Удалить</button>
                            </form>

                        </td>
                    </tr>


                    <tr>
                        <td style="text-align: left;"> <a href="{{asset('/admin/menus/7/edit') }}">Устав</a></td>
                        <td>{{asset('/ordinance')}}</td>

                        <td>
                            <form method="POST" action="{{asset('/admin/menus/7') }}" accept-charset="UTF-8" class="form-horizontal"><input name="_token" type="hidden" value="LsrzRU1LcGl7Y6YBERIi5LqgC1DNXyUGTVFu3Lr8">
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-french-5" type="submit">Удалить</button>
                            </form>

                        </td>
                    </tr>

                </table>
            </div>
            <br>
            <div class="box-in">
            <a href="{{asset('/admin/menus/create')}}" class="btn btn-the-salmon-dance-3">Добавить  пункт</a>
            </div>
            <br>
        </div>
    </div>

@endsection