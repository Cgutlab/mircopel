<!DOCTYPE html>
<html lang="es">
@include('page.template.link')
<body>
<div class="row">
  @include('page.template.header')

  <div class="container" style="width: 82%; margin-top: 50px;">
    <div class="fs14 fw4" style="margin-bottom: 0px;">
      <a style="color:#727284;" href="{{route('categoria', $product->category_id)}}">{!!ucwords(strtolower($product->category->title_es))!!}</a>&nbsp;|
      <a style="color:#727284;" href="{{route('producto', $product->id)}}">{!!ucwords(strtolower($product->title_es))!!}</a>&nbsp;
    </div>
  </div>
  <section id="category">
    <div class="container yp35" style="width: 84%; margin-bottom: 35px;">
    <div class="row">
      <div class="col l3 m4 s12">
        <ul class="collapsible z-depth-0" style="border:0;">
          @foreach($category as $side_cat)
      		<li class="@if($side_cat->id == $product->category_id) {{'active'}} @endif">
            <div class="collapsible-header" style="padding: 5px 0; width:100%; display: flex; justify-content: space-between;">
                <div class="fs17 fw4" style="color:#2B7EC1;"><a href="{!!route('categoria',$side_cat->id)!!}">{!!$side_cat->title_es!!}</a></div>
                <div><i class="material-icons" style="color:#646464;">keyboard_arrow_right</i></div>
            </div>
      		    <div class="collapsible-body" style="padding:0!important; margin:0;">
                @foreach($side_cat->products as $side_row)
      				    <div class=""><a href="{!!route('producto',$side_row->id)!!}" class="collapsible-header waves-effect fs17 fw4" style="padding:10px 10px; margin:0;color: #727284;background:#EFF2F7!important;">{!!$side_row->title_es!!}</a></div>
                @endforeach
      			  </div>
      	  </li>
          @endforeach
        </ul>
      </div>
      <div class="col l9 m8 s12">
      <div class="row">
          <div class="col l6 s12" style=" margin-bottom: 20px;">
            <div style="margin-top:5px;">
              <div class="col s12" style="display: flex; justify-content: center; align-items: center; border: 1px solid #DDD; height: 359px!important; overflow: hidden;">
                @forelse($product->galleries as $bigImg)
                  @if(file_exists(public_path().'/img/gallery/'.$bigImg->image) && $bigImg->image)
                    <img id="imgDisp" class="responsive-img" src="{{asset('img/gallery/'.$bigImg->image)}}">
                  @else
                    <img id="imgDisp" class="responsive-img" src="{{asset('img/logo/'.$default->image)}}">
                  @endif
                  @break
                @empty
                  <img id="imgDisp" class="responsive-img" src="{{asset('img/logo/'.$default->image)}}">
                @endforelse
              </div>
            </div>
            <div>
              @foreach($product->galleries as $img)
              <div class="col s4" style="display: flex; justify-content: center; align-items: center; border: 1px solid #DDD; height: 109px!important; overflow: hidden;">
                @if(file_exists(public_path().'/img/gallery/'.$img->image) && $img->image)
                  <img id="imgName" onclick="changeImage('{{asset('img/gallery/'.$img->image)}}')" class="responsive-img" src="{{asset('img/gallery/'.$img->image)}}">
                @else
                  <img id="imgName" onclick="changeImage('{{asset('img/logo/'.$default->image)}}')" class="responsive-img" src="{{asset('img/logo/'.$default->image)}}">
                @endif
              </div>
              @endforeach
            </div>
            </div>
          <div class="col l6 s12">
          <div class="container" style="width: 95%">
            <div style="color: #2B7EC1;"><h5 style="margin-top: 0px; font-weight: 600; line-height: 35px;" class="fs30">{{($product->title_es)}}</h5></div>
            <div style="color: #CECECE;"><h6 class="fs18 fw4">{{('COD: '.$product->code)}}</h6></div>
            <div class="fs17 fw4" style="color: #727284;">{!!($product->text_es)!!}</div>
            <div class="">
              @foreach ($product->size as $t)
                  @if($loop->first)
                    <span class="fs17 fw5" style="color:#1F3C88;">Tamaños: </span>
                  @endif
                  <span class="fs17" style="color:#727284;">{!!$t->title_es!!}{!!($loop->last)?'.':','!!}</span>
              @endforeach
            </div>
            <div class="">
              @foreach ($product->presentation as $p)
                  @if($loop->first)
                    <span class="fs17 fw5" style="color:#1F3C88;">Presentación: </span>
                  @endif
                  <span class="fs17" style="color:#727284;">{!!$p->title_es!!}{!!($loop->last)?'.':','!!}</span>
              @endforeach
            </div>
            <div class="">
              @foreach ($product->grammage as $g)
                  @if($loop->first)
                    <span class="fs17 fw5" style="color:#1F3C88;">Gramajes: </span>
                  @endif
                  <span class="fs17" style="color:#727284;">{!!$g->title_es!!}{!!($loop->last)?'.':','!!}</span>
              @endforeach
            </div>
            <div class="">
              @foreach ($product->color as $c)
                  @if($loop->first)
                    <span class="fs17 fw5" style="color:#1F3C88;">Colores: </span>
                  @endif
                  <span class="fs17" style="color:#727284;">{!!$c->title_es!!}{!!($loop->last)?'.':','!!}</span>
              @endforeach
            </div>
            <div>
                <br>
                <a href="{!!route('solicitar', ['id' => $product->id])!!}" class="boton">SOLICITAR&nbsp;PRESUPUESTO</a>
            </div>
          </div>
          </div>
        </div>
        <div class="row">
          @if($relacionados->count() > 0)
          <div class="col l12">
            <div class="fs25 fw6 yp35" style="color: #1F3C88; margin-bottom: 30px;">
            Productos Relacionados
            </div>
          </div>
          @endif
          <div class="row">
          @foreach($relacionados as $r)
          <div class="col l4 m6 s12" style="position: relative; padding: 0 30px;">
            <div class="card z-depth-0" id="efecto10">
              <div class="card-image">
                <a href="{!!route('producto',$r->id)!!}" class="fs16 mayus" style="width:100%;height:100%;">
                  <div class="efecto10">
                      <span class="central fs14"><i class="material-icons">add</i></span>
                  </div>
                  <div style="display: flex; justify-content: center; align-items: center; border: 1px solid #DDD; height: 265px!important; overflow: hidden;">
                    @forelse($r->galleries as $i)
                      @if(file_exists(public_path().'/img/gallery/'.$i->image) && $i->image)
                        <img class="responsive-img" src="{{asset('img/gallery/'.$i->image)}}">
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
                  {!!($r->title_es)!!}
                </div>
          {{--  <div class="Raleway fw4 fs17 gris12 editorRico yp10">{!!($destacado->texto)!!}</div> --}}
              </div>
            </div>
          </div>
          @endforeach
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

<script>
function changeImage(imgName)
{
image = document.getElementById('imgDisp');
image.src = imgName;
}
</script>
