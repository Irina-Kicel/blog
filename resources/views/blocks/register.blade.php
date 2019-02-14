@extends('layouts.base')

@section('title', 'Страница регистрации')

@section('navigation')

@endsection

@section('content')

    <div class="box-in">
        <h3>Регистрация</h3>
        <div class="hentry group">

            <form id="contact-form-contact-us" class="contact-form" method="POST" action="{{ url('/register') }}">

                @csrf
                <fieldset>

                    <ul>
                        <li class="text-field">
                            <label for="login">
                                <span class="label">Name</span><br />
                            </label>
                            <div class="input-prepend">
                                <input type="text" name="login" id="login" class="required {{ $errors->has('login') ? ' error' : ''}}" value="{{ old('login','') }}" /></div>
                            @if ($errors->has('login'))

                                <p class="message"><strong>{{ $errors->first('login') }}</strong></p>

                            @endif
                        </li>

                        <ul>
                            <li class="text-field">
                                <label for="login">
                                    <span class="label">Email</span><br />
                                </label>
                                <div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
                                    <input type="email" name="email" id="login" class="required {{ $errors->has('email') ? ' error' : ''}}" value="{{ old('email','')}}" /></div>
                                @if ($errors->has('email'))

                                    <p class="message"><strong>{{ $errors->first('email') }}</strong></p>

                                @endif
                            </li>

                            <li class="text-field">
                            <label for="password">
                                <span class="label">Password</span><br />
                            </label>
                            <div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span>
                                <input type="password" name="password"  class="required {{ $errors->has('password') ? ' error' : ''}}" value="" /></div>
                            @if ($errors->has('password'))

                                    <p class="message"><strong>{{ $errors->first('password') }}</strong></p>

                            @endif
                        </li>

                        <li class="text-field">
                            <label for="password">
                                <span class="label">Password2</span><br />
                            </label>
                            <div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span>
                                <input type="password" name="password2"  class="required {{ $errors->has('password2') ? ' error' : ''}}" value="" /></div>
                            @if ($errors->has('password2'))

                                <p class="message"><strong>{{ $errors->first('password2') }}</strong></p>

                            @endif
                        </li>
                        <li class="submit-button">

                            <li class="text-field">
                                <label for="password">
                                    <span class="label">Telephone</span><br />
                                </label>
                                <div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span>
                                    <input type="text" name="telephone"  class="required {{ $errors->has('telephone') ? ' error' : ''}}" placeholder="+7 (999) 222-33-44" value="{{ old('telephone','')}}" /></div>
                                @if ($errors->has('telephone'))

                                    <p class="message"><strong>{{ $errors->first('telephone') }}</strong></p>

                                @endif

                            </li>
                            <li class="submit-button">

                            <input type="submit" name="yit_sendmail" value="Регистрация" class="sendmail alignright" />
                        </li>
                    </ul>
                </fieldset>
            </form>
        </div>

    </div>


@endsection
