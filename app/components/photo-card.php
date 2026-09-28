<?php
/**
 * Componente: Card de Fotografia de Trabalho
 * Usado dentro de seções com H2, por isso o título do card é H3.
 * @var array $project ['id', 'title', 'category', 'image', 'width', 'height', 'position', 'source_url', 'caption', 'note']
 */
$project = $project ?? [];
$title = $project['title'] ?? '';
$category = $project['category'] ?? '';
$image = $project['image'] ?? '';
$sourceUrl = $project['source_url'] ?? '';
$caption = $project['caption'] ?? '';
$note = $project['note'] ?? '';
$width = (int) ($project['width'] ?? 1080);
$height = (int) ($project['height'] ?? 1080);
$position = $project['position'] ?? '';
?>
<div class="photo-card">
    <div class="photo-card-media">
        <img src="<?= e(asset($image)) ?>" 
             alt="<?= e($title) ?>" 
             loading="lazy" 
             width="<?= $width ?>" 
             height="<?= $height ?>" 
             class="photo-card-img"<?php if ($position !== ''): ?> style="object-position: <?= e($position) ?>;"<?php endif; ?>>
        <span class="photo-card-badge"><?= e($category) ?></span>
    </div>
    <div class="photo-card-body">
        <h3 class="photo-card-title"><?= e($title) ?></h3>
        <p class="photo-card-caption"><?= e($caption) ?></p>
        <div class="photo-card-meta">
            <?php if ($note !== ''): ?>
                <span class="photo-card-note"><?= e($note) ?></span>
            <?php endif; ?>
            <?php if (!empty($sourceUrl)): ?>
                <a href="<?= e($sourceUrl) ?>" target="_blank" rel="noopener noreferrer" class="photo-card-source">
                    Ver no Instagram &rarr;
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
