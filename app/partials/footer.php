<?php
/**
 * Parcial: Rodapé Global (Footer)
 * Informações de atendimento, canais de contato, navegação e termos.
 */
$siteName = site_config('name');
$phone = site_config('phone');
$phoneTel = site_config('phone_tel');
$whatsappUrl = site_config('whatsapp_url');
$instagramUrl = site_config('instagram_url');
$instagramHandle = site_config('instagram_handle');
$mapsUrl = site_config('maps_url');
$baseCity = site_config('base_city');
$hoursWeekdays = site_config('hours_weekdays');
$hoursWeekend = site_config('hours_weekend');
$googleRatingText = site_config('google_rating_text');
?>
<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-grid">
            <!-- Coluna 1: Marca e Posicionamento -->
            <div class="footer-col footer-col-brand">
                <div class="footer-brand">
                    <img src="<?= e(asset('img/logo-cleanmec.webp')) ?>" alt="<?= e($siteName) ?>" width="560" height="215" class="footer-logo">
                </div>
                <p class="footer-tagline">
                    Serviço técnico cuidadoso em ar-condicionado. Instalação, manutenção preventiva, higienização e diagnóstico com base em <?= e($baseCity) ?>.
                </p>
                <div class="footer-badge-rating">
                    <a href="<?= e($mapsUrl) ?>" target="_blank" rel="noopener noreferrer" class="footer-rating-link">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <?= e($googleRatingText) ?>
                    </a>
                </div>
            </div>

            <!-- Coluna 2: Informações de Atendimento e Horários -->
            <div class="footer-col footer-col-info">
                <h2 class="footer-title">Atendimento & Horários</h2>
                <ul class="footer-info-list">
                    <li>
                        <span class="footer-info-label">Base operacional:</span>
                        <span class="footer-info-val"><?= e($baseCity) ?> (atendimento presencial sob agendamento)</span>
                    </li>
                    <li>
                        <span class="footer-info-label">Horários:</span>
                        <span class="footer-info-val"><?= e($hoursWeekdays) ?><br><?= e($hoursWeekend) ?></span>
                    </li>
                    <li>
                        <span class="footer-info-label">Telefone:</span>
                        <a href="<?= e($phoneTel) ?>" class="footer-link"><?= e($phone) ?></a>
                    </li>
                    <li>
                        <span class="footer-info-label">WhatsApp:</span>
                        <a href="<?= e($whatsappUrl) ?>" target="_blank" rel="noopener noreferrer" class="footer-link">Enviar mensagem</a>
                    </li>
                    <li>
                        <span class="footer-info-label">Instagram:</span>
                        <a href="<?= e($instagramUrl) ?>" target="_blank" rel="noopener noreferrer" class="footer-link"><?= e($instagramHandle) ?></a>
                    </li>
                </ul>
            </div>

            <!-- Coluna 3: Navegação Interna -->
            <div class="footer-col footer-col-nav">
                <h2 class="footer-title">Navegação</h2>
                <ul class="footer-nav-list">
                    <li><a href="<?= e(url('')) ?>">Início</a></li>
                    <li><a href="<?= e(url('servicos.php')) ?>">Todos os Serviços</a></li>
                    <li><a href="<?= e(url('instalacao.php')) ?>">Instalação</a></li>
                    <li><a href="<?= e(url('manutencao-limpeza.php')) ?>">Manutenção & Higienização</a></li>
                    <li><a href="<?= e(url('diagnostico-reparo.php')) ?>">Diagnóstico & Reparo</a></li>
                    <li><a href="<?= e(url('trabalhos.php')) ?>">Trabalhos</a></li>
                    <li><a href="<?= e(url('contato.php')) ?>">Contato</a></li>
                    <li><a href="<?= e(url('privacidade.php')) ?>">Política de Privacidade</a></li>
                </ul>
            </div>
        </div>

        <!-- Barra inferior de direitos -->
        <div class="footer-bottom">
            <p class="footer-copy">
                &copy; <?= date('Y') ?> <?= e($siteName) ?>. Todos os direitos reservados.
            </p>
            <p class="footer-legal">
                <a href="<?= e(url('privacidade.php')) ?>">Privacidade</a>
            </p>
        </div>
    </div>
</footer>
</div><!-- /.site-wrapper -->

<!-- Botão flutuante de WhatsApp (oculto quando outro botão de WhatsApp está visível; ver main.js) -->
<a href="<?= e($whatsappUrl) ?>" 
   target="_blank" 
   rel="noopener noreferrer" 
   class="floating-whatsapp" 
   id="floatingWhatsappBtn" 
   aria-label="Falar com a CleanMec no WhatsApp">
    <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
        <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2ZM12.05 20.15C10.57 20.15 9.12 19.76 7.85 19L7.55 18.82L4.43 19.64L5.26 16.6L5.06 16.29C4.24 14.98 3.8 13.47 3.8 11.91C3.8 7.37 7.5 3.67 12.05 3.67C14.25 3.67 16.32 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.05 20.15ZM16.57 14.45C16.32 14.33 15.11 13.73 14.88 13.65C14.65 13.56 14.49 13.52 14.32 13.77C14.15 14.02 13.68 14.57 13.54 14.73C13.4 14.9 13.25 14.92 13 14.79C12.75 14.67 11.96 14.41 11.02 13.57C10.29 12.92 9.79 12.11 9.65 11.87C9.51 11.62 9.64 11.48 9.76 11.36C9.88 11.25 10.02 11.06 10.15 10.92C10.27 10.77 10.31 10.67 10.4 10.5C10.48 10.34 10.44 10.19 10.38 10.07C10.32 9.95 9.83 8.74 9.62 8.24C9.42 7.76 9.22 7.82 9.07 7.81C8.93 7.81 8.76 7.81 8.6 7.81C8.43 7.81 8.16 7.87 7.93 8.12C7.7 8.37 7.06 8.97 7.06 10.19C7.06 11.41 7.95 12.58 8.07 12.75C8.2 12.92 9.82 15.42 12.3 16.49C12.89 16.74 13.35 16.9 13.71 17.01C14.3 17.2 14.84 17.17 15.27 17.11C15.75 17.04 16.74 16.51 16.95 15.93C17.15 15.35 17.15 14.85 17.09 14.75C17.03 14.65 16.88 14.58 16.57 14.45Z"/>
    </svg>
    <span class="floating-whatsapp-label">WhatsApp</span>
</a>

<!-- Scripts progressivos -->
<script src="<?= e(asset('js/main.js')) ?>"></script>
</body>
</html>
