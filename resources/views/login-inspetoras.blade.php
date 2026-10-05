@extends('layouts.auth')

@section('title', 'Login Inspetoras')

@section('content')
    <main class="auth-stage auth-stage-login">
        <header class="login-brand">
            <span class="sesi-mark" aria-label="SESI">SESI</span>
        </header>

        <section class="login-panel" aria-labelledby="login-title">
            <span class="login-emblem" aria-hidden="true"><i class="bi bi-shield-check"></i></span>
            <h1 id="login-title">Login Inspetoras</h1>

            <form class="login-form">
                <label class="form-label" for="cpf-inspetora">CPF</label>
                <div class="input-with-icon">
                    <i class="bi bi-person" aria-hidden="true"></i>
                    <input class="form-control" id="cpf-inspetora" type="text" placeholder="000.000.000-00">
                </div>

                <label class="form-label" for="senha-inspetora">Senha</label>
                <div class="input-with-icon">
                    <i class="bi bi-lock" aria-hidden="true"></i>
                    <input class="form-control" id="senha-inspetora" type="password" placeholder="Sua senha de acesso">
                    <button class="input-action" type="button" aria-label="Mostrar senha"><i class="bi bi-eye"></i></button>
                </div>

                <button class="btn sesi-pill login-submit" type="button">Entrar</button>
            </form>
        </section>
    </main>
@endsection
