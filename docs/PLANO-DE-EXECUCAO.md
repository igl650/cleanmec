# Plano de Execução — Site Institucional CleanMec Refrigeração

Documento técnico de planejamento e governança para implementação do site institucional da **CleanMec Refrigeração**, baseado estritamente nas diretrizes de `pesquisa-e-plano.md`, `DIRECAO-VISUAL-FINAL.md`, `.superdesign/design-system.md` e na inspeção da prévia `.superdesign/cleanmec-home-draft.html`.

---

## 1. Diretrizes Técnicas e Arquitetura

- **Stack:** PHP 8.1+, CSS puro (Vanilla CSS com Design Tokens nativos), JavaScript puro (ES6+ progressivo).
- **Sem dependências externas desnecessárias:** Sem frameworks (Bootstrap, Tailwind), sem bibliotecas de build (Webpack, Vite, npm), sem Composer, sem banco de dados, sem CDNs externas de terceiros (sem Tailwind CDN, sem Iconify CDN remoto; ícones como SVGs inline leves e otimizados).
- **Document Root:** `public/`.
- **Portabilidade:** Todos os caminhos de arquivos em código PHP devem usar `__DIR__` ou funções auxiliares baseadas na raiz do projeto; nenhum caminho absoluto do Windows (`C:\...`) deve existir no código do site.
- **Degradação graciosa:** O site deve ser 100% navegável e com links/contatos funcionais mesmo com JavaScript desabilitado.

---

## 2. Páginas e Rotas (.php)

Todas as rotas públicas residem em `public/`, sendo acessadas diretamente pelo servidor embutido do PHP (`php -S localhost:8000 -t public`):

| Arquivo público | Rota / URL | Finalidade e Conteúdo |
|---|---|---|
| `public/index.php` | `/` ou `/index.php` | **Home:** Hero editorial de impacto, faixa de confiança factual, visão geral dos 4 serviços, processo de trabalho em 3 etapas, galeria de trabalhos reais, síntese de prova social com nota Google datada, FAQ acessível, bloco de conversão e rodapé. |
| `public/servicos.php` | `/servicos.php` | **Índice de Serviços:** Detalhamento do escopo de atuação técnica da CleanMec, direcionando para os serviços específicos com critérios de atendimento e transparência técnica. |
| `public/instalacao.php` | `/instalacao.php` | **Instalação de Ar-condicionado:** Boas práticas de instalação (fixação, isolamento, vácuo, nivelamento), ambientes atendidos, importância do dimensionamento e CTA para avaliação. |
| `public/manutencao-limpeza.php` | `/manutencao-limpeza.php` | **Manutenção Preventiva e Higienização:** Sinais de alerta (odor, perda de rendimento, ruído, consumo), etapas de higienização de filtros, bandeja e serpentina, periodicidade recomendada e benefícios para a qualidade do ar. |
| `public/diagnostico-reparo.php` | `/diagnostico-reparo.php` | **Diagnóstico e Correção de Falhas:** Procedimento de diagnóstico no local (inspeção elétrica, capacitores, ventiladores, fluido refrigerante), transparência orçamentária e recusa a diagnóstico por telefone. |
| `public/trabalhos.php` | `/trabalhos.php` | **Trabalhos Reais / Portfólio:** Galeria fiel com as fotografias reais registradas pela empresa, legendas contextuais exatas e links para as publicações oficiais no Instagram. |
| `public/contato.php` | `/contato.php` | **Contato e Base Operacional:** Canais de atendimento (WhatsApp oficial da bio, telefone clicável, Instagram, Google Maps), horários datados da ficha Google e esclarecimento sobre base operacional em Juazeiro-BA. |
| `public/privacidade.php` | `/privacidade.php` | **Privacidade:** Política de privacidade enxuta e honesta, informando ausência de coleta de cookies/rastreamento interno e redirecionamento direto aos canais de comunicação externos. |
| `public/robots.txt` | `/robots.txt` | Diretrizes para motores de busca com sitemap condicional. |
| `public/sitemap.php` | `/sitemap.php` | Sitemap XML gerado dinamicamente caso um domínio base esteja configurado no ambiente. |

---

## 3. Árvore de Arquivos do Projeto

