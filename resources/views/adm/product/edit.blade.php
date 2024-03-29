@extends('adm.dashboard')

@section('content', trans('translator.main-option-edit') .' '. $model)

@section('cuerpo')

  <main>
  <div class="container" style="width: 100%;">
  <div class="row">
    <div class="col s8">
  		<h4 style="color: var(--main-color-links)">
  				{{$data->category->title_es}}
  		{{-- @include('adm.layouts.report') --}}
  	</div>
    <div class="col s4">
      <a href="{{route('item_'.strtolower($model).'.show', ['id' => $data->category->id])}}" class="btn-floating btn-medium waves-effect waves-light blue right ml-3x"><i class="material-icons">keyboard_backspace</i></a>
      <a href="{{route('item_'.strtolower($model).'.create', ['id' => $data->category->id]) }}" class="btn-floating btn-medium waves-effect waves-light green right ml-3x"><i class="material-icons">add</i></a>
  	</div>
  </div>
  {!!Form::model($data, ['route'=>['item_'.strtolower($model).'.update', $data->id], 'method'=>'PUT', 'files' => true])!!}
  {{ csrf_field() }}
  	<div class="row">
      <div class="file-field input-field col s12 right">
        {!! Form::label('category_id', trans('translator.main-foreign')) !!}
        {!! Form::select('category_id', $master, null, ['class'=>'validate', 'required', 'id' => 'category_id']) !!}
      </div>

        <div class="input-field col m4 s12 offset-m8">
          {!!Form::label('order', trans('translator.main-order'))!!}
          {!!Form::text('order',$data->order,['class'=>'validate'])!!}
        </div>
        <div class="input-field col s12">
          {!!Form::label('code', trans('translator.main-code'))!!}
          {!!Form::text('code',$data->code,['class'=>'validate', 'required'])!!}
        </div>
        <div class="input-field col s12">
          {!!Form::label('title_es', trans('translator.main-title'))!!}
          {!!Form::text('title_es',$data->title_es,['class'=>'validate'])!!}
        </div>

        <div class="input-field col m6 s12">
          {!! Form::label('color', trans('translator.main-color').'&nbsp;&nbsp;', ['style' => 'z-index:9; background:white; border-radius: 3px 3px 0 0; width: fit-content!important;']) !!}<br />
					{!! Form::select('color[]', $color, null, ['class' => 'form-control', 'multiple' => 'multiple', 'style' => 'line-height: 0;']) !!}
				</div>
        <div class="input-field col m6 s12">
          {!! Form::label('pttn', trans('translator.main-presentation').'&nbsp;&nbsp;', ['style' => 'z-index:9; background:white; border-radius: 3px 3px 0 0; width: fit-content!important;']) !!}<br />
          {!! Form::select('pttn[]', $pttn, null, ['class' => 'form-control', 'multiple' => 'multiple', 'style' => 'line-height: 0;']) !!}
        </div>
        <div class="input-field col m6 s12">
          {!! Form::label('gmge', trans('translator.main-presentation').'&nbsp;&nbsp;', ['style' => 'z-index:9; background:white; border-radius: 3px 3px 0 0; width: fit-content!important;']) !!}<br />
          {!! Form::select('gmge[]', $gmge, null, ['class' => 'form-control', 'multiple' => 'multiple', 'style' => 'line-height: 0;']) !!}
        </div>
        <div class="input-field col m6 s12">
          {!! Form::label('size', trans('translator.main-size').'&nbsp;&nbsp;', ['style' => 'z-index:9; background:white; border-radius: 3px 3px 0 0; width: fit-content!important;']) !!}<br />
          {!! Form::select('size[]', $size, null, ['class' => 'form-control', 'multiple' => 'multiple', 'style' => 'line-height: 0;']) !!}
        </div>

        <div class="input-field col s12">
          <div>
          {!!Form::label('text_es1', trans('translator.main-text'))!!}
          </div>
          {!!Form::textarea('text_es1', $data->text_es, ['class'=>'validate', 'required', 'cols'=>'74', 'rows'=>'1', 'id' => 'text_es'])!!}
        </div>

        <div class="input-field col s12">
          <div>
          {!!Form::label('text_es2', trans('translator.main-text'))!!}
          </div>
          {!!Form::textarea('text_es2', $data->text_es, ['class'=>'validate', 'required', 'cols'=>'74', 'rows'=>'1', 'id' => 'text_es'])!!}
        </div>

        <div class="input-field col m6 s12">
          {!! Form::label('outstanding', trans('translator.main-outstanding').'&nbsp;&nbsp;', ['style' => 'z-index:9; background:white; border-radius: 3px 3px 0 0; width: fit-content!important;']) !!}<br />
          {!! Form::select('outstanding', ['off' => 'No Mostrar', 'on' => 'Mostrar'], null, ['class' => 'form-control', 'style' => 'line-height: 0;']) !!}
        </div>
  	</div>
  {!!Form::submit(trans('translator.main-option-update'), ['class' => 'btn right'])!!}
  {!!Form::close()!!}
  </div>
  </main>
  <script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('text_es1');
    CKEDITOR.replace('text_es2');
  	CKEDITOR.replace('text_es3');
  	CKEDITOR.config.width = '100%';
  </script>
@endsection
