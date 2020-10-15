<!DOCTYPE html>
<html lang="es">
@include('page.template.link')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<body>
<div class="row">
  @include('page.template.header')

  <section id="banner">
    {!!Form::open(['route'=>'solicitud', 'method'=>'POST', 'files' => true])!!}
    {{ csrf_field() }}
    <div class="container" style="margin-bottom: 100px; width: 84%;">
        <div class="row" style="margin-top: 100px;">
            <div id="estado1" >
                <div class="col l12">
                    <div align="center">
                        <img class="responsive-img" style="align-items: center;" src="{{asset('img/help/sp1.jpg')}}">
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="input-field col l5 m6 s12 push-l1">
                            <input type="text" id="name" name="name"  class="validate">
                            <label for="name">Nombre</label>
                        </div>
                        <div class="input-field col l5 m6 s12 push-l1">
                            <input type="text" id="location" name="location"  class="validate">
                            <label for="location">Localidad</label>
                        </div>
                        <div class="input-field col l5 m6 s12 push-l1">
                            <input type="text" id="email" name="email"  class="validate">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col l5 m6 s12 push-l1">
                            <input type="text" id="phone" name="phone"  class="validate">
                            <label for="phone">Teléfono</label>
                        </div>
                        <div class="input-field col l5 m6 s12 pull-l1 right">
                            <button type="button" id="botonSiguienteEstado" class="btn right z-depth-0" style="margin-top: 20px; background:#2B7EC1; color:white; font-weight: bold;">Siguiente</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="estado2" style="display: none;">
            <div class="col l12">
                <div align="center">
                    <img class="responsive-img" style="align-items: center;" src="{{asset('img/help/sp2.jpg')}}">
                </div>
                <div class="row">
                  <div class="row">
                    <div class="input-field offset-m1 col m5 s12">
                        <textarea id="messagex" name="messagex" class="materialize-textarea validate"></textarea>
                        <label for="messagex">Mensaje</label>
                    </div>
                    <div class="file-field input-field col m5 s12">
                      <div class="btn" style="background:#2B7EC1;">
                          <span>@lang('translator.main-image')</span>
                          {!! Form::file('image') !!}
                      </div>
                      <div class="file-path-wrapper">
                          {!!Form::text('', isset($repeat['image']) ? $repeat['image'] : old('image'), ['placeholder' => trans('translator.main-image-banner'), 'class'=>'file-path validate']) !!}
                          @if(isset($repeat['image'])) {!!Form::text('image', isset($repeat['image']) ? $repeat['image'] : old('image'), ['class' => 'hide']) !!} @endif
                      </div>
                    </div>
                      <div class="input-field col m6 s12" style="padding-top:0px; margin-bottom: 20px;">
                        <div class="g-recaptcha" data-sitekey="6Ldco1gUAAAAAKKt7QO7vSn4tkahcQuMBXAHTeRj"></div>
                      </div>
                    </div>
                    <div class="input-field col s11 pull-l1 right">
                      <button type="submit" id="botonSiguienteAnterior" class="btn right z-depth-0" style="margin-top: 20px; background:#2B7EC1; color:white; font-weight: bold;">Enviar</button>
                      <button type="button" id="botonEstadoAnterior" class="btn right z-depth-0 fw5" style="margin-top: 20px;  margin-right: 10px; background-color:white; border:1px solid #2B7EC1; color:#2B7EC1;">Anterior</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
  {!!Form::close()!!}
  </section>
  @include('page.template.footer')
</div>
</body>
<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
@include('page.template.script')
<script>
    document.getElementById("botonSiguienteEstado").addEventListener("click", mostrarEstado2);
    document.getElementById("botonEstadoAnterior").addEventListener("click", mostrarEstado1);
    function mostrarEstado2() {
        document.getElementById("estado1").className = "animated bounceOutLeft";
        setTimeout(function(){
            document.getElementById("estado1").style.display = "none";
            document.getElementById("estado2").style.display = "block";
            document.getElementById("estado2").className = "animated bounceInRight";

            document.getElementById("elDiv1").className = "paso datos col m2 col l2 offset-m1";
            document.getElementById("elDiv2").className = "paso obra active col m4 col l4 push-l3";
        }, 200);
    }
    function mostrarEstado1() {
        document.getElementById("estado2").className = "animated bounceOutLeft";
        setTimeout(function(){
            document.getElementById("estado2").style.display = "none";
            document.getElementById("estado1").style.display = "block";
            document.getElementById("estado1").className = "animated bounceInRight";

            document.getElementById("elDiv1").className = "paso datos active col m2 col l2 offset-m1";
            document.getElementById("elDiv2").className = "paso obra col l2 col m4 col l4 push-l3";
        }, 1);
    }
    function animacion(id, clase) {
        $(id).removeClass("animated "+clase).addClass(clase + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
          $(this).removeClass("animated "+clase);
        });
    };
</script>
</html>
