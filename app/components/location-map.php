<?php
/**
 * Componente: Localização com mapa embutido do Google Maps
 * Painel com informações de atendimento + mapa interativo (sem sair do site).
 */
?>
<div class="location-grid">
    <div class="location-panel">
        <h2 id="localizacao-heading">Onde a CleanMec atua</h2>
        <p class="location-lead">
            Base em <?= e(site_config('base_city')) ?>, bairro Antônio Conselheiro. Vamos até você: o atendimento é feito no local do cliente.
        </p>

        <div class="location-facts">
            <div class="location-fact">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <div>
                    <strong>Área de atendimento</strong>
                    <span><?= e(site_config('service_area')) ?></span>
                </div>
            </div>
            <div class="location-fact">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <div>
                    <strong>Horário (ficha do Google)</strong>
                    <span><?= e(site_config('hours_weekdays')) ?><br><?= e(site_config('hours_weekend')) ?></span>
                </div>
            </div>
            <div class="location-fact">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <div>
                    <strong>Telefone</strong>
                    <a href="<?= e(site_config('phone_tel')) ?>"><?= e(site_config('phone')) ?></a>
                </div>
            </div>
        </div>

        <div class="location-actions">
            <a href="<?= e(site_config('maps_url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-navy">
                Abrir no Google Maps
            </a>
            <a href="<?= e(site_config('whatsapp_url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline">
                Falar no WhatsApp
            </a>
        </div>
        <p class="location-note">O endereço é a base de apoio técnico, sem loja aberta ao público. Agende antes pelo WhatsApp.</p>
    </div>

    <div class="map-frame">
        <iframe src="<?= e(site_config('maps_embed_url')) ?>"
                title="Mapa do Google: bairro Antônio Conselheiro, Juazeiro-BA"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen></iframe>
    </div>
</div>
