@extends('auth.templates.main')
@section('title', 'Definir nova senha')
@section('content-page')

    <div class="half">
        <div class="bg order-1 order-md-2" style="background-image: url('/templates/login/images/bg_2.jpg');"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="form-block">

                            <div class="text-center mb-5">
                                <h3>Redefinir sua <strong>senha</strong></h3>
                            </div>

                            <form method="POST" action="{{ route('password.store') }}">

                                @csrf

                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <div class="form-group first">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Digite seu e-mail..." id="email">
                                </div>

                                <div class="form-group last mb-3">
                                    <label for="password">Senha</label>
                                    <input type="password" class="form-control" placeholder="Digite sua senha..."
                                        name="password" id="password">
                                </div>

                                <div class="form-group last mb-3">
                                    <label for="password_confirmation">Confirmar senha</label>
                                    <input type="password" class="form-control" placeholder="Digite sua senha..." name="password_confirmation" id="password_confirmation">
                                </div>

                                <input type="submit" value="Redefinir" class="btn btn-block btn-primary">

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
