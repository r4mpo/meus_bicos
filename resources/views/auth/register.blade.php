@extends('auth.templates.main')
@section('title', 'Entrar')
@section('content-page')

    <div class="half">
        <div class="bg order-1 order-md-2" style="background-image: url('/templates/login/images/bg_2.jpg');"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="form-block">
                            
                            <div class="text-center mb-5">
                                <h3>Cadastrar-se em <strong>Meus Bicos</strong></h3>
                            </div>
                            
                            <form method="POST" action="{{ route('register') }}">
                                
                                @csrf
                                
                                <div class="form-group first">
                                    <label for="name">Nome</label>
                                    <input type="text" name="name" class="form-control" placeholder="Digite seu nome..." id="name">
                                </div>

                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail..." id="email">
                                </div>

                                <div class="form-group last mb-3">
                                    <label for="password">Senha</label>
                                    <input type="password" class="form-control" placeholder="Digite sua senha..." name="password" id="password">
                                </div>

                                <div class="form-group last mb-3">
                                    <label for="password_confirmation">Confirmar senha</label>
                                    <input type="password" class="form-control" placeholder="Digite sua senha..." name="password_confirmation" id="password_confirmation">
                                </div>

                                <input type="submit" value="Cadastrar" class="btn btn-block btn-primary">

                                <div class="d-sm-flex align-items-center mt-3">
                                    <p>Você já tem uma conta na plataforma? <strong><a href="{{ route('login') }}">Entre</a></strong>!</p>
                                </div>
                                
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection