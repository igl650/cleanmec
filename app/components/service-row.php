<?php
/**
 * Componente: linha de serviço (lista editorial numerada)
 * @var array $service ['number', 'title', 'slug', 'short_desc']
 */
$service = $service ?? [];
$slug = $service['slug'] ?? 'servicos.php';
?>
<article class="service-row">
    <span class="service-row-num"><?= e($service['number'] ?? '') ?></span>
    <div>
        <h3 class="service-row-title"><a href="<?= e(url($slug)) ?>"><?= e($service['title'] ?? '') ?></a></h3>
        <p class="service-row-desc"><?= e($service['short_desc'] ?? '') ?></p>
    </div>
    <a href="<?= e(url($slug)) ?>" class="service-row-go" aria-label="Detalhes sobre <?= e($service['title'] ?? '') ?>">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
    </a>
</article>
