<?php
/**
 * Configurações Centrais do Site — CleanMec Refrigeração
 * Dados institucionais do site.
 */

return [
    'name' => 'CleanMec Refrigeração',
    'tagline' => 'Climatização bem feita, do diagnóstico à instalação.',
    'short_description' => 'Serviços de instalação, manutenção preventiva, higienização e diagnóstico técnico de ar-condicionado com base em Juazeiro-BA.',
    
    // Contatos
    'phone' => '(74) 98141-4127',
    'phone_tel' => 'tel:+5574981414127',
    'whatsapp_url' => 'https://wa.me/message/U45MUT6ZHJF4F1',
    'instagram_url' => 'https://www.instagram.com/cleanmec_refrigeracao/',
    'instagram_handle' => '@cleanmec_refrigeracao',
    'maps_url' => 'https://maps.app.goo.gl/uhPny6jGAfCdSqAz5',
    // Mapa embutido (Google Maps, sem chave de API). Centralizado no bairro, sem marcar a porta do endereço residencial.
    // Para fixar o pino exato, troque o "q=" pelo endereço completo.
    'maps_embed_url' => 'https://www.google.com/maps?q=Ant%C3%B4nio+Conselheiro%2C+Juazeiro+-+BA&z=14&hl=pt-BR&output=embed',

    // Localização e base
    'base_city' => 'Juazeiro-BA',
    'service_area' => 'Juazeiro e região sob consulta',
    'address_full' => 'Residencial São Francisco, R. das Laranjeiras, 65, ap. 002, Antônio Conselheiro, Juazeiro-BA, CEP 48917-129',
    'address_note' => 'Base operacional (atendimento sob agendamento)',
    
    // Avaliações (Google Maps)
    'google_rating' => '5,0',
    'google_reviews_count' => 65,
    'google_rating_date' => '28/09/2026',
    'google_rating_text' => '5,0 no Google · 65 avaliações',
    
    // Horários
    'hours_weekdays' => 'Segunda a sexta, 08h–18h',
    'hours_weekend' => 'Sábado e domingo, 08h–13h',
    'hours_note' => 'Confirme a disponibilidade de agenda pelo WhatsApp.',
    
    // Domínio canônico. Se vazio, é deduzido do host em que o site está publicado.
    'base_url' => '',
];
