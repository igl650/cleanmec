<?php
/**
 * Página: Política de Privacidade e Transparência — CleanMec Refrigeração
 * Alinhada estritamente com o funcionamento técnico real do site:
 * - Sem formulários ou banco de dados no servidor
 * - Sem cookies de rastreamento ou ferramentas de telemetria/analytics
 * - Contatos diretos abertos em WhatsApp, telefone, Instagram e Google Maps
 * - Uso honesto de Google Fonts com menção transparente
 * - Alinhamento com as diretrizes da LGPD (Lei 13.709/2018)
 */
require_once dirname(__DIR__) . '/app/helpers.php';

$pageTitle = 'Política de Privacidade e Transparência';
$pageDescription = 'Diretrizes de privacidade do site institucional da CleanMec Refrigeração. Conheça nossa política de transparência, ausência de cookies de rastreamento e canais diretos.';

require_once dirname(__DIR__) . '/app/partials/head.php';
require_once dirname(__DIR__) . '/app/partials/header.php';
?>

<main class="main-content" id="conteudo-principal" tabindex="-1">
    <!-- Hero Interno -->
    <section class="internal-hero">
        <div class="internal-hero-pattern" aria-hidden="true"></div>
        <div class="container">
            <div class="internal-hero-content">
                <span class="internal-hero-badge">Transparência & Conformidade</span>
                <h1 class="internal-hero-title">Política de Privacidade</h1>
                <p class="internal-hero-lead">
                    Nosso compromisso com a clareza, segurança e respeito aos seus dados ao navegar pelo site institucional da CleanMec Refrigeração.
                </p>
            </div>
        </div>
    </section>

    <!-- Corpo da Página -->
    <section class="internal-body">
        <div class="container">
            <div class="internal-layout">
                <!-- Artigo de Conteúdo Principal -->
                <article class="article-content">
                    <h2>1. Apresentação e Finalidade do Site</h2>
                    <p>
                        Este site institucional pertence à <strong><?= e(site_config('name')) ?></strong>, empresa especializada em serviços técnicos de climatização e ar-condicionado com base operacional em <?= e(site_config('base_city')) ?>.
                    </p>
                    <p>
                        A finalidade exclusiva destas páginas é fornecer aos clientes e parceiros informações institucionais, esclarecimentos técnicos sobre os nossos serviços e canais oficiais de comunicação para consultas, dúvidas e agendamento de atendimentos técnicos.
                    </p>

                    <h2>2. Ausência de Formulários e Banco de Dados Interno</h2>
                    <p>
                        Em respeito ao princípio da minimização de dados, este site <strong>não possui formulários de cadastro, área de login, nem banco de dados de armazenamento de informações de visitantes</strong> em nossa infraestrutura de hospedagem.
                    </p>
                    <p>
                        Nenhum dado pessoal (como CPF, nome completo ou dados bancários) é solicitado, coletado ou armazenado enquanto você navega pelas páginas do site.
                    </p>

                    <h2>3. Redirecionamento para Canais Oficiais de Atendimento</h2>
                    <p>
                        Todo o contato com a CleanMec Refrigeração acontece por links que abrem aplicativos e plataformas de terceiros que você já usa no dia a dia:
                    </p>
                    <ul>
                        <li>
                            <strong>WhatsApp:</strong> ao clicar nos botões de orçamento ou contato, você é direcionado ao WhatsApp da CleanMec (iniciado pelo link <?= e(site_config('whatsapp_url')) ?>). As mensagens trocadas nessa plataforma seguem a criptografia de ponta a ponta e as políticas de privacidade da Meta Platforms.
                        </li>
                        <li>
                            <strong>Telefone (Ligação direta):</strong> ao clicar nos números de telefone (como <?= e(site_config('phone')) ?>), a chamada é encaminhada para o discador do seu aparelho e processada pela sua operadora de telecomunicações.
                        </li>
                        <li>
                            <strong>Instagram:</strong> o link para o perfil <?= e(site_config('instagram_handle')) ?> direciona você para a rede social gerenciada pela Meta Platforms.
                        </li>
                        <li>
                            <strong>Google Maps:</strong> o link para visualizar nossa localização e as avaliações no Google direciona para os serviços da Google LLC.
                        </li>
                    </ul>
                    <p>
                        As informações que você compartilha durante uma conversa de atendimento (como endereço para orçamento, fotos de aparelhos instalados ou horários de preferência) são utilizadas única e exclusivamente para a finalidade de análise técnica, orçamentação e execução do serviço solicitado.
                    </p>

                    <h2>4. Política de Cookies e Rastreamento</h2>
                    <p>
                        Este site adota uma postura estritamente orientada à privacidade do usuário:
                    </p>
                    <ul>
                        <li><strong>Não utilizamos cookies próprios</strong> de identificação, sessão ou rastreamento.</li>
                        <li><strong>Não utilizamos ferramentas de telemetria comportamental</strong>, perfilamento de audiência ou pixels publicitários de redes sociais (como Meta Pixel ou Google Ads Remarketing).</li>
                        <li><strong>Não vendemos, alugamos nem compartilhamos</strong> listas de contatos com terceiros para fins promocionais.</li>
                    </ul>

                    <h2>5. Tipografia e Requisições Técnicas (Google Fonts)</h2>
                    <p>
                        Para a correta e agradável renderização visual da identidade tipográfica (famílias <em>Manrope</em> e <em>Inter</em>), o site realiza requisições técnicas de arquivos de fontes aos servidores do Google Fonts (<code>fonts.googleapis.com</code> e <code>fonts.gstatic.com</code>).
                    </p>
                    <p>
                        Nesse processo, como é padrão no protocolo HTTP/HTTPS na internet, o seu navegador envia requisições técnicas que incluem seu endereço IP e parâmetros básicos do navegador diretamente para a infraestrutura do Google para entrega dos arquivos de fonte. O Google processa essas requisições técnicas de acordo com sua Política de Privacidade geral.
                    </p>

                    <h2>6. Seus Direitos (LGPD — Lei 13.709/2018)</h2>
                    <p>
                        A CleanMec Refrigeração pauta sua conduta no cumprimento da Lei Geral de Proteção de Dados Pessoais (LGPD). Como nosso site não opera bancos de dados cadastrais, a quase totalidade do tratamento de dados restringe-se ao histórico de conversas diretas que você mantém conosco no WhatsApp ou por telefone.
                    </p>
                    <p>
                        A qualquer momento, como titular de dados, você tem o direito de solicitar esclarecimentos sobre informações compartilhadas em orçamentos anteriores, bem como requerer a exclusão de contatos de nossos registros operacionais de atendimento.
                    </p>

                    <h2>7. Esclarecimentos e Contato</h2>
                    <p>
                        Caso tenha qualquer dúvida sobre esta política de privacidade, sobre como tratamos o atendimento técnico ou deseje exercer seus direitos como titular de dados, entre em contato diretamente com nossa base:
                    </p>
                    <div style="background-color: var(--ice-white); border: 1px solid var(--border-light); border-left: 4px solid var(--clean-cyan); padding: 1.5rem; border-radius: var(--radius-md); margin-top: 1.5rem;">
                        <p style="margin: 0 0 0.5rem; font-weight: 700; color: var(--navy);"><?= e(site_config('name')) ?></p>
                        <p style="margin: 0 0 0.5rem; font-size: 0.95rem; color: var(--slate-text);">
                            <strong>Telefone / WhatsApp:</strong> <?= e(site_config('phone')) ?>
                        </p>
                        <p style="margin: 0 0 0.5rem; font-size: 0.95rem; color: var(--slate-text);">
                            <strong>Base Operacional:</strong> <?= e(site_config('base_city')) ?>
                        </p>
                        <p style="margin: 0; font-size: 0.85rem; color: var(--slate-text); font-style: italic;">
                            Última atualização: <?= e(site_config('google_rating_date')) ?>.
                        </p>
                    </div>
                </article>

                <!-- Barra Lateral de Apoio (Sidebar) -->
                <aside class="internal-sidebar">
                    <div class="sidebar-card">
                        <div class="sidebar-card-badge">Resumo Seguro</div>
                        <h3 class="sidebar-card-title">Privacidade por Princípio</h3>
                        <p class="sidebar-card-text">
                            Desenvolvemos este site sem cookies de publicidade, sem armazenamento de dados em servidor e sem formulários invasivos.
                        </p>
                        <div style="margin-top: 1rem; font-size: 0.875rem; color: var(--slate-text); line-height: 1.6;">
                            ✓ Zero rastreamento publicitário<br>
                            ✓ Zero formulários ou cadastros<br>
                            ✓ Contato direto e voluntário<br>
                            ✓ Conformidade com a LGPD
                        </div>
                    </div>

                    <div class="sidebar-card">
                        <h3 class="sidebar-card-title">Canais Diretos</h3>
                        <p class="sidebar-card-text">
                            Fale diretamente com quem entende do serviço, sem intermediários automatizados.
                        </p>
                        <div style="margin-top: 1.25rem; display: flex; flex-direction: column; gap: 0.75rem;">
                            <a href="<?= e(site_config('whatsapp_url')) ?>" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               class="btn btn-primary" 
                               style="width: 100%; justify-content: center;">
                                Falar no WhatsApp
                            </a>
                            <a href="<?= e(site_config('phone_tel')) ?>" 
                               class="btn btn-outline" 
                               style="width: 100%; justify-content: center;">
                                Ligar: <?= e(site_config('phone')) ?>
                            </a>
                        </div>
                    </div>

                    <div class="sidebar-card">
                        <h3 class="sidebar-card-title">Base Operacional</h3>
                        <p class="sidebar-card-text">
                            Atendimento técnico residencial e comercial com ponto de apoio em <?= e(site_config('base_city')) ?>.
                        </p>
                        <div style="margin-top: 1rem;">
                            <a href="<?= e(url('contato.php')) ?>" class="service-card-link">
                                Ver todos os canais de contato &rarr;
                            </a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php require_once dirname(__DIR__) . '/app/partials/footer.php'; ?>