```text
cleanmec-site-plano/
├── .superdesign/                    # Arquivos originais de referência visual (preservados intactos)
│   ├── cleanmec-home-draft.html
│   └── design-system.md
├── fotos-referencia/                # Banco de imagens originais de referência (preservadas intactas)
│   ├── condensadoras-instagram.webp
│   ├── instalacao-elgin-instagram.webp
│   ├── instalacao-philco-instagram.webp
│   └── logo-perfil-instagram.jpg
├── app/                             # Código da aplicação fora da document root pública
│   ├── config/
│   │   └── site.php                 # Constantes e configurações (contatos, horários, base, URLs)
│   ├── data/
│   │   ├── services.php             # Lista dos 4 serviços confirmados e seus metadados
│   │   ├── projects.php             # Inventário das fotos reais e links das postagens
│   │   └── faq.php                  # Perguntas frequentes e respostas prudentes
│   ├── helpers.php                  # Funções utilitárias (escape HTML, URLs relativas, renderizadores)
│   ├── partials/
│   │   ├── head.php                 # Meta tags, SEO, Open Graph, CSS e favicons
│   │   ├── header.php               # Topo, logotipo real preservado, menu acessível e CTA
│   │   └── footer.php               # Rodapé com canais, horários, navegação e copyright
│   └── components/
│       ├── service-card.php         # Card padronizado de serviço com numeração técnica (01 a 04)
│       ├── photo-card.php           # Card de foto real com legenda honesta e link de origem
│       ├── faq-accordion.php        # Acordeão acessível para perguntas frequentes
│       └── cta-banner.php           # Seção de chamada para orçamento no WhatsApp
├── public/                          # Document root da hospedagem / servidor PHP
│   ├── assets/
│   │   ├── css/
│   │   │   └── style.css            # Estilo central sem frameworks (tokens, layout, tipografia, a11y)
│   │   ├── js/
│   │   │   └── main.js              # Interações progressivas (menu mobile acessível, FAQ, copy/links)
│   │   └── img/                     # Imagens ativas copiadas de fotos-referencia/
│   │       ├── condensadoras-instagram.webp
│   │       ├── instalacao-elgin-instagram.webp
│   │       ├── instalacao-philco-instagram.webp
│   │       └── logo-perfil-instagram.jpg
│   ├── index.php
│   ├── servicos.php
│   ├── instalacao.php
│   ├── manutencao-limpeza.php
│   ├── diagnostico-reparo.php
│   ├── trabalhos.php
│   ├── contato.php
│   ├── privacidade.php
│   ├── robots.txt
│   └── sitemap.php
├── DIRECAO-VISUAL-FINAL.md          # Diretrizes de design e limites editoriais (origem)
├── pesquisa-e-plano.md              # Pesquisa factual de fontes oficiais (origem)
├── PROMPTS-ANTIGRAVITY.md           # Roteiro sequencial de desenvolvimento (origem)
└── PLANO-DE-EXECUCAO.md             # Este plano técnico
```

---

## 4. Componentes Compartilhados

1. **`head.php`**: Injeta dinamicamente títulos de página (`<title>`), meta descriptions contextuais, canonical (quando domínio configurado), Open Graph tags, viewport responsiva, variáveis de cor no `:root` e inclusão do `style.css`.
2. **`header.php`**: Cabeçalho fixo com logo oficial real em container contido (evitando pixelização), navegação semântica desktop com estados hover/focus em ciano, botão mobile interativo (hambúrguer/fechar com atributos ARIA) e botão primário de orçamento.
3. **`footer.php`**: Informações institucionais completas com identificação da base em Juazeiro-BA, horários de atendimento rotulados como consulta de 28/09/2026, links para redes e mapa, navegação secundária e link de privacidade.
4. **`service-card.php`**: Renderiza cada um dos 4 serviços com numeração tipográfica (`01`, `02`, `03`, `04`), ícone técnico SVG representativo, descrição objetiva e link para a página específica.
5. **`photo-card.php`**: Apresenta foto real com recorte proporcional, legenda clara (sem inventar que condensadoras são limpeza) e link externo com texto âncora claro para o post no Instagram.
6. **`faq-accordion.php`**: Componente construído sobre `<details>` e `<summary>` com aprimoramento progressivo via JavaScript para animação suave, mantendo suporte total por teclado e sem JS.
7. **`cta-banner.php`**: Bloco final em Navy profundo com chamada direta para o WhatsApp oficial e link secundário por telefone.

---

## 5. Regras de Conteúdo Confirmado e Limites Editoriais

