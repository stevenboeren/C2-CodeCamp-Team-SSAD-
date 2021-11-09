@extends(backpack_view('blank'))

@php
    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'heading'     => 'Welkom bij Admin van MediaPortal',
        'content'     => 'Hier aan de linkerkant kun je verschillende categorieën aanpassen, toevoegen en verwijderen. Hieronder kun je uitloggen!',
        'button_link' => backpack_url('logout'),
        'button_text' => 'Uitloggen',
    ];
@endphp

