@extends('layouts.common')

@section('page', 'home')

@section('title', 'インデックスページ')
@section('keywords', 'キーワード1, キーワード2, キーワード3')
@section('description', 'インデックスページの説明文です')
@section('pageCss')
  <!-- pageCss -->
@endsection


@include('component.head')
@include('component.header')
@section('content')
  <h1>@yield('page')</h1>
  <p>このページは@yield('title')です。</p>
  <ul>

    <li>config.app.name  => {{ config('app.name') }}</li>
    <li>{{ config('app.url') }}</li>
  <li>{{ asset('assets/js/app.js') }}</li>
  </ul>
@endsection
@include('component.footer')
