<?php
/**
 * Componente: Acordeão de FAQ Acessível (HTML5 Semântico details/summary)
 * Funciona nativamente mesmo sem JavaScript e oferece acessibilidade total por teclado.
 * @var array $faqs Array com itens ['question', 'answer']
 */
$faqs = $faqs ?? [];
?>
<div class="faq-accordion" role="region" aria-label="Perguntas Frequentes">
    <?php foreach ($faqs as $index => $item): ?>
        <details class="faq-item" <?= $index === 0 ? 'open' : '' ?>>
            <summary class="faq-question">
                <span class="faq-question-text"><?= e($item['question']) ?></span>
                <span class="faq-chevron" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </span>
            </summary>
            <div class="faq-answer">
                <p><?= e($item['answer']) ?></p>
            </div>
        </details>
    <?php endforeach; ?>
</div>
