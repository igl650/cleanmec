<?php
/**
 * Página: Índice de Serviços Especializados — CleanMec Refrigeração
 */
require_once dirname(__DIR__) . '/app/helpers.php';

$pageTitle = 'Serviços Especializados em Climatização';
$pageDescription = 'Serviços técnicos em ar-condicionado residencial e comercial em Juazeiro-BA e região. Instalação, manutenção preventiva, higienização e diagnóstico.';

$services = require dirname(__DIR__) . '/app/data/services.php';

require_once dirname(__DIR__) . '/app/partials/head.php';
require_once dirname(__DIR__) . '/app/partials/header.php';
?>

<main class="main-content" id="conteudo-principal" tabindex="-1">
    <!-- Hero Interno -->
    <section class="internal-hero">
        <div class="internal-hero-pattern" aria-hidden="true"></div>
        <div class="container">
            <div class="internal-hero-content">
                <span class="internal-hero-badge">Atuação Técnica Especializada</span>
                <h1 class="internal-hero-title">Serviços Especializados em Ar-Condicionado</h1>
                <p class="internal-hero-lead">
                    Trabalho técnico criterioso voltado para o rendimento térmico, eficiência energética e durabilidade do seu equipamento com base em <?= e(site_config('base_city')) ?>.
                </p>
            </div>
        </div>
    </section>

    <!-- Corpo da Página -->
    <section class="internal-body">
        <div class="container">
            <div class="internal-layout">
                <!-- Conteúdo Principal -->
                <article class="article-content">
                    <h2>Nosso Escopo Técnico de Atuação</h2>
                    <p>
                        A <strong>CleanMec Refrigeração</strong> atua exclusivamente com sistemas de climatização (ar-condicionado tipo split, hi-wall e equipamentos convencionais/inverter). Priorizamos procedimentos técnicos em conformidade com as boas práticas de refrigeração, sem atalhos que comprometam o funcionamento do aparelho.
                    </p>

                    <!-- Lista detalhada dos 4 serviços -->
                    <div style="display: flex; flex-direction: column; gap: 2rem; margin: 2.5rem 0;">
                        <?php foreach ($services as $srv): ?>
                            <div style="padding: 2rem; background-color: var(--white); border: 1px solid var(--border-light); border-radius: var(--radius-md); box-shadow: var(--shadow-sm); border-left: 4px solid var(--clean-cyan);">
                                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem;">
                                    <span style="font-family: var(--font-heading); font-size: 1.5rem; font-weight: 800; color: var(--cyan-text);">
                                        <?= e($srv['number']) ?>
                                    </span>
                                    <span style="font-size: 0.8rem; font-weight: 700; color: var(--slate-text); text-transform: uppercase;">
                                        Especialidade
                                    </span>
                                </div>
                                <h3 style="margin: 0 0 0.75rem; font-size: 1.35rem; color: var(--navy);">
                                    <?= e($srv['title']) ?>
                                </h3>
                                <p style="margin-bottom: 1.25rem; font-size: 0.95rem; line-height: 1.6;">
                                    <?= e($srv['full_desc']) ?>
                                </p>
                                <a href="<?= e(url($srv['slug'])) ?>" class="service-card-link" style="font-weight: 800;">
                                    Ver detalhes do serviço &rarr;
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <h2>O que não fazemos</h2>
                    <p>
                        Nosso foco é ar-condicionado. Para você não perder tempo, estes serviços <strong>não</strong> fazem parte do nosso atendimento:
                    </p>

                    <div class="scope-boundary-box">
                        <div class="scope-boundary-title">Fora do nosso atendimento:</div>
                        <p>
                            • Não consertamos geladeiras, freezers ou refrigeradores domésticos.<br>
                            • Não realizamos montagem ou manutenção de câmaras frigoríficas industriais.<br>
                            • Não vendemos recarga de gás avulsa sem prévio teste e correção de vazamento (o gás não se consome; se baixou, há vazamento).<br>
                            • Não oferecemos contratos formais de PMOC para grandes indústrias nem atuamos em regime de plantão emergencial 24h.
                        </p>
                    </div>

                    <h2>Como é Realizado o Atendimento</h2>
                    <p>
                        Todo atendimento começa com uma conversa pelo WhatsApp. Definimos dia e turno para a visita no local do imóvel em Juazeiro ou região próxima. No local, o equipamento é inspecionado com rigor para identificar as necessidades reais antes de qualquer execução.
                    </p>

                    <div class="info-banner">
                        <div class="info-banner-title">Precisa de suporte no seu aparelho?</div>
                        <p>
                            Chame a gente no WhatsApp, informe a marca, capacidade (BTUs) e o que está acontecendo com o equipamento para alinharmos a visita.
                        </p>
                    </div>
                </article>

                <!-- Sidebar com Ação Rápida e Navegação -->
                <aside class="sidebar-sticky">
                    <div class="sidebar-card">
                        <h3 class="sidebar-card-title">Atendimento Direto</h3>
                        <p class="sidebar-card-text">
                            Solicite uma visita técnica para instalação, revisão preventiva, limpeza profunda ou diagnóstico de falha.
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
                        <h3 class="sidebar-card-title">Navegue pelos Serviços</h3>
                        <nav class="sidebar-nav-list" aria-label="Serviços individuais">
                            <a href="<?= e(url('instalacao.php')) ?>" class="sidebar-nav-link">
                                <span>01. Instalação</span>
                                <span>&rarr;</span>
                            </a>
                            <a href="<?= e(url('manutencao-limpeza.php')) ?>" class="sidebar-nav-link">
                                <span>02 & 03. Manutenção & Limpeza</span>
                                <span>&rarr;</span>
                            </a>
                            <a href="<?= e(url('diagnostico-reparo.php')) ?>" class="sidebar-nav-link">
                                <span>04. Diagnóstico & Reparo</span>
                                <span>&rarr;</span>
                            </a>
                            <a href="<?= e(url('trabalhos.php')) ?>" class="sidebar-nav-link">
                                <span>Trabalhos</span>
                                <span>&rarr;</span>
                            </a>
                        </nav>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php require_once dirname(__DIR__) . '/app/partials/footer.php'; ?>
