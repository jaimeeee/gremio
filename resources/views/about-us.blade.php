@extends('layouts.site')

@section('content')
  <div class="container">
    <h2 class="stencil">Hace 20 años decidimos que todo lo que usamos,<br><strong>podía ser mejor.</strong></h2>
  </div>
  <div class="container" id="about-us-video">
    <iframe src="https://player.vimeo.com/video/174096067?color=ef7d00&amp;title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1" width="100%" height="588" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>
  <div id="staff" class="container">
    <div class="staff-member">
      <a href="#" class="signature"><span class="signature-img" id="signature-1"></span></a>
      <div class="card">
        <p>Poráneos que fomentan la creatividad y el intercambio de ideas entre los equipos creativos que forman parte de</p>
        <div class="author">
          <strong>IRAK “RENDERLORD” VARGAS</strong>
          <span>DISEÑADOR INDUSTRIAL</span>
        </div>
        <div class="links">
          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-behance-square" aria-hidden="true"></i></a>
        </div>
      </div>
      <div class="image" style="background-image:url({{ asset('images/staff/staff-1.jpg') }});"></div>
    </div>
    <div class="staff-member">
      <a href="#" class="signature"><span class="signature-img" id="signature-1"></span></a>
      <div class="card">
        <p>Poráneos que fomentan la creatividad y el intercambio de ideas entre los equipos creativos que forman parte de</p>
        <div class="author">
          <strong>IRAK “RENDERLORD” VARGAS</strong>
          <span>DISEÑADOR INDUSTRIAL</span>
        </div>
        <div class="links">
          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-behance-square" aria-hidden="true"></i></a>
        </div>
      </div>
      <div class="image" style="background-image:url({{ asset('images/staff/staff-1.jpg') }});"></div>
    </div>
    <div class="staff-member">
      <a href="#" class="signature"><span class="signature-img" id="signature-1"></span></a>
      <div class="card">
        <p>Poráneos que fomentan la creatividad y el intercambio de ideas entre los equipos creativos que forman parte de</p>
        <div class="author">
          <strong>IRAK “RENDERLORD” VARGAS</strong>
          <span>DISEÑADOR INDUSTRIAL</span>
        </div>
        <div class="links">
          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-behance-square" aria-hidden="true"></i></a>
        </div>
      </div>
      <div class="image" style="background-image:url({{ asset('images/staff/staff-1.jpg') }});"></div>
    </div>
    <div class="staff-member">
      <a href="#" class="signature"><span class="signature-img" id="signature-1"></span></a>
      <div class="card right">
        <p>Poráneos que fomentan la creatividad y el intercambio de ideas entre los equipos creativos que forman parte de</p>
        <div class="author">
          <strong>IRAK “RENDERLORD” VARGAS</strong>
          <span>DISEÑADOR INDUSTRIAL</span>
        </div>
        <div class="links">
          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-behance-square" aria-hidden="true"></i></a>
        </div>
      </div>
      <div class="image" style="background-image:url({{ asset('images/staff/staff-1.jpg') }});"></div>
    </div>
  </div>
  <div id="staff-agencies" class="container">
    <div class="col">
      <img src="{{ asset('images/staff-agencies.jpg') }}" alt="Jack Juárez Studio + Gremiodiseño" class="img-full">
    </div>
    <div class="col-content">
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo mejor .Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque.</p>
      <a href="http://www.jackjuarez.com">www.jackjuarez.com</a>
    </div>
  </div>
  <div class="container">
    <div class="row padded">
      <h3 class="center">GRACIAS A TODOS<br>LOS QUE HAN SIDO PARTE DE GREMIO</h3>
    </div>
  </div>
  <div id="clients" class="container grey">
    <div id="client-1" class="client"></div>
    <div id="client-2" class="client"></div>
    <div id="client-3" class="client"></div>
  </div>
@endsection

@section('footer')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.1.0/masonry.pkgd.min.js"></script>
  <script>gremiodiseno.staffInit();</script>
@endsection
