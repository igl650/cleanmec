# CleanMec Refrigeração — site institucional

Site da **CleanMec Refrigeração** (Juazeiro-BA): instalação, manutenção preventiva, limpeza e diagnóstico de ar-condicionado.

PHP 8.1+ sem framework, CSS e JavaScript puros, sem banco de dados. Publicado na Vercel como **site estático** (HTML gerado por `build.php`).

## Estrutura

| Pasta / arquivo | O que é |
| :--- | :--- |
| `public/` | Páginas (`*.php`), CSS, JS e imagens |
| `app/config/site.php` | Contatos, horários, nota do Google, link do mapa, `base_url` |
| `app/data/` | Serviços, passos do atendimento, fotos do portfólio e FAQ |
| `app/partials/`, `app/components/` | Cabeçalho, rodapé, mapa, cartões etc. |
| `build.php` | Gera o site estático em `dist/` |
| `dist/` | **Site pronto que a Vercel publica** (deve ir no commit) |
| `vercel.json` | Configuração da Vercel |
| `fotos-referencia/` | Originais das fotos (não são publicados) |
| `docs/` | Pesquisa, direção visual, plano e checklist de publicação |

## Rodar localmente

```bash
php -S localhost:8000 -t public
```

Abra http://localhost:8000.

## Publicar na Vercel

A Vercel não executa PHP, então o site é exportado para HTML:

```bash
php build.php
```

Com o domínio definido (ativa canonical, imagem de prévia nas redes e sitemap):

```bash
SITE_BASE_URL=https://seudominio.com.br php build.php
```

1. Rode o build e **faça commit da pasta `dist/`** sempre que alterar algo em `public/` ou `app/`.
2. Na Vercel, importe o repositório com *Framework Preset = Other*. O `vercel.json` já indica `dist` como saída e dispensa comando de build.

Em hospedagem com PHP, aponte o *Document Root* para `public/` e mantenha `app/` fora do acesso web.

## Onde editar

* **Telefone, WhatsApp, horários, nota do Google, mapa:** `app/config/site.php`
* **Serviços / FAQ / passos / fotos do portfólio:** `app/data/*.php`
* **Mapa do Google:** `maps_embed_url` em `site.php` (hoje centrado no bairro; para fixar o pino, troque o `q=` pelo endereço completo)
* **Cores e tipografia:** variáveis no topo de `public/assets/css/style.css`

## Antes de divulgar

Veja `docs/CHECKLIST-PUBLICACAO.md`: autorização das fotos, horários, área de atendimento, endereço residencial e domínio.
