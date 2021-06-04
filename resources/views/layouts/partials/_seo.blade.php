<title>{{ __('application/layouts.seo.title') }}</title>
<meta name="robots" content="noindex,nofollow">
<meta name="description" content="{{ __('application/layouts.seo.description') }}">
<meta name="language" Content="{{ openGraphLocale() }}">
<meta name="url" content="{{ request()->url() }}">

<meta property="og:title" content="{{ __('application/layouts.seo.title') }}">
<meta property="og:description" content="{{ __('application/layouts.seo.description') }}">
<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:url" content="{{ request()->url() }}">
<meta property="og:image" content="{{ asset('images/cysere_seo.jpg') }}">

<meta name="twitter:card" content="twitter_card">
<meta name="twitter:title" content="{{  __('application/layouts.seo.title') }}">
<meta name="twitter:description" content="{{ __('application/layouts.seo.description') }}">
<meta name="twitter:image" content="{{ asset('images/cysere_seo.jpg') }}">

