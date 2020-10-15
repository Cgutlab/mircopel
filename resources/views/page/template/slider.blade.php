<style>

</style>
<div class="carousel carousel-slider center" data-indicators="true">
    @foreach($sliders as $slider)
    <div class="carousel-item white-text">
        <img src="{{ asset('img/slider/'.$slider->image) }}" alt="slider">
        <div class="box-cap hide-on-med-and-down">
            <div id="sliderBorder1" class="white-text fs45 fw6">
              {!!$slider->{'title_es'} !!}
            </div>
            <div id="sliderBorder2" class="white-text fs28 fw4" style="line-height: 20px; padding-bottom: 20px;">
              {!!$slider->{'subtitle_es'} !!}
            </div>
        </div>

        <div class="box-cap2 hide-on-large-only">
            <div id="sliderBorder1" class="white-text fs22 fw6">
                {!!$slider->{'title_es'} !!}
            </div>
            <div id="sliderBorder2" class="white-text fs16 fw4" style="line-height: 12px; padding-bottom: 10px;">
                {!!$slider->{'subtitle_es'} !!}
            </div>
        </div>
        {{--
        <div class="box-cap2 hide-on-large-only" style="top: 3%!important;">
            <div id="editorRico" class="fc7 fs14 fw6" style="line-height: 15px;">
                {!!$slider->{'title_es'} !!}
            </div>
            <div id="editorRico" class="fc1 fs12 fw4" style="line-height: 15px;">
                {!!$slider->{'subtitle_es'} !!}
            </div>
        </div>
        --}}
    </div>
    @endforeach
</div>
