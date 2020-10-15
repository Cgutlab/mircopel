<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/materialize/materialize.min.js') }}"></script>
<script>
$(document).ready(function(){
  $('.carousel').carousel({
      fullWidth: true,
      height: 450,
      indicators: false
  });

  $('.collapsible').collapsible();
  $('.sidenav').sidenav({
    closeOnClick: false
    });
  $('.dropdown-trigger').dropdown({
    constrainWidth: false,
    closeOnClick: true,
    hover: false
  });
  $('.dropdown-buscador').dropdown({
    constrainWidth: false,
    closeOnClick: false,
  });
  $('select').formSelect();
  $('.materialboxed').materialbox();
});

setInterval(function() {
$('.carousel').carousel('next');
}, 4000); // every 2 seconds
</script>
<script>
@if(isset($success))
M.toast({html: '{!!$success!!}', classes: 'rounded'});
@endif

@if(session('success'))
M.toast({html: '{!!session('success')!!}', classes: 'rounded'});
@endif

@if(count($errors) > 0)
@foreach($errors->all() as $error)
M.toast({html: '{!!$error!!}', classes: 'rounded'});
@endforeach
@endif
</script>
