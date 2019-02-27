@extends('layouts.adminbase')

@section('title', 'Добавить новый материал')

@section('navigation')
    @parent
@endsection

@section('content')
<div id="content-page" class="content group">
    <div class="hentry group">
        <form class="contact-form" action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
            <input name="_token" type="hidden" value="">
            <ul>
                <li class="text-field">
                    <div class="msg-error">{{ $errors->first('title') }}</div>
                    <label for="name-contact-us">
                        <span class="label">Заголовок страницы:</span>

                    </label>
                    <div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
                        <input placeholder="Введите название страницы" name="title" type="text">
                    </div>
                </li>

                <li class="text-field">
                    <label for="name-contact-us">
                        <span class="label">Ключевые слова:</span>

                    </label>
                    <div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
                        <input placeholder="Введите ключевые слова" name="description" type="text">
                    </div>
                </li>


                <li class="textarea-field">

                    <div class="msg-error">{{ $errors->first('announce') }}</div>
                    <label for="message-contact-us">
                        <span class="label">Аннонс:</span>
                    </label>
                    <div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
                        <textarea id="editor" class="form-control" placeholder="Введите аннонс страницы" name="announce" cols="50" rows="10"></textarea>
                    </div>

                </li>


                <li class="textarea-field">
                    <div class="msg-error">{{ $errors->first('text') }}</div>
                    <label for="message-contact-us">
                        <span class="label">Текст:</span>
                    </label>
                    <div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
                        <textarea id="editor2" class="form-control" placeholder="Введите текст страницы" name="text" cols="50" rows="10"></textarea>
                    </div>

                </li>

                <li class="text-field">
                    <label for="name-contact-us">
                        <span class="label">Псевдоним:</span>
                    </label>
                    <div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
                        <input placeholder="Введите псевдоним страницы" name="slug" type="text">
                    </div>
                </li>



                <li class="text-field">
                    <label for="name-contact-us">
                        <span class="label">Картинка:</span>

                    </label>
                    <div class="input-prepend">
                        <input class="filestyle" data-buttonText="Выберите изображение" data-buttonName="btn-primary" data-placeholder="Файла нет" name="image" type="file">
                    </div>

                </li>

                <li class="text-field">
                    <label for="name-contact-us">
                        <span class="label">Категория:</span>
                        <br>
                    </label>
                    <div class="input-prepend">

                        <select multiple name="cat[]"><optgroup label="Категория">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </optgroup></select>

                    </div>

                </li>


                <li class="submit-button">
                    <button class="btn btn-the-salmon-dance-3" type="submit">Сохранить</button>
                </li>

            </ul>
       </form>
    </div>
        <div class="cleaner">&nbsp;</div>
@endsection