<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GREMIODISEÑO</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@yield('header')
</head>
<body>
  <div id="header-wrapper">
    <header>
      <h1 id="logo"><a href="{{ url('/') }}"><span>GREMIODISEÑO</span></a></h1>
      <a id="nav-toggle"><i class="fa fa-bars"></i></a>
      <nav>
        <ul>
          <li>
            <a href="{{ url('/') }}">{{ trans('global.projects') }} <span>+</span></a>
            {{-- <ul class="double">
              <li><a href="{{ url('proyectos/categoria/exhibiciones') }}">Exhibiciones</a></li>
              <li><a href="{{ url('proyectos/categoria/quioscos') }}">Quioscos</a></li>
              <li><a href="{{ url('proyectos/categoria/interiores') }}">Interiores</a></li>
              <li><a href="{{ url('proyectos/categoria/senalizacion') }}">Señalización</a></li>
              <li><a href="{{ url('proyectos/categoria/mobiliario-urbano') }}">Mobiliario urbano</a></li>
              <li><a href="{{ url('proyectos/categoria/construccion-especializada') }}">Construcción especializada</a></li>
            </ul> --}}
          </li>
          <li>
            <a href="{{ url('nosotros') }}">{{ trans('global.us') }} <span>+</span></a>
            <ul>
              <li><a href="{{ url('nosotros') }}">Somos Gremio</a></li>
              <li><a href="{{ url('nosotros/como') }}">¿Cómo lo hacemos?</a></li>
              <li><a href="{{ url('nosotros/donde') }}">¿Dónde lo hacemos?</a></li>
            </ul>
          </li>
          {{-- <li><a href="{{ url('lab') }}">{{ trans('global.lab') }} <span>+</span></a></li> --}}
          <li><a href="{{ url('contacto') }}">{{ trans('global.contact') }} <span>+</span></a></li>
          {{-- <li><a href="{{ url('/') }}">Esp - Eng</a></li> --}}
        </ul>
      </nav>
    </header>
  </div>
@yield('content')
  <footer>
    <div class="col">
      <span class="title">Mantente conectado</span>
      <span class="section">correo</span>
      <hr>
      <p><span>Gremio Diseño S.A. de C.V.</span></p>
    </div>
    <div class="col shift">
      <a href="#" class="link">BEHANCE</a>
      <a href="#" class="link">VIMEO</a>
      <hr>
      <p><a href="https://maps.google.com/?q={{ urlencode('Aurelio Ortega 459, Zapopan, Jalisco, México') }}" target="_blank">Aurelio Ortega 459</a><br />Colonia Seattle.</p>
      <hr>
      <p>Zapopan, Jalisco, México.</p>
    </div>
    <div class="col">
      <a href="#" class="link">FACEBOOK</a>
      <a href="#" class="link">TWITTER</a>
      <hr>
      <p><strong>Diseño y desarrollo de soluciones excepcionales</strong></p>
      <hr>
      <p><a href="mailto:info@gremiodiseno.com" target="_blank">info@gremiodiseno.com</a></p>
    </div>
    <div class="col">
      <a href="#" class="link">INSTAGRAM</a>
      <span class="link">–</span>
      <hr>
      <p>T. (33) 3833 0406<br />/ (33) 3636 8148</p>
      <hr>
      <p>–</p>
    </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.1.0/masonry.pkgd.min.js"></script>
  <script src="{{ asset('js/gremiodiseno.min.js') }}"></script>
@yield('footer')
</body>
</html>
