@extends('layouts.app')

@section('title', 'Relatórios')
@section('page-heading', 'Relatórios')
@section('active-page', 'relatorios')
@section('navigation-role', 'coordination')
@section('role-label', 'Coordenação')
@section('role-initial', 'C')

@section('content')
    @php
        $classes = [['1ªA', 42], ['2ªA', 67], ['3ªA', 39], ['6ªB', 88], ['7ªA', 59], ['9ªA', 77]];
        $months = [['Abr', 38], ['Mai', 44], ['Jun', 54], ['Jul', 61], ['Ago', 74], ['Set', 66]];
    @endphp

    <p class="content-description">Indicadores e histórico das atividades escolares.</p>

    <section class="stat-grid stat-grid-three report-stat-grid" aria-label="Indicadores do período">
        <article class="stat-card stat-card-compact">
            <div class="stat-card-label"><i class="bi bi-journal-text"></i> Ocorrências no período</div>
            <strong class="stat-value">128</strong>
            <small class="stat-note">Total de registros</small>
        </article>
        <article class="stat-card stat-card-compact">
            <div class="stat-card-label"><i class="bi bi-box-arrow-up-right"></i> Saídas antecipadas</div>
            <strong class="stat-value">34</strong>
            <small class="stat-note">Total no mês</small>
        </article>
        <article class="stat-card stat-card-compact">
            <div class="stat-card-label"><i class="bi bi-people"></i> Alunos envolvidos</div>
            <strong class="stat-value">27</strong>
            <small class="stat-note">No período selecionado</small>
        </article>
    </section>

    <section class="report-grid">
        <article class="chart-card">
            <h2>Ocorrências por turma</h2>
            <div class="horizontal-chart">
                @foreach ($classes as [$className, $value])
                    <div class="horizontal-chart-row">
                        <span>{{ $className }}</span>
                        <span class="horizontal-track"><span style="width: {{ $value }}%"></span></span>
                        <strong>{{ $value }}</strong>
                    </div>
                @endforeach
            </div>
        </article>

        <article class="chart-card">
            <h2>Saídas antecipadas por mês</h2>
            <div class="bar-chart report-bar-chart" role="img" aria-label="Saídas antecipadas por mês">
                @foreach ($months as [$month, $value])
                    <div class="bar-chart-column">
                        <span class="bar-chart-bar" style="height: {{ $value }}%"></span>
                        <span class="bar-chart-label">{{ $month }}</span>
                    </div>
                @endforeach
            </div>
        </article>
    </section>
@endsection
