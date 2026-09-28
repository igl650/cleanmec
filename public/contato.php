<?php
/**
 * Página: Contato e Informações de Atendimento — CleanMec Refrigeração
 */
require_once dirname(__DIR__) . '/app/helpers.php';

$pageTitle = 'Contato e Atendimento em Juazeiro-BA';
$pageDescription = 'Entre em contato com a CleanMec Refrigeração em Juazeiro-BA. WhatsApp, telefone, Instagram, horários e endereço.';

require_once dirname(__DIR__) . '/app/partials/head.php';
require_once dirname(__DIR__) . '/app/partials/header.php';
?>

<main class="main-content" id="conteudo-principal" tabindex="-1">
    <!-- Hero Interno -->
    <section class="internal-hero">
        <div class="internal-hero-pattern" aria-hidden="true"></div>
        <div class="container">
            <div class="internal-hero-content">
                <span class="internal-hero-badge">Contato</span>
                <h1 class="internal-hero-title">Fale com a CleanMec Refrigeração</h1>
                <p class="internal-hero-lead">
                    Atendimento técnico direto para tirar dúvidas, solicitar orçamentos e agendar visitas em Juazeiro-BA e região sob consulta.
                </p>
            </div>
        </div>
    </section>

    <!-- Corpo da Página -->
    <section class="internal-body">
        <div class="container">
            <div class="internal-layout">
                <!-- Coluna de Canais e Instruções de Atendimento -->
                <article class="article-content">
                    <h2>Canais de Comunicação Direta</h2>
                    <p>
                        Para garantir agilidade no atendimento e no envio de fotos ou vídeos do seu aparelho, o melhor caminho é o nosso WhatsApp.
                    </p>

                    <!-- Grid de Canais de Contato -->
                    <div style="display: flex; flex-direction: column; gap: 1.5rem; margin: 2rem 0;">
                        <!-- Canal WhatsApp -->
                        <div style="padding: 1.75rem; background-color: var(--white); border: 1px solid var(--border-light); border-left: 4px solid var(--whatsapp); border-radius: var(--radius-md); box-shadow: var(--shadow-sm);">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                                <strong style="font-size: 1.15rem; color: var(--navy);">WhatsApp (recomendado)</strong>
                                <span style="font-size: 0.75rem; font-weight: 800; color: var(--whatsapp-text); text-transform: uppercase;">Resposta Rápida</span>
                            </div>
                            <p style="font-size: 0.925rem; color: var(--slate-text); margin-bottom: 1.25rem;">
                                Ideal para contar o que está acontecendo, mandar fotos ou vídeos do aparelho e combinar o agendamento.
                            </p>
                            <a href="<?= e(site_config('whatsapp_url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
                                Iniciar conversa no WhatsApp
                            </a>
                        </div>

                        <!-- Canal Telefone -->
                        <div style="padding: 1.75rem; background-color: var(--white); border: 1px solid var(--border-light); border-left: 4px solid var(--clean-cyan); border-radius: var(--radius-md); box-shadow: var(--shadow-sm);">
                            <strong style="display: block; font-size: 1.15rem; color: var(--navy); margin-bottom: 0.5rem;">Telefone para Ligação (Voz)</strong>
                            <p style="font-size: 0.925rem; color: var(--slate-text); margin-bottom: 1rem;">
                                Para ligações durante o horário de atendimento.
                            </p>
                            <a href="<?= e(site_config('phone_tel')) ?>" style="font-family: var(--font-heading); font-size: 1.4rem; font-weight: 800; color: var(--navy); display: inline-flex; align-items: center; gap: 0.5rem;">
                                <?= e(site_config('phone')) ?>
                            </a>
                        </div>

                        <!-- Canal Instagram -->
                        <div style="padding: 1.75rem; background-color: var(--white); border: 1px solid var(--border-light); border-radius: var(--radius-md); box-shadow: var(--shadow-sm);">
                            <strong style="display: block; font-size: 1.15rem; color: var(--navy); margin-bottom: 0.5rem;">Instagram</strong>
                            <p style="font-size: 0.925rem; color: var(--slate-text); margin-bottom: 1rem;">
                                Veja serviços que fizemos, dicas de uso e tire dúvidas pelo direct.
                            </p>
                            <a href="<?= e(site_config('instagram_url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline">
                                Acessar <?= e(site_config('instagram_handle')) ?> no Instagram &rarr;
                            </a>
                        </div>
                    </div>

                    <h2>O que Enviar na sua Primeira Mensagem</h2>
                    <p>
                        Para acelerar seu atendimento, sugerimos incluir as seguintes informações ao nos enviar uma mensagem:
                    </p>
                    <div class="feature-checklist">
                        <div class="feature-checklist-item">
                            <div class="feature-checklist-icon" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <div>
                                <strong>Tipo de necessidade:</strong> Se é instalação de aparelho novo, manutenção preventiva, higienização ou diagnóstico de defeito.
                            </div>
                        </div>

                        <div class="feature-checklist-item">
                            <div class="feature-checklist-icon" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <div>
                                <strong>Marca e capacidade do ar:</strong> Se souber a quantidade de BTUs (ex: 9.000, 12.000, 18.000) ou modelo (Split Inverter/Convencional).
                            </div>
                        </div>

                        <div class="feature-checklist-item">
                            <div class="feature-checklist-icon" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <div>
                                <strong>Localização aproximada:</strong> Bairro em Juazeiro ou cidade vizinha para avaliação da rota de atendimento.
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Sidebar com Informações de Base, Endereço e Horários -->
                <aside class="sidebar-sticky">
                    <div class="sidebar-card">
                        <h3 class="sidebar-card-title">Base de Apoio Operacional</h3>
                        <div style="font-size: 0.925rem; color: var(--slate-text); line-height: 1.6; margin-bottom: 1.5rem;">
                            <strong style="color: var(--navy); display: block; margin-bottom: 0.25rem;">Endereço:</strong>
                            <p style="margin-bottom: 0.75rem;"><?= e(site_config('address_full')) ?></p>
                            
                            <div class="scope-boundary-box" style="margin: 0; padding: 1rem;">
                                <strong style="font-size: 0.85rem; color: #92400E; display: block; margin-bottom: 0.25rem;">Aviso de Atendimento:</strong>
                                <p style="font-size: 0.825rem; color: #78350F; margin: 0;">
                                    Este endereço é nossa base de apoio técnico e operacional. Como os atendimentos são externos no imóvel do cliente, <strong>não dispomos de balcão de loja aberta para atendimento presencial sem agendamento prévio</strong>.
                                </p>
                            </div>
                        </div>

                        <h4 style="font-size: 0.95rem; font-weight: 800; color: var(--navy); margin-bottom: 0.5rem;">Horários</h4>
                        <p style="font-size: 0.875rem; color: var(--slate-text); margin-bottom: 1.5rem; line-height: 1.5;">
                            <?= e(site_config('hours_weekdays')) ?><br>
                            <?= e(site_config('hours_weekend')) ?><br>
                            <span style="font-size: 0.775rem; font-style: italic;"><?= e(site_config('hours_note')) ?></span>
                        </p>

                        <a href="<?= e(site_config('maps_url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline" style="width: 100%;">
                            Ver no Google Maps &rarr;
                        </a>
                    </div>

                    <div class="sidebar-card">
                        <h3 class="sidebar-card-title">Dúvidas Frequentes?</h3>
                        <p class="sidebar-card-text">
                            Consulte nossa seção com esclarecimentos sobre cobertura, formas de orçamento e procedimentos de visita.
                        </p>
                        <a href="<?= e(url('/#faq')) ?>" class="service-card-link" style="font-weight: 800;">
                            Acessar o FAQ na página inicial &rarr;
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="location" id="localizacao" aria-labelledby="localizacao-heading" style="padding-top: 0;">
        <div class="container">
            <?php require dirname(__DIR__) . '/app/components/location-map.php'; ?>
        </div>
    </section>
</main>

<?php require_once dirname(__DIR__) . '/app/partials/footer.php'; ?>
