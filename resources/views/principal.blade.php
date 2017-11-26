@extends('include.base')

@section('title','principal')

@section('main')

<h3 class="opensans" style="margin-left: 12px;">Tus diagramas</h3>
	<div class="row">
    @foreach ($datos as $element)
       <div class="col s6 m3">
        <div class="card">
          <div class="card-image">
            <img src="{{ asset('diagramasImg/'.$element['nombreI']) }}" width="250" height="250">
              <a class="btn-floating   halfway-fab waves-effect waves-light degradado"><i class="material-icons">edit</i></a>
              <a class="btn-floating  halfway-fab waves-effect waves-light degradado"><i class="material-icons">edit</i></a>
          </div>
          <div class="card-content card-mio">
            <p>{{$element['nombre']}}</p>
          </div>
        </div>
      </div>
    @endforeach
  <div class="fixed-action-btn">
    <a href="{{ url('editor') }}" id="Nuevo" class="btn-floating btn-large waves-effect waves-light degradado"><i class="material-icons">add</i></a>
  </div>

  <!-- Tap Target Structure -->
  <div class="tap-target " style="background-color: #4b367c;" data-activates="Nuevo">
    <div class="tap-target-content " style="color: white;">
      <h5>Hola!! </h5>
      <p>Veo que no tienes diagramas :( <br>puedes crear uno nuevo presionando este boton.</p>
    </div>
  </div>

@include('include.sidenavEu')

  @endsection

@section('script')
<script type="text/javascript">
  @if (empty($datos))
    $('.tap-target').tapTarget('open');
  @endif

$('.actUser').on('click', function(event) {

  if($('#user_name').val() == '' ){

    Materialize.toast('Nombre de usuario vacio ', 1500)
    return false;

  }else if($('#user_nombre').val() == ''){

    Materialize.toast('Dejastes tu nombre vacio', 1500)
    return false;
  }
  else if($('#user_apellido').val() == ''){

    Materialize.toast('Dejastes tu apellido vacio', 1500)
    return false;

  }else if($('#user_email').val() == '' ){

    Materialize.toast('Dejastes tu apellido vacio', 1500)
    return false;

  }else if(!validator.isEmail($('#user_email').val())){

    Materialize.toast('Email incorrecto', 1500)
    return false;
  }

  $.ajax({
    url: 'updUsers',
    type: 'POST',
    data: {
      id: '{{ Auth::user()->id }}',
      username: $('#user_name').val(),
      nombre: $('#user_nombre').val(),
      apellido: $('#user_apellido').val(),
      correo: $('#user_email').val(),
      pass: $('#user_password').val(),
      pass2: $('#user_password-confirm').val(),
      _token: '{{ csrf_token()}}' 

      },
  })
  .done(function(data) {
    console.log("success");
  });

});


</script>

@endsection