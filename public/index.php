<?php
/**
 * Página Inicial (Home) — CleanMec Refrigeração
 * Hero claro com foto real, faixa de números, serviços em lista, como trabalhamos,
 * galeria, avaliações, mapa do Google embutido, FAQ e contato.
 */
require_once dirname(__DIR__) . '/app/helpers.php';

$pageTitle = 'Climatização bem feita, do diagnóstico à instalação';
$pageDescription = 'Instalação, manutenção preventiva, limpeza e diagnóstico de ar-condicionado com atenção aos detalhes em Juazeiro-BA e região sob consulta.';

$services = require dirname(__DIR__) . '/app/data/services.php';
$processSteps = require dirname(__DIR__) . '/app/data/process.php';
$allProjects = require dirname(__DIR__) . '/app/data/projects.php';
$faqs = require dirname(__DIR__) . '/app/data/faq.php';

// O hero já exibe 'instalacao-philco'; a galeria mostra as outras fotos para não repetir.
$galleryProjects = array_filter($allProjects, function ($p) {
    return $p['id'] !== 'instalacao-philco';
});

$waIcon = '<svg class="icon-btn" width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2ZM12.05 20.15C10.57 20.15 9.12 19.76 7.85 19L7.55 18.82L4.43 19.64L5.26 16.6L5.06 16.29C4.24 14.98 3.8 13.47 3.8 11.91C3.8 7.37 7.5 3.67 12.05 3.67C14.25 3.67 16.32 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.05 20.15ZM16.57 14.45C16.32 14.33 15.11 13.73 14.88 13.65C14.65 13.56 14.49 13.52 14.32 13.77C14.15 14.02 13.68 14.57 13.54 14.73C13.4 14.9 13.25 14.92 13 14.79C12.75 14.67 11.96 14.41 11.02 13.57C10.29 12.92 9.79 12.11 9.65 11.87C9.51 11.62 9.64 11.48 9.76 11.36C9.88 11.25 10.02 11.06 10.15 10.92C10.27 10.77 10.31 10.67 10.4 10.5C10.48 10.34 10.44 10.19 10.38 10.07C10.32 9.95 9.83 8.74 9.62 8.24C9.42 7.76 9.22 7.82 9.07 7.81C8.93 7.81 8.76 7.81 8.6 7.81C8.43 7.81 8.16 7.87 7.93 8.12C7.7 8.37 7.06 8.97 7.06 10.19C7.06 11.41 7.95 12.58 8.07 12.75C8.2 12.92 9.82 15.42 12.3 16.49C12.89 16.74 13.35 16.9 13.71 17.01C14.3 17.2 14.84 17.17 15.27 17.11C15.75 17.04 16.74 16.51 16.95 15.93C17.15 15.35 17.15 14.85 17.09 14.75C17.03 14.65 16.88 14.58 16.57 14.45Z"/></svg>';
$star = '<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>';

require_once dirname(__DIR__) . '/app/partials/head.php';
require_once dirname(__DIR__) . '/app/partials/header.php';
?>

