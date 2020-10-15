<!DOCTYPE html>
<html lang="es">
@include('page.template.link')
<body>
<div class="row">
  @include('page.template.header')

  <div class="container" style="width: 82%;">
  <div class="center-align">
    {!!Form::open(['route'=>'consultar', 'method' => 'POST']) !!}
    {{ csrf_field() }}
    <div class="row" style="margin: 50px 0;">
      <div class="input-field offset-l4 col l4">
        <i class="material-icons prefix">search</i>
        <input id="consulta" type="text" name="consulta" class="validate" style="padding-left: 45px;">
        <label for="consulta">Buscador</label>
      </div>
    </div>
    {!!Form::close()!!}
  </div>
  </div>

  <div class="container" style="width: 82%;">
  <div class="center-align">
  @if(isset($products))
    <div class="row">
    @foreach($products as $row)
    <div class="col l4 m6 s12" style="position: relative; padding: 0 10px;">
      <div class="card z-depth-0" id="efecto10">
        <div class="card-image">
          <a href="{!!route('producto',$row->id)!!}" class="fs16 mayus" style="width:100%;height:100%;">
            <div class="efecto10">
                <span class="central fs14"><i class="material-icons">add</i></span>
            </div>
            <div style="display: flex; justify-content: center; align-items: center; border: 1px solid #DDD; height: 265px!important; overflow: hidden;">
              @forelse($row->galleries as $img)
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
            {!!($row->title_es)!!}
          </div>
        </div>
      </div>
    </div>
    @endforeach
    </div>
  @endif
  </div>
  </div>

  @include('page.template.footer')
</div>
</body>
@include('page.template.script')
</html>
