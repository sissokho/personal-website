<?php

use Illuminate\Support\Str;

return [
    'linkIsActive' => function ($page, $section) {
        if (empty($page->getPath()) && empty($section)) { // Homepage path => ''
            return true;
        }

        return Str::contains($page->getPath(), $section);
    }
];
