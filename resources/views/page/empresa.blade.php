<!DOCTYPE html>
<html lang="es">
@include('page.template.link')
<body>
<div class="row">
  @include('page.template.header')
  @include('page.template.slider')

  <section id="banner">
    <div class="container" style="width: 82%;">
        <div class="row" style="padding-top: 50px; padding-bottom: 50px;">
          <div class="col s12 yp35">
            <div class="fs38 fw6" style="margin-bottom: 0px; color:#1F3B87;">
            {!!$content->title_es!!}
            </div>
          </div>
          <div class="col l7 s12">
            <div class="fs18" style="color:#727284;">{!!$content->text_es!!}</div>
          </div>
          <div class="col l5 s12">
            <div class="row">
              <div class="col l6 s12">
                @if(file_exists(public_path().'/img/content/'.$content->image1) && $content->image1)
                  <img class="responsive-img" src="{{asset('img/content/'.$content->image1)}}" style="">
                @else
                  <img class="responsive-img" src="{{asset('img/logo/'.$default->image)}}" style="">
                @endif
              </div>
              <div class="col l6 s12">
                <div class="col l12 m6 s12" style="padding:0;">
                  @if(file_exists(public_path().'/img/content/'.$content->image2) && $content->image2)
                    <img class="responsive-img" src="{{asset('img/content/'.$content->image2)}}" style="margin-left: 1%;margin-bottom: 12%;">
                  @else
                    <img class="responsive-img" src="{{asset('img/logo/'.$default->image)}}" style="margin-left: 1%;margin-bottom: 12%;">
                  @endif
                </div>
                <div class="col l12 m6 s12" style="padding:0;">
                  @if(file_exists(public_path().'/img/content/'.$content->image3) && $content->image3)
                    <img class="responsive-img" src="{{asset('img/content/'.$content->image3)}}" style="margin-left: 1%;">
                  @else
                    <img class="responsive-img" src="{{asset('img/logo/'.$default->image)}}" style="margin-left: 1%;">
                  @endif
                </div>
              </div>
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
