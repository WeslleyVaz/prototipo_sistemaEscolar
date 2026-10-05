@php
    $navigationItems = [
        ['key' => 'inicio', 'label' => 'Início', 'icon' => 'bi-house-door'],
        ['key' => 'alunos', 'label' => 'Alunos', 'icon' => 'bi-people'],
        ['key' => 'ocorrencias', 'label' => 'Ocorrências', 'icon' => 'bi-journal-text'],
        ['key' => 'saidas', 'label' => 'Saídas antecipadas', 'icon' => 'bi-box-arrow-up-right'],
    ];

    if ($navigationRole === 'coordination') {
        $navigationItems[] = ['key' => 'relatorios', 'label' => 'Relatórios', 'icon' => 'bi-bar-chart'];
    } else {
        $navigationItems[] = ['key' => 'perfil', 'label' => 'Perfil', 'icon' => 'bi-person'];
    }
@endphp

<aside class="portal-sidebar">
    <a class="sidebar-brand" href="#">
        <span class="sesi-mark sesi-mark-sidebar" aria-label="SESI">SESI</span>
        <span class="brand-copy">
            <strong>SESI</strong>
            <small>Sistema Escolar</small>
        </span>
    </a>

    <nav class="sidebar-navigation" aria-label="Navegação principal">
        @foreach ($navigationItems as $item)
            <a class="sidebar-link {{ $activePage === $item['key'] ? 'is-active' : '' }}" href="#">
                <i class="bi {{ $item['icon'] }}" aria-hidden="true"></i>
                <span>{{ $item['label'] }}</span>
            </a>
        @endforeach
    </nav>

    <a class="sidebar-logout" href="#">
        <i class="bi bi-box-arrow-right" aria-hidden="true"></i>
        <span>Sair do Portal</span>
    </a>
</aside>
