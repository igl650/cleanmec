<?php
/**
 * Página 404 — CleanMec Refrigeração
 */
require_once dirname(__DIR__) . '/app/helpers.php';

$pageTitle = 'Página não encontrada';
$noindex = true;
$pageDescription = 'A página que você procura não foi encontrada.';

require_once dirname(__DIR__) . '/app/partials/head.php';
require_once dirname(__DIR__) . '/app/partials/header.php';
?>

<main class="main-content" id="conteudo-principal" tabindex="-1">
    <section class="internal-hero">
        <div class="container">
            <div class="internal-hero-content">
                <span class="internal-hero-badge">Erro 404</span>
                <h1 class="internal-hero-title">Página não encontrada</h1>
                <p class="internal-hero-lead">O endereço pode ter mudado ou não existe mais. Volte ao início ou fale direto com a gente.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 0.9rem; margin-top: 1.75rem;">
                    <a href="<?= e(url('')) ?>" class="btn btn-navy">Voltar ao início</a>
                    <a href="<?= e(site_config('whatsapp_url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">Chamar no WhatsApp</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once dirname(__DIR__) . '/app/partials/footer.php'; ?>
