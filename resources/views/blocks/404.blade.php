@extends('layouts.base')

@section('title', 'Страница не найдена')

@section('navigation')

@endsection

@section('content')
    <div class="box-in">
        <p>
            <img class="error-404-image group" src="{{ asset('/images/articles/404.png') }}" title="Error 404" alt="404" />
        </p>
        <div class="error-404-text group">
            <p>Страница не найдена.</p>

        </div>
    </div>
    <br>
<hr>
@endsection