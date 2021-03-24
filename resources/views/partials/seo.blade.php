<meta name="url" content="{{ request()->url() }}">
<meta name="language" Content="{{ app()->getLocale() }}">

<title>{{ $seo->title }}</title>
<meta name="description" data-vmid="description" content="{{ $seo->description }}">

<meta name="robots" content="{{ $seo->robots }}">

<meta property="og:locale" content="{{ app()->getLocale() }}">
<meta property="og:site_name" content="{{ $seo->site }}">

<meta property="og:url" content="{{ request()->url() }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $seo->title }}">
<meta property="og:description" content="{{ $seo->description }}">
<meta property="og:image" content="{{ $seo->image }}">
<meta property="og:image:alt" content="{{ $seo->title }}"/>
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="{{ $seo->title }}">
<meta name="twitter:description" content="{{ $seo->description }}">
<meta name="twitter:image" content="{{ $seo->image }}">
<meta name="twitter:image:alt" content="{{ $seo->title }}">
