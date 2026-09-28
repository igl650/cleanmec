<?php
/**
 * Componente: fotos reais de limpeza (turbina antes/depois e filtro sujo/limpo).
 * Imagens verticais (stories do Instagram) exibidas inteiras, com a legenda original.
 */
?>
<div class="ba-pair">
    <figure class="ba-item">
        <img src="<?= e(asset('img/turbina-antes-depois.webp')) ?>"
             alt="Turbina de ar-condicionado antes da limpeza, coberta de sujeira, e depois da limpeza, azul e limpa"
             width="521" height="930" loading="lazy">
        <figcaption><strong>Turbina</strong> antes e depois da limpeza.</figcaption>
    </figure>
    <figure class="ba-item">
        <img src="<?= e(asset('img/filtro-sujo-limpo.webp')) ?>"
             alt="Filtro de ar-condicionado com poeira acumulada e filtro limpo"
             width="524" height="930" loading="lazy">
        <figcaption><strong>Filtro de ar</strong> com poeira acumulada e depois de limpo.</figcaption>
    </figure>
</div>
