@include('component.ogtag')
@include('component.css')
@include('component.head-js')

@section('head')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <meta name="description" content="@yield('description')">

@yield('ogtag')
@yield('sns')
@yield('css')
@yield('pageCss')
@yield('head-js')
@endsection
