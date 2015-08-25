@extends('admin')

@section('content')

    <div class="col-lg-6 col-lg-offset-3">
        {!! Form::open() !!}
        <div class="group">
            <input class="material" name="email" type="email" value="{{ old('email') }}" required>
            <span class="bar"></span>
            <label class="material">e-mail</label>
        </div>

        <div class="group">
            <input class="material" name="password" type="password" required>
            <span class="bar"></span>
            <label class="material">Password</label>
        </div>

        <input type="hidden" name="remember">

        @if ($errors->any())
            <ul class="alert alert-danger" style="list-style-type: none">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div class="btn-group">
            {!! Form::button('Login', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
