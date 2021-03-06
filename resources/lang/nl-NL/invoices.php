<?php

return [

    'invoice_number'    => 'Factuurnummer',
    'invoice_date'      => 'Factuur datum',
    'total_price'       => 'Totaalprijs',
    'due_date'          => 'Vervaldatum',
    'order_number'      => 'Bestelnummer',
    'bill_to'           => 'Factuur voor',

    'quantity'          => 'Aantal',
    'price'             => 'Prijs',
    'sub_total'         => 'Subtotaal',
    'discount'          => 'Korting',
    'tax_total'         => 'Totaal BTW',
    'total'             => 'Totaal',

    'item_name'         => 'Artikelnaam|Artikelnamen',

    'show_discount'     => ':discount% Korting',
    'add_discount'      => 'Korting toevoegen',
    'discount_desc'     => 'van subtotaal',

    'payment_due'       => 'Te betalen voor',
    'paid'              => 'Betaald',
    'histories'         => 'Geschiedenis',
    'payments'          => 'Betalingen',
    'add_payment'       => 'Een betaling toevoegen',
    'mark_paid'         => 'Als betaald markeren',
    'mark_sent'         => 'Als verstuurd markeren',
    'download_pdf'      => 'PDF downloaden',
    'send_mail'         => 'E-mail versturen',

    'status' => [
        'draft'         => 'Concept',
        'sent'          => 'Verzonden',
        'viewed'        => 'Bekeken',
        'approved'      => 'Goedgekeurd',
        'partial'       => 'Gedeeltelijk',
        'paid'          => 'Betaald',
    ],

    'messages' => [
        'email_sent'     => 'Factuur e-mail is succesvol verzonden!',
        'marked_sent'    => 'Factuur e-mail is succesvol verzonden!',
        'email_required' => 'Geen e-mailadrs van deze klant!',
    ],

    'notification' => [
        'message'       => 'U ontvangt deze e-mail omdat u een :amount aanstaande factuur heeft voor klant: customer.',
        'button'        => 'Betaal nu',
    ],

];
