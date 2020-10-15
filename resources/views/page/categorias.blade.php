<!DOCTYPE html>
<html lang="es">
@include('page.template.link')
<body>
<div class="row">
  @include('page.template.header')

  <div class="container yp35" style="width: 82%">
    <div class="fs38 fw6" style="margin-bottom: 0px; color:#1F3B87;">
    PRODUCTOS
    </div>
  </div>

  <section id="category">
    <div class="container yp35" align="center" style="width: 83%; margin-bottom: 35px;">
    <div class="row">
    @foreach($category as $row)
    <div class="col l3 m6 s12" style="position: relative;">
      <div class="card z-depth-0" id="efecto">
        <div class="card-image">
          <a href="{!!route('categoria',$row->id)!!}" class="fs16 mayus" style="width:100%;height:100%;">
            <div class="efecto10">
                <span class="central fs14"><i class="material-icons">add</i></span>
            </div>


            <div style="background: white;display: flex; justify-content: center; align-items: center;border: 1px solid #DDD; height: 265px!important; overflow: hidden;">

              @if(file_exists(public_path().'/img/category/'.$row->image) && $row->image)
                <img class="responsive-img" src="{{asset('img/category/'.$row->image)}}">
              @else
                <img class="responsive-img" src="{{asset('img/logo/'.$default->image)}}">
              @endif
            </div>
        </div>
      </a>
        <div class="card-content" id="noeffect" style="padding: 0;">
          <div class="editorRico center-align fs16 fw4" style="height: 70px; padding:5px; display:flex;justify-content:center;align-items:center;overflow:hidden;">
            {!!($row->title_es)!!}
          </div>
    {{--  <div class="Raleway fw4 fs17 gris12 editorRico yp10">{!!($destacado->texto)!!}</div> --}}
        </div>
      </div>
    </div>
    @endforeach
    </div>
    </div>
  </section>

  @include('page.template.footer')
</div>
</body>
@include('page.template.script')
</html>
