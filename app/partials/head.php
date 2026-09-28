<?php
/**
 * Parcial: Head HTML, Metadados de SEO Local, Open Graph e Schema.org
 * @var string $pageTitle Título específico da página
 * @var string $pageDescription Meta description específica
 */
$siteName = site_config('name');
$isHome = is_current_page('') || is_current_page('index.php');

if ($isHome) {
    $title = $siteName . ' | ' . ($pageTitle ?: 'Climatização e Ar-Condicionado em Juazeiro-BA');
} else {
    $title = (!empty($pageTitle) ? $pageTitle . ' — ' : '') . $siteName;
}

$description = $pageDescription ?? site_config('short_description');
$noindex = !empty($noindex);
$canonical = $noindex ? null : canonical_url();
$ogImage = absolute_url('assets/img/og-cleanmec.jpg');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($title) ?></title>
    <meta name="description" content="<?= e($description) ?>">
    <meta name="robots" content="<?= $noindex ? 'noindex, follow' : 'index, follow' ?>">
    <meta name="format-detection" content="telephone=no">

<?php if ($canonical): ?>
    <link rel="canonical" href="<?= e($canonical) ?>">
<?php endif; ?>

    <!-- Ícones -->
    <link rel="icon" href="<?= e(asset('img/favicon.svg')) ?>" type="image/svg+xml">
    <link rel="icon" href="<?= e(asset('img/favicon-32.png')) ?>" type="image/png" sizes="32x32">
    <link rel="apple-touch-icon" href="<?= e(asset('img/apple-touch-icon.png')) ?>">
    <meta name="theme-color" content="#0B2136">

    <!-- Open Graph Básico (Redes Sociais e Mensageiros) -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:site_name" content="<?= e($siteName) ?>">
    <meta property="og:title" content="<?= e($title) ?>">
    <meta property="og:description" content="<?= e($description) ?>">
<?php if ($canonical): ?>
    <meta property="og:url" content="<?= e($canonical) ?>">
<?php endif; ?>
<?php if ($ogImage): ?>
    <meta property="og:image" content="<?= e($ogImage) ?>">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="CleanMec Refrigeração — Serviços de Ar-Condicionado em Juazeiro-BA">
    <meta name="twitter:card" content="summary_large_image">
<?php endif; ?>

    <!-- Tipografia (Manrope + Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Folha de estilo do projeto (CSS puro) -->
    <link rel="stylesheet" href="<?= e(asset('css/style.css')) ?>">

    <!-- Schema.org: LocalBusiness -->
    <script type="application/ld+json">
    <?php
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => site_config('name'),
        'description' => site_config('short_description'),
        'telephone' => '+5574981414127',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Residencial São Francisco, R. das Laranjeiras, 65, ap. 002, Antônio Conselheiro',
            'addressLocality' => 'Juazeiro',
            'addressRegion' => 'BA',
            'postalCode' => '48917-129',
            'addressCountry' => 'BR',
        ],
        'sameAs' => [
            site_config('instagram_url'),
            site_config('maps_url'),
        ],
    ];
    if ($canonical) {
        $schema['url'] = canonical_url('');
    }
    if ($ogImage) {
        $schema['image'] = $ogImage;
    }
    $logoUrl = absolute_url('assets/img/apple-touch-icon.png');
    if ($logoUrl) {
        $schema['logo'] = $logoUrl;
    }
    echo json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    ?>
    </script>
</head>
<body>
<!-- Link de acessibilidade para salto direto ao conteúdo -->
<a href="#conteudo-principal" class="skip-link">Pular para o conteúdo principal</a>
<div class="site-wrapper">

