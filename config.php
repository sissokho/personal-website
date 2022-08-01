<?php

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
    ]
];