<main class="main-content" id="conteudo-principal" tabindex="-1">

    <!-- Hero -->
    <section class="hero" aria-labelledby="hero-heading">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-copy">
                    <span class="hero-place">Juazeiro-BA e região</span>
                    <h1 id="hero-heading" class="hero-title">
                        Climatização bem feita, do <em>diagnóstico</em> à instalação.
                    </h1>
                    <p class="hero-lead">
                        Instalação, manutenção, limpeza e diagnóstico de ar-condicionado, com atenção aos detalhes e explicação clara antes de qualquer serviço.
                    </p>

                    <div class="hero-actions">
                        <a href="<?= e(site_config('whatsapp_url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg" id="hero-cta-whatsapp">
                            <?= $waIcon ?>
                            Pedir orçamento no WhatsApp
                        </a>
                        <a href="#servicos" class="btn btn-outline btn-lg">Ver serviços</a>
                    </div>

                    <p class="hero-proof">
                        <span class="hero-proof-stars" role="img" aria-label="5 de 5 estrelas"><?= str_repeat($star, 5) ?></span>
                        <span>
                            <strong><?= e(site_config('google_rating')) ?></strong> no Google ·
                            <a href="<?= e(site_config('maps_url')) ?>" target="_blank" rel="noopener noreferrer"><?= (int) site_config('google_reviews_count') ?> avaliações</a>
                        </span>
                    </p>
                </div>

                <figure class="hero-photo">
                    <img src="<?= e(asset('img/instalacao-philco-instagram.webp')) ?>"
                         alt="Ar-condicionado split Philco instalado pela CleanMec, com fixação e acabamento cuidadoso"
                         width="1440" height="1440" fetchpriority="high">
                    <figcaption>Instalação de split Philco feita pela CleanMec.</figcaption>
                </figure>
            </div>
        </div>
    </section>

    <!-- Números -->
    <section class="stats" aria-label="Informações sobre a CleanMec">
        <div class="container">
            <div class="stats-grid">
                <div class="stat">
                    <span class="stat-num"><?= e(site_config('base_city')) ?></span>
                    <span class="stat-label">Base de atendimento</span>
                </div>
                <div class="stat">
                    <span class="stat-num">4 serviços</span>
                    <span class="stat-label">Instalação, preventiva, limpeza e diagnóstico</span>
                </div>
                <div class="stat">
                    <span class="stat-num"><a href="<?= e(site_config('maps_url')) ?>" target="_blank" rel="noopener noreferrer"><?= e(site_config('google_rating')) ?> no Google</a></span>
                    <span class="stat-label"><?= (int) site_config('google_reviews_count') ?> avaliações (consulta em <?= e(site_config('google_rating_date')) ?>)</span>
                </div>
                <div class="stat">
                    <span class="stat-num">Contato direto</span>
                    <span class="stat-label">Orçamento pelo WhatsApp oficial ou por telefone</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Serviços -->
    <section class="services" id="servicos" aria-labelledby="servicos-heading">
        <div class="container">
            <div class="services-layout">
                <div class="services-head">
                    <h2 id="servicos-heading" class="section-title">O que fazemos pelo seu ar-condicionado</h2>
                    <p class="section-subtitle">
                        Cada aparelho tem uma necessidade. Avaliamos primeiro e só depois indicamos o serviço.
                    </p>
                    <a href="<?= e(url('servicos.php')) ?>" class="btn btn-outline">Todos os serviços</a>
                </div>

                <div class="service-list">
                    <?php foreach ($services as $service): ?>
                        <?php require dirname(__DIR__) . '/app/components/service-row.php'; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Como trabalhamos -->
    <section class="process" id="processo" aria-labelledby="processo-heading">
        <div class="container">
            <div class="process-layout">
                <div class="process-intro">
                    <h2 id="processo-heading" class="section-title">Como é o atendimento</h2>
                    <p>
                        Da primeira mensagem até a entrega do serviço, você sabe o que vai ser feito. Nada de diagnóstico ou preço fechado sem ver o aparelho.
                    </p>
                    <a href="<?= e(site_config('whatsapp_url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-navy">Começar pelo WhatsApp</a>
                </div>

                <div class="process-steps">
                    <?php foreach ($processSteps as $step): ?>
                        <div class="process-step">
                            <div class="process-step-number" aria-hidden="true"><?= e($step['step']) ?></div>
                            <div>
                                <h3 class="process-step-title"><?= e($step['title']) ?></h3>
                                <p class="process-step-desc"><?= e($step['desc']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Limpeza: antes e depois -->
    <section class="cleaning" id="limpeza" aria-labelledby="limpeza-heading">
        <div class="container">
            <div class="cleaning-layout">
                <div class="cleaning-copy">
                    <h2 id="limpeza-heading" class="section-title">Limpeza que dá para ver</h2>
                    <p class="section-subtitle">
                        Poeira e sujeira se acumulam no filtro e na turbina sem que ninguém perceba. Veja a diferença depois da higienização.
                    </p>
                    <a href="<?= e(url('manutencao-limpeza.php')) ?>" class="btn btn-outline">Conhecer a limpeza e manutenção</a>
                </div>
                <?php require dirname(__DIR__) . '/app/components/before-after.php'; ?>
            </div>
        </div>
    </section>

    <!-- Trabalhos -->
    <section class="gallery-section" id="trabalhos" aria-labelledby="trabalhos-heading">
        <div class="container">
            <div class="section-intro" style="margin-bottom: 0;">
                <h2 id="trabalhos-heading" class="section-title">Serviços que já fizemos</h2>
                <p class="section-subtitle">Fotos reais de trabalhos da CleanMec, publicadas no nosso Instagram.</p>
            </div>

            <div class="gallery-grid">
                <?php foreach ($galleryProjects as $project): ?>
                    <?php require dirname(__DIR__) . '/app/components/photo-card.php'; ?>
                <?php endforeach; ?>

                <div class="gallery-info-card">
                    <span class="gallery-info-tag">Instagram</span>
                    <h3 class="gallery-info-title">Veja mais serviços e dicas de uso</h3>
                    <p class="gallery-info-desc">Registros do dia a dia e orientações para cuidar melhor do seu aparelho.</p>
                    <a href="<?= e(site_config('instagram_url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline">
                        Seguir <?= e(site_config('instagram_handle')) ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Avaliações -->
    <section class="reviews" id="avaliacoes" aria-labelledby="avaliacoes-heading">
        <div class="container">
            <div class="reviews-layout">
                <div class="score-panel">
                    <div class="score-stars" role="img" aria-label="5 de 5 estrelas"><?= str_repeat(str_replace('width="18" height="18"', 'width="24" height="24"', $star), 5) ?></div>
                    <div class="score-num"><?= e(site_config('google_rating')) ?> <span>de 5</span></div>
                    <p class="score-meta">
                        Nota no Google Maps, com <?= (int) site_config('google_reviews_count') ?> avaliações. Consulta feita em <?= e(site_config('google_rating_date')) ?>.
                    </p>
                    <a href="<?= e(site_config('maps_url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-navy">Ler avaliações no Google</a>
                </div>

                <div>
                    <h2 id="avaliacoes-heading" class="section-title">O que os clientes destacam</h2>
                    <p class="section-subtitle">Os pontos mais lembrados nas avaliações:</p>

                    <div class="theme-list">
                        <div class="theme-item">
                            <h3>Pontualidade</h3>
                            <p>Compromisso com o horário combinado e aviso antes do deslocamento.</p>
                        </div>
                        <div class="theme-item">
                            <h3>Organização e limpeza</h3>
                            <p>Cuidado com paredes, piso e móveis durante o serviço.</p>
                        </div>
                        <div class="theme-item">
                            <h3>Cuidado técnico</h3>
                            <p>Atenção na higienização, nas conexões e nos testes do aparelho.</p>
                        </div>
                        <div class="theme-item">
                            <h3>Atendimento claro</h3>
                            <p>Explicação do que precisa ser feito e valor condizente com o serviço.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Localização com mapa embutido -->
    <section class="location" id="localizacao" aria-labelledby="localizacao-heading">
        <div class="container">
            <?php require dirname(__DIR__) . '/app/components/location-map.php'; ?>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq-section" id="faq" aria-labelledby="faq-heading">
        <div class="container">
            <div class="faq-layout">
                <div class="section-intro">
                    <h2 id="faq-heading" class="section-title">Perguntas frequentes</h2>
                    <p class="section-subtitle">Orçamento, área de atendimento e como funciona a visita.</p>
                    <a href="<?= e(site_config('whatsapp_url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline">Outra dúvida? Chame no WhatsApp</a>
                </div>
                <?php require dirname(__DIR__) . '/app/components/faq-accordion.php'; ?>
            </div>
        </div>
    </section>

    <!-- Contato final -->
    <section class="cta-band" id="contato" aria-labelledby="contato-heading">
        <div class="container cta-band-inner">
            <div>
                <h2 id="contato-heading">Precisa de um técnico para o seu ar-condicionado?</h2>
                <p>Conte o que está acontecendo, mande fotos do aparelho e combine o melhor dia para a visita.</p>
            </div>
            <div class="cta-band-actions">
                <a href="<?= e(site_config('whatsapp_url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-navy btn-lg">
                    <?= $waIcon ?>
                    Chamar no WhatsApp
                </a>
                <div class="cta-band-phone">
                    <small>Ou ligue:</small>
                    <a href="<?= e(site_config('phone_tel')) ?>"><?= e(site_config('phone')) ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once dirname(__DIR__) . '/app/partials/footer.php'; ?>
