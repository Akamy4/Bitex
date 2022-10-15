<!DOCTYPE html>
<html lang="ru">
<head>
  @if($app->environment('local'))
    <meta name="robots" content="noindex, nofollow">
  @else
    <meta name="robots" content="index, follow">
  @endif
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="HandheldFriendly" content="true">
  <meta name="publisher" content="Idpos">
  <meta name="author" content="Idpos">
  <meta name="copyright" content="Idpos">
  <meta name="revisit-after" content="2 days">
  <link rel="icon" type="image/png" href="/img/fav.png"> 
  @yield('meta')
  @include('front.meta.styles')
  {!! $scripts->before_head_close !!}
</head>
<body class="page @if(action('FrontController@getRetail')==Request::url())page--retail @else @if(action('FrontController@getBranding')==Request::url())page--brand @else @if(action('FrontController@getCorporate')==Request::url())page--corp @endif @endif @endif">
  {!! $scripts->after_body_open !!}
  @include('front.header')
  @yield('content')
  <a href="#header" class="page__goto-btn js_goto_top"></a>
  @include('front.meta.scripts')
  {!! $scripts->before_body_close !!}
</body>
</html>
