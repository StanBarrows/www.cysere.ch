<?php

use App\Constants\LocalConstant;
function seo()
{
    $route = request()->route()->getName();
    return null;
}

function openGraphLocale()
{
    $currentLocale = app()->getLocale();
    $locales = LocalConstant::OPENGRAPH_LOCALES;
    return Arr::exists($locales, $currentLocale) ? $locales[$currentLocale] : 'de_DE';
}



