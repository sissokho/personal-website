<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Mouhamadou Moustapha SISSOKHO',
    'description' => 'My personal website',
    'github' => 'https://github.com/sissokho',
    'twitter' => 'https://twitter.com/mm_sissokho',
    'linkedin' => 'https://www.linkedin.com/in/mouhamadou-moustapha-sissokho-548a55125/',
    'collections' => [
        'projects' => [
            'path' => 'work/{slug}',
            'ofType' => function ($page, $type) {
                return $page->type === $type;
            }
        ]
    ]
];
