<?php
/**
 * Página: Diagnóstico e Correção de Falhas — CleanMec Refrigeração
 */
require_once dirname(__DIR__) . '/app/helpers.php';

$pageTitle = 'Diagnóstico e Conserto de Ar-Condicionado em Juazeiro-BA';
$pageDescription = 'Ar-condicionado não gela, não liga ou desarma o disjuntor? Diagnóstico no local em Juazeiro-BA e região, com explicação clara antes do conserto.';

require_once dirname(__DIR__) . '/app/partials/head.php';
require_once dirname(__DIR__) . '/app/partials/header.php';
?>

<main class="main-content" id="conteudo-principal" tabindex="-1">
    <!-- Hero Interno -->
    <section class="internal-hero">
        <div class="internal-hero-pattern" aria-hidden="true"></div>
        <div class="container">
            <div class="internal-hero-content">
                <span class="internal-hero-badge">Especialidade 04</span>
                <h1 class="internal-hero-title">Diagnóstico & Correção de Falhas</h1>
                <p class="internal-hero-lead">
                    Seu ar parou ou não está gelando? A gente encontra a causa no local e explica o que precisa ser feito antes de qualquer conserto.
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
                        <img src="<?= e(asset('img/condensadoras-instagram.webp')) ?>"
                             alt="Condensadoras de ar-condicionado em área externa"
                             width="1080"
                             height="1439"
                             loading="lazy">
                        <figcaption>Na unidade externa ficam o compressor e o ventilador, pontos que sempre entram na verificação.</figcaption>
                    </figure>

                    <div class="service-summary">
                        <div class="service-summary-item">
                            <h2>Quando chamar</h2>
                            <p>O ar não gela, não liga, faz barulho estranho, forma gelo na tubulação ou desarma o disjuntor.</p>
                        </div>
                        <div class="service-summary-item">
                            <h2>O que avaliamos</h2>
                            <p>A parte elétrica, os capacitores, os ventiladores e o circuito de refrigeração.</p>
                        </div>
                        <div class="service-summary-item">
                            <h2>Como pedir</h2>
                            <p>Conte no WhatsApp o que está acontecendo. Se puder, mande um vídeo do aparelho.</p>
                        </div>
                    </div>

                    <h2>Por que o diagnóstico é feito no local</h2>
                    <p>
                        Um mesmo sintoma pode ter causas bem diferentes. Um aparelho que não gela pode estar com a serpentina suja, um capacitor fraco, um vazamento de fluido ou um problema na placa. Só medindo no próprio aparelho dá para ter certeza e evitar a troca de peças à toa.
                    </p>

                    <h2>Sintomas mais comuns</h2>
                    <div class="feature-checklist">
                        <div class="feature-checklist-item">
                            <div class="feature-checklist-icon" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <div>
                                <strong>Liga, mas não sai ar frio:</strong> pode ser falta de comando para a unidade externa, capacitor do compressor ou perda de fluido.
                            </div>
                        </div>
                        <div class="feature-checklist-item">
                            <div class="feature-checklist-icon" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <div>
                                <strong>Ventilador externo parado ou fraco:</strong> situação que já apareceu em atendimentos da CleanMec; muitas vezes é o capacitor do motor.
                            </div>
                        </div>
                        <div class="feature-checklist-item">
                            <div class="feature-checklist-icon" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <div>
                                <strong>Disjuntor desarma ao ligar:</strong> pode envolver fiação, conexões ou o compressor.
                            </div>
                        </div>
                        <div class="feature-checklist-item">
                            <div class="feature-checklist-icon" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <div>
                                <strong>Gelo na tubulação:</strong> pode vir de sujeira na serpentina ou de perda de pressão no circuito.
                            </div>
                        </div>
                    </div>

                    <div class="info-banner">
                        <div class="info-banner-title">Explicação antes do conserto</div>
                        <p>
                            Você fica sabendo o que falhou, por que falhou e qual peça ou serviço resolve, antes de qualquer troca.
                        </p>
                    </div>

                    <details class="tech-details">
                        <summary>Como é feita a verificação</summary>
                        <div class="tech-details-body">
                            <ul class="article-list">
                                <li><strong>Capacitores:</strong> medição com capacímetro, comparando com o valor de fábrica.</li>
                                <li><strong>Corrente e tensão:</strong> checagem com alicate amperímetro para ver se os componentes trabalham na faixa segura.</li>
                                <li><strong>Circuito de refrigeração:</strong> verificação das pressões e busca por sinais de vazamento.</li>
                            </ul>
                            <p>
                                Sobre recarga de gás: o fluido trabalha em circuito fechado e não se gasta com o uso. Se a pressão caiu, existe um vazamento, e ele precisa ser encontrado e corrigido antes de completar a carga. Por isso a CleanMec não faz recarga avulsa sem corrigir o vazamento.
                            </p>
                        </div>
                    </details>
                </article>

                <!-- Sidebar de Ação -->
                <aside class="sidebar-sticky">
                    <div class="sidebar-card">
                        <h2 class="sidebar-card-title">Agendar diagnóstico</h2>
                        <p class="sidebar-card-text">
                            Seu ar-condicionado parou ou está com defeito? Chame a gente no WhatsApp para agendar a visita.
                        </p>
                        <div class="sidebar-card-actions">
                            <a href="<?= e(site_config('whatsapp_url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
                                Solicitar no WhatsApp
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
                            <a href="<?= e(url('manutencao-limpeza.php')) ?>" class="sidebar-nav-link">
                                <span>Manutenção & Higienização</span>
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                            <a href="<?= e(url('servicos.php')) ?>" class="sidebar-nav-link">
                                <span>Ver todos os serviços</span>
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
