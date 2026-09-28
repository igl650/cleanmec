<?php
/**
 * Sitemap XML Dinâmico — CleanMec Refrigeração
 * Gera o mapa do site no padrão sitemaps.org.
 *
 * A base das URLs vem de 'base_url' em app/config/site.php; se estiver vazia,
 * é deduzida do domínio em que o site está publicado (ver site_base_url()).
 * O <lastmod> de cada página é a data real de modificação do arquivo.
 */
require_once dirname(__DIR__) . '/app/helpers.php';

header('Content-Type: application/xml; charset=utf-8');

$baseUrl = site_base_url();

// Relação de páginas públicas indexáveis do site institucional
$pages = [
    ['path' => '',                       'file' => 'index.php',              'priority' => '1.0', 'changefreq' => 'weekly'],
    ['path' => 'servicos.php',           'file' => 'servicos.php',           'priority' => '0.9', 'changefreq' => 'monthly'],
    ['path' => 'instalacao.php',         'file' => 'instalacao.php',         'priority' => '0.8', 'changefreq' => 'monthly'],
    ['path' => 'manutencao-limpeza.php', 'file' => 'manutencao-limpeza.php', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['path' => 'diagnostico-reparo.php', 'file' => 'diagnostico-reparo.php', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['path' => 'trabalhos.php',          'file' => 'trabalhos.php',          'priority' => '0.8', 'changefreq' => 'monthly'],
    ['path' => 'contato.php',            'file' => 'contato.php',            'priority' => '0.7', 'changefreq' => 'monthly'],
    ['path' => 'privacidade.php',        'file' => 'privacidade.php',        'priority' => '0.3', 'changefreq' => 'yearly'],
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php if ($baseUrl !== null): ?>
<?php foreach ($pages as $p):
    $loc = $p['path'] === '' ? $baseUrl . '/' : $baseUrl . '/' . $p['path'];
    $mtime = @filemtime(__DIR__ . '/' . $p['file']);
?>
  <url>
    <loc><?= htmlspecialchars($loc, ENT_XML1, 'UTF-8') ?></loc>
<?php if ($mtime): ?>
    <lastmod><?= date('Y-m-d', $mtime) ?></lastmod>
<?php endif; ?>
    <changefreq><?= $p['changefreq'] ?></changefreq>
    <priority><?= $p['priority'] ?></priority>
  </url>
<?php endforeach; ?>
<?php endif; ?>
</urlset>
