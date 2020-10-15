<!DOCTYPE html>
<html lang="es">
@include('page.template.link')
<body>
<div class="row">
  @include('page.template.header')
  <style media="screen">
    .gm-style-pbc div{
      -webkit-box-shadow: inset 0px 20px 12px -16px rgba(0,0,0,0.54)!important;
       -moz-box-shadow: inset 0px 20px 12px -16px rgba(0,0,0,0.54)!important;
        box-shadow: inset 0px 20px 12px -16px rgba(0,0,0,0.54)!important;
    }
  </style>
  <section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.7598546416098!2d-58.58601318519495!3d-34.61023356534907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb8440f1eb07d%3A0x4721bd0293c9fb47!2sMircopel!5e0!3m2!1ses!2sar!4v1555606256446!5m2!1ses!2sar" width="100%" height="481" frameborder="0" style="border:0;" allowfullscreen></iframe>
  </section>

  {!!Form::open(['route'=>'contactar', 'method'=>'POST', 'files' => true])!!}
  {{ csrf_field() }}
  <section id="contacto">
    <div class="container" style="width: 84%;">
      <div class="row" style="padding-top: 50px; padding-bottom: 50px;">
        <div class="col l4 m6 s12 fs18 center-align fw4">
          <div class=""><img src="{{asset('img/help/c1.jpg')}}" style="margin: 20px 0;"></div>
          <div class="">
            <a class="hoverGris" href="https://www.google.com/maps/search/{!!$location1->route!!}">
              <div  class="editorRico">{!!$location1->text!!}</div>
              <div  class="editorRico">{!!$location2->text!!}</div>
            </a>
          </div>
          <div class=""><img src="{{asset('img/help/c2.jpg')}}" style="margin: 20px 0;"></div>
          <div class="">
            <a class="hoverGris" href="tel:{!!$phone1->route!!}" class="editorRico">{!!$phone1->text!!}</a><br>
            <a class="hoverGris" href="tel:{!!$phone2->route!!}" class="editorRico">{!!$phone2->text!!}</a>
          </div>
          <div class=""><img src="{{asset('img/help/c3.jpg')}}" style="margin: 20px 0;"></div>
          <div class="">
            <a class="hoverGris" href="mailto:{!!$emailfoot->route!!}" class="editorRico">{!!$emailfoot->text!!}</a>
          </div>
        </div>
        <div class="col l8 m6 s12">
          <div class="input-field col l6 s12">
              <input type="text" id="name" name="name" class="validate">
              <label for="name">Nombre</label>
          </div>
          <div class="input-field col l6 s12">
              <input type="text" id="lastname" name="lastname" class="validate">
              <label for="lastname">Apellido</label>
          </div>
          <div class="input-field col l6 s12">
              <input type="text" id="email" name="email" class="validate">
              <label for="email">Email</label>
          </div>
          <div class="input-field col l6 s12">
              <input type="text" id="phone" name="phone" class="validate">
              <label for="phone">Teléfono</label>
          </div>
          <div class="input-field col s12">
              <textarea id="messagex" name="messagex" class="materialize-textarea validate"></textarea>
              <label for="messagex">Mensaje</label>
          </div>
          <div class="input-field col l7 s12" style="margin-bottom: 20px;">
            <div class="g-recaptcha" data-sitekey="6Ldco1gUAAAAAKKt7QO7vSn4tkahcQuMBXAHTeRj"></div>
          </div>
          <div class="col l5 s12">
            <p>
              <label>
                <input type="checkbox" checked />
                <span>Acepto los términos y condiciones de privacidad</span>
              </label>
            </p>
          </div>
          <div class="col s12 center-align">
            <button type="submit" class="btn z-depth-0" style="margin-top: 20px; background:#2B7EC1; color:white; font-weight: bold;">ENVIAR</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  {!!Form::close()!!}

  @include('page.template.footer')
</div>
</body>
<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
@include('page.template.script')
</html>
