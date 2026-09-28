<?php
/**
 * Página: Manutenção Preventiva e Higienização — CleanMec Refrigeração
 */
require_once dirname(__DIR__) . '/app/helpers.php';

$pageTitle = 'Manutenção Preventiva e Higienização de Ar-Condicionado';
$pageDescription = 'Manutenção preventiva e higienização de ar-condicionado em Juazeiro-BA e região. Limpeza de filtros, serpentina, turbina e dreno. Agende pelo WhatsApp.';

require_once dirname(__DIR__) . '/app/partials/head.php';
require_once dirname(__DIR__) . '/app/partials/header.php';
?>

<main class="main-content" id="conteudo-principal" tabindex="-1">
    <!-- Hero Interno -->
    <section class="internal-hero">
        <div class="internal-hero-pattern" aria-hidden="true"></div>
        <div class="container">
            <div class="internal-hero-content">
                <span class="internal-hero-badge">Especialidades 02 & 03</span>
                <h1 class="internal-hero-title">Manutenção Preventiva & Higienização</h1>
                <p class="internal-hero-lead">
                    Ar-condicionado limpo gela melhor, gasta menos e tem menos chance de parar de uma hora para outra.
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
                        <img src="<?= e(asset('img/instalacao-philco-instagram.webp')) ?>"
                             alt="Evaporadora de ar-condicionado split Philco em funcionamento"
                             width="1440"
                             height="1440"
                             loading="lazy">
                        <figcaption>Dentro da unidade interna ficam filtros, serpentina e turbina, o foco da higienização.</figcaption>
                    </figure>

                    <div class="service-summary">
                        <div class="service-summary-item">
                            <h2>Quando chamar</h2>
                            <p>Cheiro ruim ao ligar, água pingando, aparelho demorando a gelar ou conta de luz mais alta.</p>
                        </div>
                        <div class="service-summary-item">
                            <h2>O que avaliamos</h2>
                            <p>O nível de sujeira, o dreno, a unidade externa e o estado das conexões elétricas.</p>
                        </div>
                        <div class="service-summary-item">
                            <h2>Como pedir</h2>
                            <p>Mande no WhatsApp a marca, a capacidade e o que está acontecendo. A gente combina a visita.</p>
                        </div>
                    </div>

                    <h2>Como fica depois da limpeza</h2>
                    <p>Fotos de serviços da CleanMec: a sujeira que se acumula no filtro e na turbina, antes e depois da higienização.</p>
                    <?php require dirname(__DIR__) . '/app/components/before-after.php'; ?>

                    <h2>Sinais de que o aparelho precisa de cuidado</h2>
                    <p>
                        Com o uso, poeira e umidade se acumulam nas partes internas do ar-condicionado. Alguns sinais comuns:
                    </p>
                    <div class="feature-checklist">
                        <div class="feature-checklist-item">
                            <div class="feature-checklist-icon" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <div>
                                <strong>Cheiro de mofo ao ligar:</strong> costuma indicar sujeira e umidade acumuladas na serpentina e na bandeja.
                            </div>
                        </div>
                        <div class="feature-checklist-item">
                            <div class="feature-checklist-icon" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <div>
                                <strong>Água pingando da unidade interna:</strong> uma causa frequente é o dreno ou a bandeja entupidos.
                            </div>
                        </div>
                        <div class="feature-checklist-item">
                            <div class="feature-checklist-icon" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <div>
                                <strong>Demora para gelar:</strong> a sujeira na serpentina atrapalha a troca de calor.
                            </div>
                        </div>
                        <div class="feature-checklist-item">
                            <div class="feature-checklist-icon" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <div>
                                <strong>Conta de luz mais alta:</strong> com o ar passando com dificuldade, o aparelho trabalha mais para chegar na temperatura.
                            </div>
                        </div>
                    </div>

                    <h2>Limpar o filtro em casa resolve?</h2>
                    <p>
                        Lavar o filtro é um ótimo hábito, mas não substitui a higienização. A poeira mais fina passa pelo filtro e se acumula na <strong>turbina</strong> e na <strong>serpentina</strong>, partes que exigem desmontagem e produtos adequados.
                    </p>

                    <h2>Com que frequência fazer?</h2>
                    <p>
                        Depende do uso e do ambiente: aparelho ligado o dia todo, poeira da rua e animais em casa pedem intervalos menores. Na visita, indicamos a frequência mais adequada para o seu caso.
                    </p>

                    <details class="tech-details">
                        <summary>O que é feito na manutenção</summary>
                        <div class="tech-details-body">
                            <ul class="article-list">
                                <li><strong>Higienização da unidade interna:</strong> carenagem, aletas, serpentina e turbina.</li>
                                <li><strong>Dreno desobstruído:</strong> limpeza da bandeja e verificação da mangueira para evitar vazamentos.</li>
                                <li><strong>Unidade externa:</strong> limpeza da serpentina para recuperar a troca de calor.</li>
                                <li><strong>Checagem elétrica:</strong> inspeção visual de fiação, conexões e fixação.</li>
                            </ul>
                            <p>
                                O nível de sujeira muda de aparelho para aparelho. Na avaliação, vemos se a limpeza pode ser feita no local, com capa de proteção, ou se precisa de uma intervenção mais completa.
                            </p>
                        </div>
                    </details>
                </article>

                <!-- Sidebar de Ação -->
                <aside class="sidebar-sticky">
                    <div class="sidebar-card">
                        <h2 class="sidebar-card-title">Agendar manutenção</h2>
                        <p class="sidebar-card-text">
                            Fale com a CleanMec pelo WhatsApp e veja a disponibilidade de agenda em Juazeiro e região.
                        </p>
                        <div class="sidebar-card-actions">
                            <a href="<?= e(site_config('whatsapp_url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
                                Agendar no WhatsApp
                            </a>
                            <a href="<?= e(site_config('phone_tel')) ?>" class="btn btn-outline">
                                Ligar: <?= e(site_config('phone')) ?>
                            </a>
                        </div>
                    </div>

                    <div class="sidebar-card">
                        <h2 class="sidebar-card-title">Outros serviços</h2>
                        <nav class="sidebar-nav-list" aria-label="Navegação de serviços">
                            <a href="<?= e(url('instalacao.php')) ?>" class="sidebar-nav-link">
                                <span>Instalação</span>
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                            <a href="<?= e(url('diagnostico-reparo.php')) ?>" class="sidebar-nav-link">
                                <span>Diagnóstico & Reparo</span>
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                            <a href="<?= e(url('trabalhos.php')) ?>" class="sidebar-nav-link">
                                <span>Trabalhos</span>
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
