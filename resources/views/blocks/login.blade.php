@extends('layouts.base')

@section('title', 'Войти на сайт')

@section('navigation')

@endsection

@section('content')

    <div class="box-in">
        <h3>Войти на сайт</h3>
        <div class="hentry group">

            <form id="contact-form-contact-us" class="contact-form" method="POST" action="{{ url('/login') }}">

                @csrf
                <fieldset>
                    <ul>
                        <li class="text-field">
                            <label for="login">
                                <span class="label">Name</span><br />

                            </label>
                            <div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
                                <input type="text" name="login" id="login" class="required {{ $errors->has('login') ? ' error' : ''}}" value="{{ old('login','') }}" /></div>
                            @if ($errors->has('login'))

									<p class="message"><strong>{{ $errors->first('login') }}</strong></p>

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
                        <li class="submit-button">

                            <input type="submit" name="yit_sendmail" value="Войти" class="sendmail alignright" />
                        </li>
                    </ul>
                </fieldset>
            </form>
        </div>

    </div>


@endsection
