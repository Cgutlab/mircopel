{{-- 
@if(count($errors) > 0)
<div class="col s12 card-panel red lighten-4 red-text text-darken-4" style="border-bottom:0;">
  <ul>
    @foreach($errors->all() as $error)
      <li>{!!$error!!}</li>
      @endforeach
  </ul>
</div>
@endif
@if(session('success'))
<div class="col s12 card-panel green lighten-4 green-text text-darken-4">
  <ul>
      <li>{{ session('success') }}</li>
  </ul>
</div>
@endif
 --}}