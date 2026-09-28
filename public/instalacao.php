<?php
/**
 * Página: Instalação de Ar-Condicionado — CleanMec Refrigeração
 */
require_once dirname(__DIR__) . '/app/helpers.php';

$pageTitle = 'Instalação de Ar-Condicionado em Juazeiro-BA';
$pageDescription = 'Instalação de ar-condicionado split em Juazeiro-BA e região. Avaliação do local, fixação segura, tubulação bem feita e orientação de uso. Peça seu orçamento no WhatsApp.';

require_once dirname(__DIR__) . '/app/partials/head.php';
require_once dirname(__DIR__) . '/app/partials/header.php';
?>

<main class="main-content" id="conteudo-principal" tabindex="-1">
    <!-- Hero Interno -->
    <section class="internal-hero">
        <div class="internal-hero-pattern" aria-hidden="true"></div>
        <div class="container">
            <div class="internal-hero-content">
                <span class="internal-hero-badge">Especialidade 01</span>
                <h1 class="internal-hero-title">Instalação de Ar-Condicionado</h1>
                <p class="internal-hero-lead">
                    Seu aparelho instalado no lugar certo, bem fixado e com acabamento limpo, para gelar bem e durar mais.
                </p>
            </div>
        </div>
    </section>

    <!-- Corpo da Página -->
    <section class="internal-body">
        <div class="container">
            <div class="internal-layout">
                <article class="article-content">
                    <figure class="article-figure">
                        <img src="<?= e(asset('img/instalacao-elgin-instagram.webp')) ?>"
                             alt="Split Elgin instalado pela CleanMec em parede lisa, nivelado e sem tubulação aparente"
                             width="1440"
                             height="1440"
                             loading="lazy">
                        <figcaption>Split Elgin instalado pela CleanMec: aparelho nivelado e parede sem tubulação aparente.</figcaption>
                    </figure>

                    <div class="service-summary">
                        <div class="service-summary-item">
                            <h2>Quando chamar</h2>
                            <p>Comprou um aparelho novo, vai mudar o ar de lugar ou precisa trocar uma instalação antiga.</p>
                        </div>
                        <div class="service-summary-item">
                            <h2>O que avaliamos</h2>
                            <p>Onde fixar as unidades, o trajeto da tubulação, o escoamento do dreno e a parte elétrica.</p>
                        </div>
                        <div class="service-summary-item">
                            <h2>Como pedir</h2>
                            <p>Mande no WhatsApp a marca, a capacidade (BTUs) e o bairro. A gente combina a visita.</p>
                        </div>
                    </div>

                    <h2>O que é avaliado antes de instalar</h2>
                    <p>
                        Uma boa instalação começa antes do primeiro furo na parede. Cada imóvel tem suas particularidades, e o local escolhido faz diferença no rendimento e no barulho do aparelho.
                    </p>
                    <div class="feature-checklist">
                        <div class="feature-checklist-item">
                            <div class="feature-checklist-icon" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <div>
                                <strong>Unidade interna:</strong> um ponto com o ar circulando livre, sem jogar vento frio direto em quem está no cômodo.
                            </div>
                        </div>
                        <div class="feature-checklist-item">
                            <div class="feature-checklist-icon" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <div>
                                <strong>Unidade externa:</strong> base ou suporte firme, em local ventilado e de fácil acesso para as próximas manutenções.
                            </div>
                        </div>
                        <div class="feature-checklist-item">
                            <div class="feature-checklist-icon" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <div>
                                <strong>Tubulação e dreno:</strong> trajeto com o caimento certo para a água escoar sem pingar dentro de casa.
                            </div>
                        </div>
                        <div class="feature-checklist-item">
                            <div class="feature-checklist-icon" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <div>
                                <strong>Parte elétrica:</strong> fiação e disjuntor compatíveis com o aparelho.
                            </div>
                        </div>
                    </div>

                    <h2>Dúvidas comuns sobre instalação</h2>
                    <div class="qa-list">
                        <div class="qa-item">
                            <h3>Já comprei o aparelho. Vocês fazem só a instalação?</h3>
                            <p>Sim. Você compra o aparelho da marca e capacidade que preferir, e a CleanMec avalia o local e faz a instalação completa.</p>
                        </div>
                        <div class="qa-item">
                            <h3>A CleanMec vende aparelhos?</h3>
                            <p>Não somos loja de aparelhos. Nosso trabalho é o serviço técnico: instalação, manutenção e reparo.</p>
                        </div>
                        <div class="qa-item">
                            <h3>Dá para saber o valor antes da visita?</h3>
                            <p>A distância entre as unidades e as condições do local definem a quantidade de tubulação e material. Com as informações e fotos pelo WhatsApp, já adiantamos o que for possível.</p>
                        </div>
                    </div>

                    <details class="tech-details">
                        <summary>Detalhes técnicos da instalação</summary>
                        <div class="tech-details-body">
                            <p>Boas práticas que seguimos para proteger o circuito de refrigeração:</p>
                            <ul class="article-list">
                                <li><strong>Isolamento térmico das linhas de cobre</strong>, evitando condensação e perda de rendimento.</li>
                                <li><strong>Teste de estanqueidade</strong> nas conexões, para prevenir vazamentos de fluido refrigerante.</li>
                                <li><strong>Vácuo no circuito</strong> antes de liberar o fluido, eliminando umidade e ar.</li>
                                <li><strong>Teste de funcionamento e orientações</strong> de uso do controle para economizar energia.</li>
                            </ul>
                        </div>
                    </details>
                </article>

                <!-- Sidebar de Ação -->
                <aside class="sidebar-sticky">
                    <div class="sidebar-card">
                        <h2 class="sidebar-card-title">Agendar instalação</h2>
                        <p class="sidebar-card-text">
                            Fale com a gente pelo WhatsApp: informe a marca, a capacidade e o bairro em Juazeiro ou região para combinarmos a visita.
                        </p>
                        <div class="sidebar-card-actions">
                            <a href="<?= e(site_config('whatsapp_url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
                                Pedir orçamento no WhatsApp
                            </a>
                            <a href="<?= e(site_config('phone_tel')) ?>" class="btn btn-outline">
                                Ligar: <?= e(site_config('phone')) ?>
                            </a>
                        </div>
                    </div>

                    <div class="sidebar-card">
                        <h2 class="sidebar-card-title">Serviços relacionados</h2>
                        <nav class="sidebar-nav-list" aria-label="Serviços relacionados">
                            <a href="<?= e(url('manutencao-limpeza.php')) ?>" class="sidebar-nav-link">
                                <span>Manutenção & Higienização</span>
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                            <a href="<?= e(url('diagnostico-reparo.php')) ?>" class="sidebar-nav-link">
                                <span>Diagnóstico & Reparo</span>
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                            <a href="<?= e(url('trabalhos.php')) ?>" class="sidebar-nav-link">
                                <span>Ver fotos de instalações</span>
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        </nav>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php require_once dirname(__DIR__) . '/app/partials/footer.php'; ?>