| Item | Regra Estrita de Conteúdo | O que NUNCA fazer |
|---|---|---|
| **Nome da Marca** | CleanMec Refrigeração. | Não alterar ou abreviar para nomes fictícios. |
| **WhatsApp Oficial** | Link exato da bio do Instagram: `https://wa.me/message/U45MUT6ZHJF4F1`. | Não usar `wa.me/5574981414127` sem antes confirmar se a linha suporta WhatsApp direto. |
| **Telefone / Voz** | (74) 98141-4127 via `tel:+5574981414127`. | Não omitir DDD ou formatar sem padrão nacional. |
| **Localização / Base** | "Base em Juazeiro-BA; atendimento em Juazeiro e região sob consulta". | Não prometer atendimento irrestrito em Petrolina nem cidades vizinhas sem alinhamento de taxas e deslocamento. |
| **Endereço Físico** | Residencial São Francisco, R. das Laranjeiras, 65, ap. 002, Juazeiro-BA (identificado como base operacional / endereço listado no Google). | Nunca chamar de "loja física", "balcão" ou convidar para "visitas sem agendamento". |
| **Prova Social Google** | 5,0/5 estrelas baseado em 65 avaliações (consultado em 28/09/2026). | Não criar contador dinâmico em tempo real, não forjar depoimentos com fotos ou nomes falsos. |
| **Escopo de Serviços** | Exclusivamente: 1) Instalação, 2) Manutenção preventiva, 3) Limpeza e higienização, 4) Diagnóstico e reparo. | Proibido anunciar: câmaras frias, conserto de geladeiras, PMOC empresarial formal, venda de aparelhos, plantão 24h, garantias não comprovadas. |
| **Fotografias** | Apenas as 4 imagens locais de `fotos-referencia/`, identificadas honestamente. | Proibido usar banco de imagens fingindo ser a equipe, gerar técnicos em IA ou trocar fotos de condensadora por "antes e depois". |

---

## 6. Como a Prévia (`cleanmec-home-draft.html`) Será Corrigida

A inspeção detalhada do rascunho em `.superdesign/cleanmec-home-draft.html` revelou pontos fracos que serão corrigidos na implementação de produção:

1. **Hero:**
   - *Problema na prévia:* Usa apenas a foto vertical de condensadoras esticada em 4/5 com um badge flutuante genérico, resultando em sensação puramente mecânica sem contexto de serviço e com repetição na galeria posterior.
   - *Correção:* Criação de uma composição editorial equilibrada em CSS puro combinando foto de instalação interna finalizada com detalhes técnicos em linhas sutis, legenda honesta e espaço estruturado para futura foto horizontal de técnico uniformizado quando autorizada.
2. **Faixa de Confiança:**
   - *Problema na prévia:* Exibe bloco com o rótulo "100% Real", que soa amador e pouco informativo.
   - *Correção:* Substituir por dados factuais e concretos: "Base operacional em Juazeiro-BA", "Atendimento em Juazeiro e região sob consulta", "Nota 5,0 no Google Maps com 65 avaliações em 28/09/2026" com link direto para a ficha.
3. **Galeria Fiel:**
   - *Problema na prévia:* Rotula uma foto de condensadoras externas de maneira genérica e repete o mesmo recurso do hero.
   - *Correção:* Exibir as fotos reais disponíveis com suas características precisas: condensadoras externas na área técnica, instalação interna Philco e instalação finalizada Elgin, com link direto para as respectivas postagens no Instagram.
4. **Experiência Mobile:**
   - *Problema na prévia:* O menu desktop é simplesmente escondido com `hidden md:flex`, não havendo menu móvel funcional (os links de navegação somem totalmente no smartphone). No hero, a sobreposição de elementos causa empurrão do CTA para baixo da dobra em telas pequenas (360px–390px).
   - *Correção:* Implementação de menu gaveta/overlay acessível via botão toggle com teclado e atributos ARIA, disposição do hero em coluna com o botão de WhatsApp visível e de fácil toque (área mínima 48×48px), e sem cortes impróprios nas imagens.
5. **Seção de FAQ:**
   - *Problema na prévia:* Totalmente ausente na prévia.
   - *Correção:* Implementação de FAQ acessível e conciso baseado em `<details>` e `<summary>`, respondendo sobre formas de orçamento, escopo atendido, base local e horários.
6. **Contato e CTAs:**
   - *Problema na prévia:* Utiliza o link genérico `wa.me/5574981414127` em vez do canal oficial verificado no perfil da marca.
   - *Correção:* Padronização de todos os CTAs de WhatsApp para o link oficial da bio `https://wa.me/message/U45MUT6ZHJF4F1`, acompanhado de ligação telefônica direta `tel:+5574981414127` e links diretos para Instagram e Maps.
