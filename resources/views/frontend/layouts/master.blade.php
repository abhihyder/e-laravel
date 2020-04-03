<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <!-- Fonts -->
        <link href="{{asset('public/css/app.css')}}" rel="stylesheet">
        <link href="{{asset('public/css/all.css')}}" rel="stylesheet">

        @yield('before-head')

    </head>
    <body>
   
     @include('frontend.partials.header')

    <main role="main">

      @yield('main')

    </main>

    @include('frontend.partials.footer')
 
      <script src="{{asset('public/js/all.js')}}"></script>

      @yield('before-body')
    </body>
</html>
