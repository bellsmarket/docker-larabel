@include('component.nav', ['some' => 'data'])

@section('header')
<header class="l-header @yield('page')-header">
  @yield('nav')
  <div class="container">
    <h2>header</h2>
    {{Route::has('login')}}
    <ul>
      <li class="list-item">
        <a href="" class="list-link">001</a>
        <a href="" class="list-link">002</a>
        <a href="" class="list-link">003</a>
        <a href="" class="list-link">004</a>
        <a href="" class="list-link">005</a>
      </li>
    </ul>
  </div>
</header>

@endsection
