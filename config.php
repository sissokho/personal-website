<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Mouhamadou Moustapha SISSOKHO',
    'description' => 'Web Developer, Laravel - Livewire - Alpine.js - Tailwind CSS - Jigsaw.',
    'github' => 'https://github.com/sissokho',
    'twitter' => 'https://twitter.com/mm_sissokho',
    'linkedin' => 'https://www.linkedin.com/in/sissokho',
    'collections' => [
        'projects' => [
            'path' => 'work/{slug}',
            'ofType' => function ($page, $type) {
                return $page->type === $type;
            }
        ]
    ]
];
