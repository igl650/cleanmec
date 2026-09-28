<?php
/**
 * Funções auxiliares (helpers) — CleanMec Refrigeração
 * Fornece escape HTML, URLs portáveis e utilitários de metadados.
 */

/**
 * Retorna uma configuração do site ou o array completo.
 */
function site_config(?string $key = null, mixed $default = null): mixed
{
    static $config = null;
    if ($config === null) {
        $config = require __DIR__ . '/config/site.php';
    }
    
    if ($key === null) {
        return $config;
    }
    
    return $config[$key] ?? $default;
}

/**
 * Escapa strings para saída HTML segura (XSS prevention).
 */
function e(?string $value): string
{
    return htmlspecialchars((string) ($value ?? ''), ENT_QUOTES, 'UTF-8');
}

/**
 * Retorna uma URL interna relativa portável.
 */
function url(string $path = ''): string
{
    $trimmed = ltrim($path, '/');
    if ($trimmed === '' || $trimmed === 'index.php') {
        return '/';
    }
    return '/' . $trimmed;
}

/**
 * Retorna o caminho de um ativo estático em public/assets/.
 */
function asset(string $path = ''): string
{
    return '/assets/' . ltrim($path, '/');
}

/**
 * Verifica se a rota fornecida é a página atual para destaque na navegação.
 * Funciona tanto em requisições HTTP normais quanto em execuções de CLI.
 */
function is_current_page(string $path): bool
{
    $currentUri = $_SERVER['REQUEST_URI'] ?? null;
    if ($currentUri !== null && $currentUri !== '') {
        $currentPath = parse_url($currentUri, PHP_URL_PATH) ?? '/';
    } else {
        $script = $_SERVER['SCRIPT_NAME'] ?? $_SERVER['PHP_SELF'] ?? '';
        $base = basename($script);
        $currentPath = ($base === '' || $base === 'index.php' || $base === '-') ? '/' : '/' . $base;
    }
    
    $target = url($path);
    if ($target === '/') {
        return $currentPath === '/' || $currentPath === '/index.php';
    }
    
    return $currentPath === $target;
}

/**
 * Retorna a base absoluta do site (sem barra final).
 * Usa 'base_url' de site.php quando definida; caso contrário, deriva do host da requisição,
 * de modo que canonical, Open Graph e sitemap funcionem em qualquer endereço em que o site esteja no ar.
 */
function site_base_url(): ?string
{
    // SITE_BASE_URL (variável de ambiente) tem prioridade: usada pelo build estático (build.php).
    $configured = trim((string) (getenv('SITE_BASE_URL') ?: site_config('base_url', '')));
    if ($configured !== '') {
        return rtrim($configured, '/');
    }

    $host = $_SERVER['HTTP_HOST'] ?? '';
    if ($host === '' || !preg_match('/^[A-Za-z0-9.\-]+(:\d{1,5})?$/', $host)) {
        return null;
    }

    $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');

    return ($https ? 'https://' : 'http://') . $host;
}

/**
 * Retorna a URL canônica absoluta da página atual (ou do caminho informado).
 */
function canonical_url(?string $path = null): ?string
{
    $baseUrl = site_base_url();
    if ($baseUrl === null) {
        return null;
    }

    if ($path === null) {
        $uri = $_SERVER['REQUEST_URI'] ?? '';
        if ($uri !== '') {
            $path = parse_url($uri, PHP_URL_PATH) ?? '/';
        } else {
            // Execução via CLI (build estático): deduz a página pelo nome do script
            $base = basename($_SERVER['SCRIPT_NAME'] ?? '');
            $path = ($base === '' || $base === 'index.php') ? '/' : '/' . $base;
        }
    }

    $cleanPath = url($path);
    return $cleanPath === '/' ? $baseUrl . '/' : $baseUrl . $cleanPath;
}

/**
 * Retorna uma URL absoluta para ativos ou páginas, ou null se não for possível determinar a base.
 */
function absolute_url(string $path = ''): ?string
{
    $baseUrl = site_base_url();
    if ($baseUrl === null) {
        return null;
    }
    return $baseUrl . '/' . ltrim($path, '/');
}
