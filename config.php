<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Jigsaw',
    'description' => 'Website description.',
    'collections' => [
        'projects' => [
            'path' => 'work/{slug}'
        ]
    ],
    'linkIsActive' => function ($page, $section) {
        if (empty($page->getPath()) && empty($section)) { // Page d'accueil path => ''
            return true;
        }

        return  Str::contains($page->getPath(), $section);
    }
];
