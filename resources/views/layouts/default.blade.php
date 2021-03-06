<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>@yield('title','Simple') -- Laravel 入门教程</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
  @include('layouts._header')
  <div class="container">
    @include('shared.messages')
    @yield('content')
    @include('layouts._footer')
  </div>
  <script src="/js/app.js"></script>
</body>
</html>