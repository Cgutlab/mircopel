<header style="display:flex; justify-content:center;">
<div style="box-shadow: 1px 0px 7px rgba(0,0,0,0.9); width: 100%; display:flex; justify-content:center;">
  <div class="container" style="width: 84%; margin:0; padding:0; ">
    <div class="col l4 s12">
        <div style="display:flex; justify-content: space-between; align-items: center;">
            <span style="margin-top: 35px; margin-bottom: 20px;">
                <a href="{!!route('home')!!}"><img class="responsive-img" src="{!!asset('img/logo/'.$headband->image)!!}" alt=""></a>
            </span>
            <span style="margin-left: 15px;">
              <a href="#" data-target="mobile-demo" class="azul sidenav-trigger fs18 hide-on-large-only right"><i class="material-icons" style="margin-top: 4px;">menu</i></a>
            </span>
        </div>
    </div>
    <div class="col l8 s12 hide-on-med-and-down">
        <div class="right">
          <div style="display:flex; justify-content: center; align-items: center; margin-top: 15px;">
            <a href="tel:{!!$phonehead->route!!}" class="azul2" style="display:flex; justify-content: center; align-items: center; margin-right: 5px;">
              <img src="{!!asset('img/help/phone_in_call.png')!!}" style="margin-right: 5px;" alt="">
              <span style="border-right: 1px solid gray; font-size: 14px; padding-right: 5px;">{!!$phonehead->text!!}</span>
            </a>
            <a href="mailto:{!!$emailhead->route!!}" class="azul2" style="display:flex; justify-content: center; align-items: center; margin-right: 5px;">
              <img src="{!!asset('img/help/email_in.png')!!}" style="margin-right: 5px;" alt="">
              <span style="border-right: 1px solid gray; font-size: 14px; padding-right: 5px;">{!!$emailhead->text!!}</span>
            </a>
            <a href="{!!route('buscador')!!}" style="font-size: 14px; display:flex; align-items: center;"><i class="material-icons" style="">search</i></a>
          </div>
        </div>
        <div class="flex flex-align right " style="width: 100%;height: 75px; justify-content: space-between;">
            <div>&nbsp;</div>
            <div><a href="{!!route('empresa')!!}" class="bloque {!!Request::is('empresa') ? 'bloqueActive' : ''!!}">EMPRESA</a></div>
            <div><a href="{!!route('categorias')!!}" class="bloque {!!Request::is('producto*') ? 'bloqueActive' : ''!!}  {!!Request::is('categoria*') ? 'bloqueActive' : ''!!}">PRODUCTOS</a></div>
            <div><a href="{!!route('presupuesto')!!}" class="bloque {!!Request::is('solicit*') ? 'bloqueActive' : ''!!}">SOLICITUD&nbsp;DE&nbsp;PRESUPUESTO</a></div>
            <div><a href="{!!route('contacto')!!}" class="bloque {!!Request::is('contacto') ? 'bloqueActive' : ''!!}">CONTACTO</a></div>
        </div>
    </div>
  </div>
</div>
</header>

<ul class="sidenav" id="mobile-demo">
    <li><a href="{!!route('home')!!}" style="{!!Request::is('/') ? 'font-weight: bold' : ''!!}">Inicio</a></li>
    <li><a href="{!!route('empresa')!!}" style="{!!Request::is('empresa') ? 'font-weight: bold' : ''!!}">Empresa</a></li>
    <li><a href="{!!route('categorias')!!}" style="{!!Request::is('producto*') ? 'font-weight: bold' : ''!!} {!!Request::is('categoria*') ? 'font-weight: bold' : ''!!}">Productos</a></li>
    <li><a href="{!!route('presupuesto')!!}" style="{!!Request::is('solicit*') ? 'font-weight: bold' : ''!!}">Solicitar&nbsp;Presupuesto</a></li>
    <li><a href="{!!route('contacto')!!}" style="{!!Request::is('contacto') ? 'font-weight: bold' : ''!!}">Contacto</a></li>
</ul>
