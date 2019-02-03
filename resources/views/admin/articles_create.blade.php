@extends('layouts.adminbase')

@section('title', 'Добавить новый материал')

@section('navigation')
    @parent
@endsection

@section('content')
<div id="content-page" class="content group">
    <div class="hentry group">
        <form class="contact-form" action="{{asset('/admin/articles')}}" method="post">
            <input name="_token" type="hidden" value="">
            <ul>
                <li class="text-field">
                    <label for="name-contact-us">
                        <span class="label">Название:</span>
                        <br />
                        <span class="sublabel">Заголовок материала</span><br />
                    </label>
                    <div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
                        <input placeholder="Введите название страницы" name="title" type="text">
                    </div>
                </li>

                <li class="text-field">
                    <label for="name-contact-us">
                        <span class="label">Ключевые слова:</span>
                        <br />
                        <span class="sublabel">Заголовок материала</span><br />
                    </label>
                    <div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
                        <input placeholder="Введите ключевые слова" name="keywords" type="text">
                    </div>
                </li>

                <li class="text-field">
                    <label for="name-contact-us">
                        <span class="label">Мета описание:</span>
                        <br />
                        <span class="sublabel">Заголовок материала</span><br />
                    </label>
                    <div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
                        <input placeholder="Введите название страницы" name="meta_desc" type="text">
                    </div>
                </li>

                <li class="text-field">
                    <label for="name-contact-us">
                        <span class="label">Псевдоним:</span>
                        <br />
                        <span class="sublabel">введите псевдоним</span><br />
                    </label>
                    <div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
                        <input placeholder="Введите псевдоним страницы" name="alias" type="text">
                    </div>
                </li>

                <li class="textarea-field">
                    <label for="message-contact-us">
                        <span class="label">Краткое описание:</span>
                    </label>
                    <div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
                        <textarea id="editor" class="form-control" placeholder="Введите текст страницы" name="desc" cols="50" rows="10"></textarea>
                    </div>
                    <div class="msg-error"></div>
                </li>

                <li class="textarea-field">
                    <label for="message-contact-us">
                        <span class="label">Описание:</span>
                    </label>
                    <div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
                        <textarea id="editor2" class="form-control" placeholder="Введите текст страницы" name="text" cols="50" rows="10"></textarea>
                    </div>
                    <div class="msg-error"></div>
                </li>



                <li class="text-field">
                    <label for="name-contact-us">
                        <span class="label">Изображение:</span>
                        <br />
                        <span class="sublabel">Изображение материала</span><br />
                    </label>
                    <div class="input-prepend">
                        <input class="filestyle" data-buttonText="Выберите изображение" data-buttonName="btn-primary" data-placeholder="Файла нет" name="image" type="file">
                    </div>

                </li>

                <li class="text-field">
                    <label for="name-contact-us">
                        <span class="label">Категория:</span>
                        <br />
                        <span class="sublabel">Категория материала</span><br />
                    </label>
                    <div class="input-prepend">
                        <select name="category_id"><optgroup label="Объявления"><option value="2">По электроэнергии</option><option value="3">По воде</option><option value="4">По взносам</option></optgroup></select>
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