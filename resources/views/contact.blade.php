@extends('layouts.site')

@section('content')
  <div class="container">
    <div class="row padded">
      <div class="col">
        <h3>¡Queremos saber de tí!</h3>
        <h4>Visitanos en <a href="https://maps.google.com/?q=Aurelio+Ortega+459%2C+Zapopan%2C+Jalisco%2C+México" target="_blank"><span>Avenida Aurelio Ortega 459</span></a>.<br>O llámanos a cualquiera de nuestros<br>teléfonos: (33) 38 33 04 06 /<br>(33) 36 36 81 48</h4>
      </div>
      <div class="col">
        <h3>&nbsp;</h3>
        <h4>También puedes mandarnos un correo a:<br><a href="mailto:info@gremiodiseno.com" target="_blank"><span>info@gremiodiseno.com</span></a><br><br>O agréganos como contacto a <a href="#" target="_blank"><span>LinkedIn</span></a></h4>
      </div>
    </div>
  </div>
  <div class="container">
    <img src="{{ asset('images/contact-photo.jpg') }}" alt="Gremiodiseño" class="img-full">
  </div>
  <div id="contact-team">
    <p>Súmate al equipo, buscamos artístas, diseñadores y cualquier persona en busca de lo inesperado.<br><br><a href="mailto:portafolios@gremiodiseno.com" target="_blank">portafolios@gremiodiseno.com</a></p>
  </div>
@endsection

@section('footer')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.1.0/masonry.pkgd.min.js"></script>
@endsection
