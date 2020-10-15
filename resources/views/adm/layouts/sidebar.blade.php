<ul id="slide-out" class="sidenav sidenav-fixed col l3" style="color: var(--main-color-title);padding:0;background: var(--main-color-body-login); height: 100%;">
	<div style="padding: 15px;">
		<span style="display: flex; justify-content: left; align-items: center;">
			<a href="{{route('adm.dashboard')}}">
			<img class="responsive-img h-max-80" src="{{ asset('img/logo/'.$logo->image) }}">
			</a>
			<span style="margin-left: 20px;">
				<div class="fw5 fs18">@lang('translator.main-backend')</div>
				{{-- <div class="fs16">@lang('translator.main-backend')</div> --}}
			</span>
		</span>
	</div>
	<div style="padding: 15px; border-bottom: 1px solid var(--main-color-card-border)">
		<span style="display: flex; justify-content: left; align-items: center;">
			<i class="material-icons">account_circle</i>
			<span style="margin-left: 25px;">
				<div class="fw4 fs16">@lang('translator.main-welcome'),</div>
				<div class="fs16">{{ucwords(Auth::user()->name)}}</div>
			</span>
		</span>
	</div>

	<ul class="collapsible z-depth-0">
		<li class="bold @isset($section) {!!$section == 'home' ? 'only active' : ''!!} @endisset">
		    <a class="collapsible-header waves-effect"><i class="material-icons">home</i><span>Home</span><i class="material-icons right">arrow_drop_down</i></a>
		    <div class="collapsible-body">
				<div class="@isset($section) @if($section == 'home' && $model == 'Slider') {!!'on'!!} @endif @endisset"><a href="{{route('slider.show', ['section' => 'home'])}}" class="collapsible-header waves-effect">Slider</a></div>
				<div class="@isset($section) @if($section == 'home' && $model == 'Icon') {!!'on'!!} @endif @endisset"><a href="{{route('icon.show', ['section' => 'home'])}}" class="collapsible-header waves-effect">Iconos</a></div>
				<div class="@isset($section) @if($section == 'home' && $model == 'Banner') {!!'on'!!} @endif @endisset"><a href="{{route('banner.show', ['section' => 'home'])}}" class="collapsible-header waves-effect">Banner</a></div>
			</div>
	  </li>

		<li class="bold @isset($section) {!!$section == 'empresa' ? 'only active' : ''!!} @endisset">
		    <a class="collapsible-header waves-effect"><i class="material-icons">location_city</i><span>Empresa</span><i class="material-icons right">arrow_drop_down</i></a>
		    <div class="collapsible-body {{ (\Request::is('adm/home/*'))?"style=display:block;":"" }}">
				<div class="@isset($section) @if($section == 'empresa' && $model == 'Slider') {!!'on'!!} @endif @endisset"><a href="{{route('slider.show', ['section' => 'empresa'])}}" class="collapsible-header waves-effect">Slider</a></div>
				<div class="@isset($section) @if($section == 'empresa' && $model == 'Content') {!!'on'!!} @endif @endisset"><a href="{{route('content.show', ['section' => 'empresa'])}}" class="collapsible-header waves-effect">Contenido</a></div>
			</div>
	  </li>

		<li class="bold {{(\Request::is('adm/item*'))?'only active':''}}">
		    <a class="collapsible-header waves-effect"><i class="material-icons">shopping_cart</i><span>Productos</span><i class="material-icons right">arrow_drop_down</i></a>
		    <div class="collapsible-body">
				<div class="{{(\Request::is('adm/item*'))?'on':''}}"><a href="{{route('item_category.index')}}" class="collapsible-header waves-effect">Categorias</a></div>
				<div class="{{(\Request::is('adm/color*'))?'on':''}}"><a href="{{route('color.index')}}" class="collapsible-header waves-effect">Color</a></div>
			</div>
	  </li>

		<li class="bold @isset($section) {!!$section == 'footer' ? 'only active' : ''!!} @endisset">
		    <a class="collapsible-header waves-effect"><i class="material-icons">remove_red_eye</i><span>Redes Sociales</span><i class="material-icons right">arrow_drop_down</i></a>
		    <div class="collapsible-body">
				<div class="@isset($section) @if($section == 'footer' && $model == 'Red') {!!'on'!!} @endif @endisset"><a href="{{route('red.show', ['section' => 'footer'])}}" class="collapsible-header waves-effect">Editar</a></div>
			</div>
	  </li>

		<li class="bold {{(\Request::is('adm/logo*'))?'only active':''}}">
			<a class="collapsible-header waves-effect"><i class="material-icons">perm_media</i><span>Logo</span><i class="material-icons right">arrow_drop_down</i></a>
			<div class="collapsible-body">
				<div class="{{(\Request::is('adm/logo*'))?'on':''}}"><a href="{{route('logo.index')}}" class="collapsible-header waves-effect">@lang('translator.main-option-edit')</a></div>
			</div>
		</li>

		<li class="bold {{(\Request::is('adm/data*'))?'only active':''}}">
		    <a class="collapsible-header waves-effect"><i class="material-icons">reorder</i><span>Data</span><i class="material-icons right">arrow_drop_down</i></a>
		    <div class="collapsible-body">
				<div class="{{(\Request::is('adm/data*'))?'on':''}}"><a href="{{route('data.index')}}" class="collapsible-header waves-effect">@lang('translator.main-option-edit')</a></div>
			</div>
	  </li>

		<li class="bold {{(\Request::is('adm/metad*'))?'only active':''}}">
				<a class="collapsible-header waves-effect"><i class="material-icons">public</i><span>Metadata</span><i class="material-icons right">arrow_drop_down</i></a>
				<div class="collapsible-body">
					<div class="{{(\Request::is('adm/metad*'))?'on':''}}"><a href="{{route('metadata.index')}}" class="collapsible-header waves-effect">@lang('translator.main-option-edit')</a></div>
				</div>
		</li>
		@if(Auth::user()->type == 'admin')
		<li class="bold {{(\Request::is('adm/admin*'))?'only active':''}}">
		    <a class="collapsible-header waves-effect"><i class="material-icons">group</i><span>Admin</span><i class="material-icons right">arrow_drop_down</i></a>
		    <div class="collapsible-body">
				<div class="{{(\Request::is('adm/admin*'))?'on':''}}"><a href="{{route('admin.all')}}" class="collapsible-header waves-effect">@lang('translator.main-option-edit')</a></div>
			</div>
	  </li>
	@endif
	</ul>
</ul>
