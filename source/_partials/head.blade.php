<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="{{ $page->description }}">

{{-- Facebook Open Graph --}}
<meta property="og:image" content="/assets/images/og-image.jpg">
<meta property="og:image:height" content="279">
<meta property="og:image:width" content="279">
<meta property="og:title" content="{{ $page->title }}">
<meta property="og:description" content="{{ $page->description }}">
<meta property="og:url" content="">

{{-- Twitter Card --}}
<meta name="twitter:card" content="summary">
<meta name="twitter:creator" content="@mm_sissokho" />

{{-- Favicons --}}
<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/assets/images/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="/assets/images/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

<title>@yield('title') - {{ $page->title }}</title>

<link rel="canonical" href="{{ $page->getUrl() }}">

{{-- Google fonts --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

<script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
