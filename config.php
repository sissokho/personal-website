<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Mouhamadou Moustapha SISSOKHO',
    'description' => 'My personal website',
    'collections' => [
        'projects' => [
            'path' => 'work/{slug}',
            'ofType' => function ($page, $type) {
                return $page->type === $type;
            }
        ]
    ],
    'linkIsActive' => function ($page, $section) {
        if (empty($page->getPath()) && empty($section)) { // Page d'accueil path => ''
            return true;
        }

        return  Str::contains($page->getPath(), $section);
    }
];
