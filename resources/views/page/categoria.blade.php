<!DOCTYPE html>
<html lang="es">
@include('page.template.link')
<body>
<div class="row">
  @include('page.template.header')

  <div class="container" style="margin-top: 50px; width: 82%">
    <div class="fs14 fw4" style="margin-bottom: 0px;">
      <a style="color:#727284;" href="{{route('categoria', $active->id)}}">{!!ucwords(strtolower($active->title_es))!!}</a>&nbsp;|
    </div>
  </div>

  <section id="category">
    <div class="container yp35" style="width: 84%;">
    <div class="row">
      <div class="col l3 m4 s12">
        <ul class="collapsible z-depth-0" style="border:0;">
          @foreach($category as $side_cat)
      		<li class="{{(\Request::is('categoria/'.$side_cat->id))?'active':''}}">
            <div class="collapsible-header" style="padding: 5px 0; width:100%; display: flex; justify-content: space-between;">
                <div class="fs17 fw4" style="color:#2B7EC1;"><a href="{!!route('categoria',$side_cat->id)!!}">{!!$side_cat->title_es!!}</a></div>
                <div><i class="material-icons" style="color:#646464;">keyboard_arrow_right</i></div>
            </div>
      		    <div class="collapsible-body" style=" padding:0!important; margin:0;">
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
        @foreach($product as $row)
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
