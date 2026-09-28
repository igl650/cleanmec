<?php
/**
 * Exportação estática — CleanMec Refrigeração
 *
 * A Vercel não executa PHP. Este script gera o site pronto (HTML puro) na pasta dist/,
 * que é o que a Vercel publica (ver vercel.json). Rode sempre que alterar algo:
 *
 *   php build.php
 *   SITE_BASE_URL=https://seudominio.com.br php build.php   (recomendado quando o domínio existir)
 *
 * Com SITE_BASE_URL definido, saem também canonical, Open Graph com imagem, sitemap.xml e Sitemap no robots.txt.
 */

$root = __DIR__;
$src = $root . '/public';
$dist = $root . '/dist';
$base = rtrim((string) getenv('SITE_BASE_URL'), '/');

// Página => arquivo de saída (URLs limpas: /servicos serve servicos.html)
$pages = [
    'index.php' => 'index.html',
    'servicos.php' => 'servicos.html',
    'instalacao.php' => 'instalacao.html',
    'manutencao-limpeza.php' => 'manutencao-limpeza.html',
    'diagnostico-reparo.php' => 'diagnostico-reparo.html',
    'trabalhos.php' => 'trabalhos.html',
    'contato.php' => 'contato.html',
    'privacidade.php' => 'privacidade.html',
    '404.php' => '404.html',
];

function rrmdir(string $dir): void
{
    if (!is_dir($dir)) return;
    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST) as $f) {
        $f->isDir() ? rmdir($f->getPathname()) : unlink($f->getPathname());
    }
    rmdir($dir);
}

function rcopy(string $from, string $to): void
{
    @mkdir($to, 0777, true);
    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($from, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::SELF_FIRST) as $f) {
        $target = $to . '/' . substr($f->getPathname(), strlen($from) + 1);
        $f->isDir() ? @mkdir($target, 0777, true) : copy($f->getPathname(), $target);
    }
}

// Remove ".php" dos links/URLs gerados (o servidor estático usa URLs limpas)
function clean_urls(string $s): string
{
    return preg_replace('~(?<=[a-z0-9-])\.php(?=["\'#?<])~', '', $s);
}

function render(string $file, string $base): string
{
    $cmd = escapeshellarg(PHP_BINARY) . ' ' . escapeshellarg($file);
    $env = $base !== '' ? ['SITE_BASE_URL' => $base] : [];
    $proc = proc_open($cmd, [1 => ['pipe', 'w'], 2 => ['pipe', 'w']], $pipes, dirname($file), array_merge(getenv(), $env));
    $out = stream_get_contents($pipes[1]);
    $err = stream_get_contents($pipes[2]);
    $code = proc_close($proc);
    if ($code !== 0 || $err !== '' || stripos($out, 'Warning:') !== false || stripos($out, 'Fatal error') !== false) {
        fwrite(STDERR, "ERRO ao renderizar $file:\n$err\n");
        exit(1);
    }
    return $out;
}

rrmdir($dist);
mkdir($dist, 0777, true);
rcopy($src . '/assets', $dist . '/assets');

foreach ($pages as $php => $html) {
    $out = clean_urls(render($src . '/' . $php, $base));
    file_put_contents($dist . '/' . $html, $out);
    echo "ok  $html\n";
}

if ($base !== '') {
    file_put_contents($dist . '/sitemap.xml', clean_urls(render($src . '/sitemap.php', $base)));
    file_put_contents($dist . '/robots.txt', "User-agent: *\nAllow: /\n\nSitemap: $base/sitemap.xml\n");
    echo "ok  sitemap.xml, robots.txt\n";
} else {
    file_put_contents($dist . '/robots.txt', "User-agent: *\nAllow: /\n");
    echo "aviso: sem SITE_BASE_URL — canonical, imagem Open Graph e sitemap ficam de fora.\n";
}

echo "Pronto: " . count($pages) . " páginas em dist/\n";
