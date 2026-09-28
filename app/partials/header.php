<?php
/**
 * Parcial: Cabeçalho Global (Header)
 * Logotipo, navegação principal e CTA para WhatsApp.
 */
$siteName = site_config('name');
$whatsappUrl = site_config('whatsapp_url');
?>
<div class="topbar">
    <div class="topbar-inner">
        <ul class="topbar-list">
            <li>
                <a href="<?= e(site_config('phone_tel')) ?>" class="topbar-item">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    <?= e(site_config('phone')) ?>
                </a>
            </li>
            <li class="topbar-hours">
                <span class="topbar-item">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    Seg–Sex 08h–18h · Sáb–Dom 08h–13h
                </span>
            </li>
        </ul>
        <a href="<?= e(site_config('instagram_url')) ?>" target="_blank" rel="noopener noreferrer" class="topbar-item topbar-social">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="0.6" fill="currentColor"/></svg>
            <?= e(site_config('instagram_handle')) ?>
        </a>
    </div>
</div>

<header class="site-header" id="topo">
    <div class="header-container">
        <!-- Logo -->
        <a href="<?= e(url('')) ?>" class="header-brand" aria-label="Página inicial da CleanMec Refrigeração">
            <img src="<?= e(asset('img/logo-cleanmec.webp')) ?>" alt="CleanMec Refrigeração" width="560" height="215" class="header-logo">
        </a>

        <!-- Botão de alternância mobile (acessível) -->
        <button type="button" 
                class="menu-toggle" 
                id="menuToggle" 
                aria-expanded="false" 
                aria-controls="primaryNavigation" 
                aria-label="Abrir menu de navegação">
            <span class="menu-icon" aria-hidden="true"></span>
        </button>

        <!-- Navegação semântica -->
        <nav class="header-nav" id="primaryNavigation" aria-label="Navegação principal">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="<?= e(url('')) ?>" class="nav-link <?= is_current_page('') ? 'is-active' : '' ?>">Início</a>
                </li>
                <li class="nav-item">
                    <a href="<?= e(url('servicos.php')) ?>" class="nav-link <?= is_current_page('servicos.php') ? 'is-active' : '' ?>">Serviços</a>
                </li>
                <li class="nav-item">
                    <a href="<?= e(url('trabalhos.php')) ?>" class="nav-link <?= is_current_page('trabalhos.php') ? 'is-active' : '' ?>">Trabalhos</a>
                </li>
                <li class="nav-item">
                    <a href="<?= e(url('contato.php')) ?>" class="nav-link <?= is_current_page('contato.php') ? 'is-active' : '' ?>">Contato</a>
                </li>
            </ul>

            <!-- CTA visível dentro do menu no mobile -->
            <div class="nav-mobile-cta">
                <a href="<?= e($whatsappUrl) ?>" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   class="btn btn-primary">
                    Pedir orçamento no WhatsApp
                </a>
            </div>
        </nav>

        <!-- CTA Principal no Header (Desktop) -->
        <div class="header-actions">
            <a href="<?= e($whatsappUrl) ?>" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn btn-primary btn-header">
                Pedir orçamento
            </a>
        </div>
    </div>

    <!-- Navegação básica garantida caso o JavaScript esteja desativado no navegador -->
    <noscript>
        <nav class="noscript-nav" aria-label="Navegação básica alternativa sem JavaScript">
            <ul class="noscript-nav-list">
                <li><a href="<?= e(url('')) ?>" class="<?= is_current_page('') ? 'is-active' : '' ?>">Início</a></li>
                <li><a href="<?= e(url('servicos.php')) ?>" class="<?= is_current_page('servicos.php') ? 'is-active' : '' ?>">Serviços</a></li>
                <li><a href="<?= e(url('trabalhos.php')) ?>" class="<?= is_current_page('trabalhos.php') ? 'is-active' : '' ?>">Trabalhos</a></li>
                <li><a href="<?= e(url('contato.php')) ?>" class="<?= is_current_page('contato.php') ? 'is-active' : '' ?>">Contato</a></li>
                <li><a href="<?= e($whatsappUrl) ?>" target="_blank" rel="noopener noreferrer">WhatsApp</a></li>
            </ul>
        </nav>
    </noscript>
</header>
