@extends('layouts.menu')


@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>REGISTRAR NUEVO FOLIO</h1><hr/>
</div>
	<div class="row jumbotron " style="padding-top: 20px;border-top-width: 20px;margin-top: 30px;">
		<div class="col-md-10 col-md-offset-1"style="margin: 2% 50px 75px 100px;">
			{!! Form::open(['route' => 'folios.store', 'method' => 'post', 'novalidate']) !!}

                  <div class="form-group">
                      {!! Form::label('NÚMERO DE FOLIO:', 'NUMERO DE FOLIO:') !!}
                      {!! Form::text('num_folio', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NUMERO DE OFICIO']) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('NOMBRE DE QUIEN CREA EL OFICIO:', 'NOMBRE DE QUIEN CREA EL OFICIO:') !!}
                      {!! Form::text('nombre_creador', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NOMBRE DE QUIEN CREA EL OFICIO']) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('NOMBRE DEL DEPARTAMENTO QUE EMITE EL OFICIO:', 'NOMBRE DEL DEPARTAMENTO QUE EMITE EL OFICIO:') !!}
                      {!! Form::text('nom_departamento_emitido', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NOMBRE DEL DEPARTAMENTO QUE EMITE EL OFICIO']) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('NOMBRE DE LA DEPENDENCIA A QUIEN VA DIRIGIDO:', 'NOMBRE DE LA DEPENDENCIA A QUIEN VA DIRIGIDO:') !!}
                      {!! Form::text('nom_dependecia_dirigido', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NOMBRE DE LA DEPENDENCIA A QUIEN VA DIRIGIDO']) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                  </div>
                  <div class="col-md-10 col-md-offset-1">
                        {!! Form::label('CARGAR FOTO INE:','CARGAR FOTO INE:') !!}
                        {!! Form::file('fotoine') !!}
                        {{-- <label>Cargar Foto INE</label>
                        <input type="file" name="fotoine">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                        
                  </div>
            {!! Form::close() !!}
		</div>
	</div>
</div>
   <script type="text/javascript">  
        $('.date').datepicker({  
           format: 'yyyy-mm-dd'
         });  
    </script> 
@endsection
