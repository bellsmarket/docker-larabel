@section('ogtag')
  <!-- Facebook -->
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="@yield('title')" />
  <meta property="og:description" content="@yield('description')" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:site_name" content="" />
  <meta property="article:tag" content="" />
  <meta property="og:updated_time" content="" />
  <meta property="og:image" content="" />
  <meta property="og:image:secure_url" content="" />

  <!-- Twitter -->
  <meta name="twitter:card" content="" />
  <meta name="twitter:title" content="@yield('title')" />
  <meta name="twitter:description" content="@yield('description')" />
  <meta name="twitter:site" content="@yield('title')" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:creator" content="@LIG_J" />
@endsection
