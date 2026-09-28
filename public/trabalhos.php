<?php
/**
 * Página: Portfólio de Trabalhos — CleanMec Refrigeração
 */
require_once dirname(__DIR__) . '/app/helpers.php';

$pageTitle = 'Trabalhos de Instalação de Ar-Condicionado';
$pageDescription = 'Fotos de instalações de ar-condicionado feitas pela CleanMec Refrigeração em Juazeiro-BA e região: splits instalados e condensadoras em área técnica.';

$projects = require dirname(__DIR__) . '/app/data/projects.php';

require_once dirname(__DIR__) . '/app/partials/head.php';
require_once dirname(__DIR__) . '/app/partials/header.php';
?>

<main class="main-content" id="conteudo-principal" tabindex="-1">
    <!-- Hero Interno -->
    <section class="internal-hero">
        <div class="internal-hero-pattern" aria-hidden="true"></div>
        <div class="container">
            <div class="internal-hero-content">
                <span class="internal-hero-badge">Portfólio</span>
                <h1 class="internal-hero-title">Nossos trabalhos em Juazeiro e região</h1>
                <p class="internal-hero-lead">
                    Alguns serviços feitos pela CleanMec. Cuidado que aparece no acabamento interno e na organização das áreas técnicas.
                </p>
            </div>
        </div>
    </section>

    <!-- Corpo da Página -->
    <section class="internal-body">
        <div class="container">
            <div class="section-intro">
                <h2 class="section-title">Instalações e áreas técnicas</h2>
                <p class="section-subtitle">
                    Toque em "Ver no Instagram" para ver a publicação original de cada serviço.
                </p>
            </div>

            <!-- Grid de Fotos -->
            <div class="gallery-grid">
                <?php foreach ($projects as $project): ?>
                    <?php require dirname(__DIR__) . '/app/components/photo-card.php'; ?>
                <?php endforeach; ?>
            </div>

            <!-- Bloco Editorial de Critérios de Qualidade -->
            <div style="margin-top: 5rem; padding: 3rem; background-color: var(--ice-white); border-radius: var(--radius-lg); border: 1px solid var(--border-light);">
                <div style="max-width: 800px;">
                    <span class="section-kicker">Padrão Técnico</span>
                    <h2 style="font-size: 2rem; color: var(--navy); margin-bottom: 1rem;">O que priorizamos em cada serviço</h2>
                    <p style="color: var(--slate-text); line-height: 1.7; margin-bottom: 2rem;">
                        Mais do que apenas ligar o aparelho, buscamos entregar um resultado organizado, limpo e seguro para quem mora ou trabalha no local:
                    </p>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1.5rem;">
                        <div style="padding: 1.5rem; background-color: var(--white); border-radius: var(--radius-md); border: 1px solid var(--border-light);">
                            <strong style="color: var(--navy); display: block; margin-bottom: 0.35rem; font-size: 1.05rem;">Alinhamento Visual</strong>
                            <p style="font-size: 0.875rem; color: var(--slate-text); margin: 0; line-height: 1.5;">
                                Aparelhos nivelados, com bom acabamento e boa circulação do ar.
                            </p>
                        </div>

                        <div style="padding: 1.5rem; background-color: var(--white); border-radius: var(--radius-md); border: 1px solid var(--border-light);">
                            <strong style="color: var(--navy); display: block; margin-bottom: 0.35rem; font-size: 1.05rem;">Proteção de Tubulação</strong>
                            <p style="font-size: 0.875rem; color: var(--slate-text); margin: 0; line-height: 1.5;">
                                Cuidado com o isolamento e a organização da tubulação, para evitar condensação e gotejamento.
                            </p>
                        </div>

                        <div style="padding: 1.5rem; background-color: var(--white); border-radius: var(--radius-md); border: 1px solid var(--border-light);">
                            <strong style="color: var(--navy); display: block; margin-bottom: 0.35rem; font-size: 1.05rem;">Área Externa Segura</strong>
                            <p style="font-size: 0.875rem; color: var(--slate-text); margin: 0; line-height: 1.5;">
                                Condensadoras bem fixadas, com espaço para ventilação e acesso à manutenção.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chamada Final para Instagram e Orçamento -->
            <div style="margin-top: 4.5rem; text-align: center; max-width: 650px; margin-left: auto; margin-right: auto;">
                <h2 style="font-size: 1.75rem; color: var(--navy); margin-bottom: 1rem;">Gostou do nosso padrão de serviço?</h2>
                <p style="color: var(--slate-text); margin-bottom: 2rem;">
                    Fale com a gente pelo WhatsApp e conte o que o seu ar-condicionado precisa: instalação, manutenção ou reparo.
                </p>
                <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
                    <a href="<?= e(site_config('whatsapp_url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
                        Pedir orçamento no WhatsApp
                    </a>
                    <a href="<?= e(site_config('instagram_url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline">
                        Acompanhar <?= e(site_config('instagram_handle')) ?> no Instagram
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once dirname(__DIR__) . '/app/partials/footer.php'; ?>
