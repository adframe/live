<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>

        <meta name="description" content="Join AdFrame's TikTok LIVE Network for exclusive campaigns, battles & more. Engage your audience and reach new heights.">
        <meta name="keywords" content="tiktok, tiktok live, creator network, agency, stream key">
        <meta name="robots" content="noindex, nofollow">

        <!-- Google / Search Engine Tags -->
        <meta itemprop="name" content="AdFrame TikTok LIVE Creator Network">
        <meta itemprop="description" content="Join AdFrame's TikTok LIVE Network for exclusive campaigns, battles & more. Engage your audience and reach new heights.">
        <meta itemprop="image" content="/assets/images/social-image.png">

        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ $page->getUrl() }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="AdFrame TikTok LIVE Creator Network">
        <meta property="og:description" content="Join AdFrame's TikTok LIVE Network for exclusive campaigns, battles & more. Engage your audience and reach new heights.">
        <meta property="og:image" content="/assets/images/social-image.png">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="AdFrame TikTok LIVE Creator Network">
        <meta name="twitter:description" content="Join AdFrame's TikTok LIVE Network for exclusive campaigns, battles & more. Engage your audience and reach new heights.">
        <meta name="twitter:image" content="/assets/images/social-image.png">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="/assets/images/favicon.png"/>

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="text-gray-900 font-sans antialiased">
        <div class="min-h-screen bg-white">
            @yield('body')
        </div>

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @stack('scripts')
    </body>
</html>
