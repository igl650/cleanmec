# CleanMec Refrigeração — direção visual para implementação

Este documento complementa `pesquisa-e-plano.md` e `.superdesign/design-system.md`. O arquivo `.superdesign/cleanmec-home-draft.html` é referência de composição, não código de produção. Não copiar Tailwind CDN, imagens remotas do Superdesign ou textos sem conferir os dados abaixo.

## Objetivo

Site institucional de aparência premium e técnica, rápido e fácil de usar no celular, com foco em conversas de orçamento pelo WhatsApp oficial da bio do Instagram. A identidade deve parecer própria da CleanMec, não um template genérico de ar-condicionado.

## O que preservar da prévia

- Logo real e paleta navy/ciano da marca.
- Tipografia forte, amplo espaço em branco, cards de serviços numerados e alternância de seções claras com faixas navy.
- Mensagem principal: **Climatização bem feita, do diagnóstico à instalação.**
- Fotografia real da empresa com links para as publicações de origem.
- Prova do Google com data da consulta: **5,0 de 5 em 65 avaliações, consultado em 28/09/2026**. Esse número é histórico e não deve parecer contador ao vivo.

## Alterações a incorporar

1. **Hero:** a foto de condensadoras da prévia mostra equipamento, mas pouco atendimento humano. Se a empresa fornecer foto horizontal, nítida e autorizada de técnico uniformizado em serviço, usá-la como hero. Até lá, criar composição editorial atraente com as fotos reais disponíveis, sem inventar funcionário, sem imagem de banco fingindo ser da empresa e sem repetir o mesmo recorte grande na galeria. Pode combinar uma foto real com formas geométricas discretas e detalhes técnicos em CSS. A imagem deve ter legenda honesta.
2. **Faixa de confiança:** substituir o bloco “100% Real” por informação útil: base em Juazeiro-BA, atendimento em Juazeiro e região sob consulta, contato direto, nota do Google datada. Não prometer cobertura de Petrolina até confirmar bairros/raio.
3. **Galeria:** usar no máximo as três fotos locais disponíveis, identificando corretamente instalações e condensadoras. Não chamar uma foto de limpeza, manutenção ou antes/depois quando ela não mostra isso. Acrescentar uma seção de antes/depois somente quando chegarem imagens reais desse tipo.
4. **Mobile:** menu funcional e acessível; hero em uma coluna; CTA visível sem rolagem longa; imagens sem cortes ruins; botão flutuante de WhatsApp, se usado, sem cobrir texto ou rodapé; contato fácil por toque.
5. **Conteúdo:** incluir FAQ curto e útil, meios de contato, horário listado no Google com indicação de fonte/data e mapa externo. Evitar depoimentos com nomes/citações fabricados. Resumir temas das avaliações e apontar para a ficha.
6. **Identidade:** preservar o logo existente, mesmo que o arquivo atual seja de baixa resolução. Exibi-lo em tamanho contido para não evidenciar pixelização e registrar pendência de versão original. Não redesenhar a marca com IA.

## Inventário de imagens locais

- `fotos-referencia/logo-perfil-instagram.jpg`: logo oficial capturado do perfil; 150 x 150 px.
- `fotos-referencia/condensadoras-instagram.webp`: condensadoras externas, foto da empresa.
- `fotos-referencia/instalacao-philco-instagram.webp`: registro de instalação.
- `fotos-referencia/instalacao-elgin-instagram.webp`: registro de instalação.

Copiar apenas os arquivos necessários para `public/assets/img/` e manter os originais em `fotos-referencia/`. Otimizar sem sobrescrever as referências. Usar `width`, `height`, `srcset`/`sizes` quando houver variantes reais; não criar URLs de variantes inexistentes. Fotos são referência obtida de publicações oficiais, mas pedir autorização final de uso antes de publicar o site.

## Fatos e limites editoriais

- Nome: CleanMec Refrigeração.
- Base/endereço listado: R. das Laranjeiras, 65, Residencial São Francisco, ap. 002, Antônio Conselheiro, Juazeiro-BA, CEP 48917-129. Por aparentar endereço residencial, não convidar pessoas para visita presencial nem chamar de loja.
- Telefone: (74) 98141-4127; link `tel:+5574981414127`.
- WhatsApp oficial divulgado no Instagram: `https://wa.me/message/U45MUT6ZHJF4F1`. Usar esse link nos CTAs; não presumir que o número telefônico tenha WhatsApp nem substituir por `wa.me/5574...` sem confirmação.
- Instagram: `https://www.instagram.com/cleanmec_refrigeracao/`.
- Google Maps: `https://maps.app.goo.gl/uhPny6jGAfCdSqAz5`.
- Horário listado no Google em 28/09/2026: segunda a sexta 08h–18h; sábado e domingo 08h–13h. Apresentar como “horário informado na ficha Google” até confirmação da empresa.
- Serviços sustentados pelas publicações: instalação de ar-condicionado, manutenção preventiva, limpeza/higienização, diagnóstico e correção de falhas. Não prometer 24h, PMOC, câmara fria, geladeira, venda de aparelhos, certificações, garantias, preço fixo ou atendimento em cidades/bairros não confirmados.

## Padrão visual e funcional

Paleta: `#0B2136`, `#153F63`, `#1AA6C7`, `#F4FAFC`, `#FFFFFF`, `#6B8191`, `#D9E7ED`. Manrope para títulos e Inter para corpo. CSS próprio em `public/assets/css/`, sem Tailwind CDN ou dependência de build. HTML semântico, foco visível, contraste AA, `prefers-reduced-motion`, links válidos, títulos claros e um H1 por página. JavaScript progressivo para menu e FAQ; a navegação e o contato devem continuar utilizáveis sem JavaScript.

## Critério de pronto visual

Revisar em larguras de 360, 390, 768, 1024 e 1440 px. Não aceitar overflow horizontal, menu inacessível, texto sobre imagem ilegível, CTA que some no celular, foto distorcida, logo substituído, texto fictício, links quebrados ou repetição visual cansativa. O resultado final deve parecer uma marca local confiável, com fotografia honesta e conversão direta.
