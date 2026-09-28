# Checklist de Pré-Publicação — CleanMec Refrigeração

Este documento relaciona exclusivamente os itens que dependem de confirmação, decisão ou fornecimento de arquivos pelo proprietário da **CleanMec Refrigeração** antes do lançamento comercial do site institucional.

---

## 1. Área de Atendimento e Atuação em Petrolina
- [ ] **Definir a política exata para Petrolina-PE:**
  - O site atual informa prudentemente: *"Base em Juazeiro-BA; atendimento em Juazeiro e região sob consulta"*.
  - **Decisão necessária:** Confirmar se há atendimento rotineiro em Petrolina, se é cobrada taxa de deslocamento/travessia ou se o atendimento é exclusivo sob agendamento prévio. Caso confirmado, a menção a Petrolina poderá ser adicionada na chave `service_area` em `app/config/site.php`.

## 2. Canais de Contato (WhatsApp e Telefone)
- [ ] **Validação do link de WhatsApp:**
  - O site utiliza exatamente o link oficial extraído da bio do Instagram: `https://wa.me/message/U45MUT6ZHJF4F1`.
  - **Confirmação:** Testar e confirmar se esta conta de WhatsApp Business permanece como o canal principal de recepção de orçamentos da empresa.
- [ ] **Telefone Comercial:**
  - O telefone configurado para chamadas de voz é `(74) 98141-4127` (`tel:+5574981414127`).
  - **Confirmação:** Confirmar se este é o número telefônico preferencial ou se há outro número direto/fixo a ser exibido.

## 3. Uso do Endereço Residencial
- [ ] **Endereço da Ficha Google:**
  - O endereço cadastrado publicamente no Google Maps é:
    > *Residencial São Francisco, R. das Laranjeiras, 65, ap. 002, Antônio Conselheiro, Juazeiro-BA, CEP 48917-129*
  - **Diretriz aplicada no site:** Apresentado expressamente como *"endereço listado na ficha Google / base de apoio operacional"*, deixando claro que **não é loja aberta para atendimento presencial ao público**.
  - **Confirmação do proprietário:** Confirmar se o endereço deve permanecer visível dessa forma ou se prefere ocultar o número/apartamento, mantendo apenas *"Base em Juazeiro-BA"*.

## 4. Horários de Atendimento
- [ ] **Horários informados na Ficha Google em 28/09/2026:**
  - Segunda a sexta: 08h às 18h.
  - Sábado e domingo: 08h às 13h.
  - **Confirmação:** Validar se a empresa realmente atende aos finais de semana ou se os horários de atendimento técnico presencial devem ser alterados em `app/config/site.php`.

## 5. Autorização Formal das Fotografias
- [ ] **Fotografias reais utilizadas:**
  1. `instalacao-philco-instagram.webp` (Instalação interna residencial da Philco — usada no Hero e Trabalhos)
  2. `condensadoras-instagram.webp` (Alinhamento de condensadoras externas — usada na Galeria e Trabalhos)
  3. `instalacao-elgin-instagram.webp` (Instalação interna Elgin — usada na Galeria e Trabalhos)
  4. `turbina-antes-depois.webp` e 5. `filtro-sujo-limpo.webp` (limpeza; usadas na home e em Manutenção e Limpeza). São prints de stories do Instagram, com legenda gravada; **falta o link da publicação original** e confirmar que são serviços da CleanMec (a foto do filtro mostra a mão de uma pessoa).
  - **Ação:** Obter autorização formal e expressa do responsável pela CleanMec para a veiculação dessas fotografias no site público.
  - **Oportunidade futura:** Obter uma foto horizontal de técnico uniformizado com ferramentas para substituir o card editorial do Hero.

## 6. Arquivo Original do Logotipo
- [ ] **Logotipo em Alta Resolução (Vetor ou PNG transparente):**
  - Atualmente é utilizado o avatar do Instagram (`150x150 px`, JPG). Embora esteja nítido no tamanho reduzido (44px), a empresa deve fornecer o arquivo original em vetor (SVG) ou PNG com fundo transparente em alta resolução para garantir máxima fidelidade visual em telas Retina/4K.

## 7. Escopo Exato de Serviços
- [ ] **Confirmação dos 4 Serviços Oferecidos:**
  - O site limita-se estritamente a:
    1. Instalação de ar-condicionado tipo split.
    2. Manutenção preventiva.
    3. Limpeza e higienização profunda.
    4. Diagnóstico técnico e reparo de falhas.
  - **Confirmação:** Reafirmar com o proprietário que o site não inclui geladeiras residenciais, câmaras frias comerciais, PMOC industrial, recarga avulsa de gás refrigerante sem conserto de vazamento, nem atendimento de emergência 24h.

## 8. Domínio e Hospedagem
- [ ] **Registro de Domínio:**
  - Registrar o domínio próprio (ex.: `cleanmecrefrigeracao.com.br` no Registro.br).
- [ ] **Configuração da Chave `base_url`:**
  - Inserir a URL canônica completa (ex.: `'base_url' => 'https://cleanmecrefrigeracao.com.br'`) no arquivo `app/config/site.php`. Isso ativará automaticamente as tags canônicas, metadados do Open Graph e o `sitemap.php`.
- [ ] **Servidor com PHP 8.1+ e SSL:**
  - Contratar hospedagem com suporte a PHP 8.1 ou superior, certificado SSL (HTTPS) gratuito ativado (Let's Encrypt) e apontar a raiz do servidor web (*Document Root*) para a pasta `public/`.

## 9. Texto Legal e Privacidade
- [ ] **Revisão da Política de Privacidade:**
  - Ler e aprovar o conteúdo de `public/privacidade.php`, que declara a ausência de coleta de dados no servidor, redirecionamento direto aos canais oficiais (WhatsApp/Telefone) e uso técnico do Google Fonts.
