<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="robots" content="index,follow">
    <meta name="description" content="4 Answers Quizとはビジネスマナーから一般常識に至るまで様々なクイズを4択で出題するWEBアプリです">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="{{ url('') }}/images/header-logo.png">
    <meta name="twitter:url" content="{{ url()->full() }}">
    <meta name="twitter:description" content="4 Answers Quizとはビジネスマナーから一般常識に至るまで様々なクイズを4択で出題するWEBアプリです">
    <meta name="twitter:title" content="4 Answers Quiz 4択クイズ&クイズ徹底解説">
    <meta property="og:description" content="4 Answers Quizとはビジネスマナーから一般常識に至るまで様々なクイズを4択で出題するWEBアプリです">
    <meta property="og:site_name" content="4 Answers Quiz 4択クイズ&クイズ徹底解説">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="{{ \Request::is('/') ? 'website' : 'article'}}">
    <meta property="og:image" content="{{ url('') }}/images/header-logo.png">
    <meta property="og:url" content="{{ url()->full() }}">
    <meta property="og:title" content="4 Answers Quiz 4択クイズ&クイズ徹底解説">
    <link href="/css/app.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="api-token" content="{{ session()->get('api_token') ?? '' }}">
    <title>4 Answers Quiz 4択クイズ&クイズ徹底解説</title>
  </head>
  <body>
    <div id="app">
      <app :errors="{{ $errors }}" :auth="{{ Auth::user() ?? '[]' }}" />
    </div>
    <script src="/js/app.js"></script>
  </body>
</html>