7. **Logotipo e Ativos:**
   - *Problema na prévia:* Carrega imagem remota de storage Supabase com dimensões forçadas (`h-12 w-[112px] object-cover`), o que causa distorção na imagem quadrada original de 150×150 px.
   - *Correção:* Cópia local para `public/assets/img/logo-perfil-instagram.jpg`, exibição em tamanho contido (40px a 44px de altura) com proporção quadrada preservada, sem distorção e sem evidenciar baixa resolução, acompanhado da tipografia da marca.

---

## 7. Decisões de Responsividade, Acessibilidade e SEO

### 7.1. Responsividade
- Abordagem Mobile-First, com testes estruturados nas larguras: 360px, 390px, 768px, 1024px e 1200px+ (container máximo de 1200px).
- Tipografia com escala fluida via `clamp()` para títulos e subtítulos.
- Grid de 12 colunas no desktop, convertendo para 1 ou 2 colunas nos breakpoints móveis.
- Sem transbordamento horizontal (`overflow-x: hidden` onde apropriado e contenção de largura estrita).

### 7.2. Acessibilidade (WCAG 2.1 AA)
- Estrutura semântica rigorosa: `<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<footer>`.
- Contraste cromático verificado: Navy `#0B2136` em fundos claros (#FFFFFF e #F4FAFC), Branco `#FFFFFF` em fundos Navy, e Ciano `#1AA6C7` aplicado com cuidado em textos de apoio sobre fundo escuro.
- Indicadores visíveis de foco (`:focus-visible`) com contorno ciano de 2px e espaçamento adequado.
- Suporte a `prefers-reduced-motion: reduce`, desabilitando transições e transformações para usuários sensíveis.
- Textos alternativos (`alt`) descritivos e factuais em todas as imagens.
- Alvos de toque (touch targets) de no mínimo 48 × 48 px para botões e links móveis.

### 7.3. SEO Local e Metadados
- Título (`<title>`) e meta description exclusivos para cada página, destacando o serviço e a região ("Juazeiro-BA e região").
- Exatamente um `<h1>` por página.
- Configuração de domínio canônico opcional: caso `site.php` não tenha domínio definido, não renderizar URLs com `example.com`.
- Schema.org estruturado em JSON-LD do tipo `LocalBusiness` contendo apenas dados confirmados (nome, telefone, endereço listado, link do Google Maps e do Instagram). Não declarar horários dinâmicos complexos ou tabelas de preços não homologadas.

---

## 8. Comandos para Execução e Testes Locais

### 8.1. Servidor Embutido do PHP (a partir da raiz do projeto)
```powershell
php -S localhost:8000 -t public
```
Acesso no navegador: `http://localhost:8000`

### 8.2. Validação de Sintaxe PHP (Lint de todos os arquivos)
```powershell
Get-ChildItem -Recurse -Filter *.php | ForEach-Object { php -l $_.FullName }
```

---

## 9. Lista de Pendências e Validações Antes da Publicação

Itens que devem ser homologados diretamente com os responsáveis pela CleanMec Refrigeração antes de colocar o site em produção:

1. **Atendimento em Petrolina-PE:** Confirmar se há atendimento habitual na cidade vizinha, quais bairros são atendidos e se existe taxa de deslocamento.
2. **Canal Oficial de WhatsApp:** Confirmar se o número de voz (74) 98141-4127 também possui WhatsApp comercial ativo ou se o atendimento deve continuar exclusivamente pelo link encurtado da bio (`https://wa.me/message/U45MUT6ZHJF4F1`).
3. **Endereço no Site:** Confirmar se o endereço listado no Google Maps pode ser exibido integralmente ou se deve ser mantido apenas como "Juazeiro-BA".
4. **Horários de Atendimento:** Confirmar se o horário informado na ficha Google (inclusive sábados e domingos das 08h às 13h) reflete expediente técnico externo ou apenas recepção de mensagens.
5. **Logotipo Vetorial:** Solicitar o arquivo original em vetor (.SVG ou .AI) ou PNG em alta resolução com fundo transparente para substituir o avatar de 150×150 px.
6. **Fotografia da Equipe para o Hero:** Solicitar foto horizontal de boa resolução de técnico uniformizado em serviço real para enriquecer a primeira dobra.
7. **Autorização Formal de Imagens:** Confirmar a autorização de uso das fotografias extraídas das publicações do Instagram.
8. **Dados Cadastrais e Fiscais:** Definir se CNPJ e razão social serão divulgados no rodapé.
9. **Domínio e Hospedagem:** Aquisição do domínio definitivo (ex: `.com.br`) e contratação de servidor compatível com PHP 8.1+.
