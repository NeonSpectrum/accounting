<!DOCTYPE html>
<html lang="en">
<head>
  <base href="{{ url('/') }}">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Accounting</title>
</head>
<body>
  <div id="app"></div>

@if(env('APP_ENV') == "production")
  <script src="{{ mix('js/manifest.js') }}"></script>
  <script src="{{ mix('js/vendor.js') }}"></script>
@endif
  <script crossorigin src="{{ mix("js/{$js}.js") }}"></script>
</body>
</html>