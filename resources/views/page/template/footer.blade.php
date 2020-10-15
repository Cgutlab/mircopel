<footer style="background: #14285F; ">
  <div style="width: 100%; border-top: 0;">
    <div class="container" style="width: 84%; padding: 20px 0 0 0;">
      <div class="row" style=" border-bottom: 1px solid #878787; padding-bottom: 10px;">
        <div class="col l4 s12">
          <div  style="display: flex; justify-content: center; align-items: center; height: 150px;">
              <img class="responsive-img" src="{!!asset('img/logo/'.$footband->image)!!}">
          </div>
        </div>
        <div class="offset-l1 col l3 s12">
          <div class="row" style="margin-bottom: 15px;">
              <div class="col l12 s12" style="margin-bottom: 15px;">
                  <div class="azul bold lts fw5 fs20">MAPA&nbsp;DE&nbsp;SITIO</div>
              </div>
              <div class="col l5 s6">
                  <div class="mt5"><a class="navBlanco {!!Request::is('/') ? 'navfooter' : ''!!}" href="{!!route('home')!!}">Home</a></div>
                  <div class="mt5"><a class="navBlanco {!!Request::is('empresa') ? 'navfooter' : ''!!}" href="{!!route('empresa')!!}">Empresa</a></div>
                  <div class="mt5"><a class="navBlanco {!!Request::is('categori*') || Request::is('product*') ? 'navfooter' : ''!!}" href="{!!route('categorias')!!}">Productos</a></div>
              </div>
              <div class="col l7 s6">
                  <div class="mt5"><a class="navBlanco {!!Request::is('solicitud-presupuest*') ? 'navfooter' : ''!!}" href="{!!route('presupuesto')!!}">Solicitud de Presupuesto</a></div>
                  <div class="mt5"><a class="navBlanco {!!Request::is('contact*') ? 'navfooter' : ''!!}" href="{!!route('contacto')!!}">Contacto</a></div>
              </div>
          </div>
          <div class="row s12">
            <div class="col s12">

            @foreach($redes as $red)
              @if($red->icon)
                <a href="{!!$red->route!!}">
                  <span><i class="{!!$red->icon!!} fs30" style="color: #2B7EC1"></i></span>
                </a>
              @elseif($red->image)

              @else

              @endif
            @endforeach
          </div>
        </div>
        </div>
        <div class="col l4 s12">
          <div class="row">
              <div class="row s12" style="margin-bottom: 15px;">
                <div class="col l12 s12" style="margin-bottom: 5px;">
                    <div class="azul bold lts fw5 fs20">MIRCOPEL&nbsp;PAPELERA</div>
                </div>
              </div>
              <div class="row s12">
                  <div class="col s1" style="padding:0;">
                      <img style="position:absolute;" src="{!!asset('img/help/location_in.png')!!}" alt="">
                      {{-- <i class="material-icons celeste">location_on</i> --}}
                  </div>
                  <div class="col s11">
                      <a class="navBlanco" href="https://www.google.com/maps/search/{!!$location1->route!!}">
                        <div  class="editorRico">{!!$location1->text!!}</div>
                        <div  class="editorRico">{!!$location2->text!!}</div>
                      </a>
                  </div>
              </div>
              <div class="row s12">
                  <div class="col s1" style="padding:0;">
                      <img style="position:absolute;" src="{!!asset('img/help/phone_in_call.png')!!}" alt="">
                      {{-- <i class="material-icons celeste">phone_in_talk</i> --}}
                  </div>
                  <div class="col s11">
                      <a class="navBlanco" href="tel:{!!$phone1->route!!}" class="editorRico">{!!$phone1->text!!}</a> <br>
                      <a class="navBlanco" href="tel:{!!$phone2->route!!}" class="editorRico">{!!$phone2->text!!}</a>
                  </div>
              </div>
              {{-- <div class="row s12">
                  <div class="col l2" style="padding: 0;">
                      <img src="{!!asset('img/whatsapp.png')!!}" style="width: 40px; margin-left: 5px;">
                  </div>
                  <div class="col l10" style="padding-top: 7px;">
                      <a class="navBlanco" href="https://wa.me/{!!$whatsapp->text!!}" class="editorRico">{!!$whatsapp->text!!}</a>
                  </div>
              </div> --}}
              <div class="row s12">
                  <div class="col s1" style="padding:0;">
                      <img style="position:absolute;" src="{!!asset('img/help/email_in.png')!!}" alt="">
                      {{-- <i class="material-icons celeste">send</i> --}}
                  </div>
                  <div class="col s11">
                      <a class="navBlanco" href="mailto:{!!$emailfoot->route!!}" class="editorRico">{!!$emailfoot->text!!}</a>
                  </div>
              </div>
          </div>

        </div>

      </div>
      <div class="row" style="margin-bottom:0;padding-bottom:0;">
        <div class="right fs12" style="color:#878787;">
          BY OSOLE
        </div>

      </div>
    </div>
  </div>
</footer>
