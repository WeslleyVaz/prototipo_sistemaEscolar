@extends('layouts.auth')

@section('title', 'Acesso ao Sistema Escolar')

@section('content')
    <main class="auth-stage auth-stage-landing">
        <header class="landing-brand">
            <span class="sesi-mark" aria-label="SESI">SESI</span>
        </header>

        <nav class="landing-actions" aria-label="Tipo de acesso">
            <a class="btn sesi-pill" href="#">Inspetoras</a>
            <a class="btn sesi-pill" href="#">Gestão</a>
        </nav>
    </main>
@endsection
