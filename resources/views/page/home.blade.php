<!DOCTYPE html>
<html lang="es">
@include('page.template.link')
<body>
<div class="row">
  @include('page.template.header')
  @include('page.template.slider')

  <div class="container yp35" align="center" style="width: 88%">
    <div class="fs38 fw6" style="margin-bottom: 0px; color:#1F3B87;">
    PRODUCTOS DESTACADOS
    </div>
  </div>

  <div class="container" align="center" style="width: 90%;">
  <div class="row">
  @foreach($products as $destacado)
    <div class="col l3 m6 s12" style="position: relative; padding: 40px;">
      <div class="card z-depth-0" id="efecto10">
        <div class="card-image">
          <a href="{!!route('producto',$destacado->id)!!}" class="fs16 mayus" style="width:100%;height:100%;">
            <div class="efecto10">
                <span class="central fs14"><i class="material-icons">add</i></span>
            </div>
            <div style="display: flex; justify-content: center; align-items: center; border: 1px solid #DDD; height: 215px!important; overflow: hidden;">
              {{-- height:292px!important -> ideal para mobile --}}
              @forelse($destacado->galleries as $img)
                @if(file_exists(public_path().'/img/gallery/'.$img->image) && $img->image)
                  <img class="responsive-img" src="{{asset('img/gallery/'.$img->image)}}">
                @else
                  <img class="responsive-img" src="{{asset('img/logo/'.$default->image)}}">
                @endif
                @break
              @empty
                <img class="responsive-img" src="{{asset('img/logo/'.$default->image)}}">
              @endforelse
            </div>
          </a>
        </div>
        <div class="card-content" id="noeffect10" style="padding: 0;">
          <div class="editorRico center-align fs16 fw5" style="height: 70px; background:white; padding:5px; display:flex;justify-content:center;align-items:center;overflow:hidden;">
            {!!($destacado->title_es)!!}
          </div>
    {{--  <div class="Raleway fw4 fs17 gris12 editorRico yp10">{!!($destacado->texto)!!}</div> --}}
        </div>
      </div>
    </div>
  @endforeach
  </div>
  </div>

  <div style="background:#2B7EC1;">
  <div class="container" style="width: 84%; padding: 30px 30px 20px 0;">
    <div class="row">
      @foreach($icons as $ico)
        <div class="col s12 l4 center-align" style="position: relative;">
          <div class="card z-depth-0 " style="background: inherit;">
              <div class="row" style="display: flex; align-items: center;">
              <div class="offset-l2 col l3 s12">
                @if(file_exists(public_path().'/img/icon/'.$ico->image) && $ico->image)
                  <img class="responsive-img right" src="{{asset('img/icon/'.$ico->image)}}" style="background: inherit;">
                @else
                  <img class="responsive-img right" src="{{asset('img/logo/'.$default->image)}}" style="background: inherit;">
                @endif
              </div>
              <div class="col l7 s12">
                <div class="fw4 fs20 blanco" style="text-align: left;">{{($ico->title_es)}}</div>
              </div>
              </div>
            </div>
        </div>
      @endforeach
    </div>
  </div>
  </div>

  <section id="banner">
      <div style="background: #333333; background-image: url('{{asset('img/banner/'.$banner->image)}}'); background-repeat: no-repeat; align-items: left; background-size: cover; background-position: center;">
          <div class="container" style="width: 82%;">
              <div class="row" style="padding-top: 50px; padding-bottom: 50px;">
                  <div class="right  fs18 blanco">
                    <div style="text-align: right;" class="fs40 lh30">{!!$banner->title_es!!}</div>
                    <div style="text-align: right;" class="fs30">{!!$banner->subtitle_es!!}</div>
                    <div style="text-align: right;" class="mt10"><a class="boton" href="{!!$banner->route!!}">{!!$banner->button_es!!}</a></div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  @include('page.template.footer')
</div>
</body>
@include('page.template.script')
</html>
