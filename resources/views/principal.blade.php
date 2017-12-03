@extends('include.base')

@section('title','principal')

@section('main')
@include('flash::message')
<h3 class="opensans" style="margin-left: 12px;">Tus diagramas</h3>
	<div class="row">
    @foreach ($datos as $element)
       <div class="col l3 m6 s12">
        <div class="card exportCard" data-tipo='{{$element['tipo']}}'>
          <div class="card-image">
            <img src="{{ asset('diagramasImg/'.$element['nombreI']) }}" width="250" height="250">
              {{-- <a class="btn-floating   halfway-fab waves-effect waves-light degradado"><i class="material-icons">edit</i></a> --}}
              <a class="btnEditar btn-floating halfway-fab waves-effect waves-light degradado" data-id="{{$element['id']}}"><i class="material-icons">edit</i></a>
          </div>
          <div class="card-content card-mio">
            <p>{{$element['nombre']}}</p>
          </div>
        </div>
      </div>
    @endforeach

  <div class="fixed-action-btn exportMult" style="right: 100px;">
    <a style="width: 50px;height: 50px;" class="btn-floating btn-large waves-effect waves-light degradado">
      <i class="material-icons" style="line-height: 50px;">cloud_download</i>
    </a>
  </div>
  <div class="fixed-action-btn">
    <a href="{{ url('editor') }}" id="Nuevo" class="btn-floating btn-large waves-effect waves-light degradado">
      <i class="material-icons">add</i>
    </a>
  </div>

  <!-- Tap Target Structure -->
  <div class="tap-target" style="background-color: #4b367c;" data-activates="Nuevo">
    <div class="tap-target-content" style="color: white;">
      <h5>Hola!! </h5>
      <p>Veo que no tienes diagramas :( <br>puedes crear uno nuevo presionando este boton.</p>
    </div>
  </div>

  <!-- Modal Structure -->
  <div id="mdExpInd" class="modal modal-fixed-footer tinyModal">
    <div class="modal-content">
      <h4>Exportar Diagrama</h4>
      <div class="input-field col s12">
        <select id='langSelect'>
        </select>
        <label>Seleccione lenguaje a exportar</label>
      </div>
      <input type="hidden" id="idd">
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-light btn-flat ">Cerrar</a>&nbsp;
      <a class="waves-effect waves-light btn degradado">
        <i class="material-icons left">file_download</i>Exportar
      </a>
    </div>
  </div>

  <!-- Modal Structure -->
  <div id="mdExpMult" class="modal modal-fixed-footer">
    <div class="modal-content" style="padding-bottom: 0px;">
      <h4>Exportar multiples Diagramas</h4>
        <div class="row">
          <div class="col s12">
            <ul class="tabs tabs-fixed-width" style="overflow: hidden;background: none;">
              <li class="tab col s6 "><a class="active" href="#clases">Diagrama de Clases</a></li>
              <li class="tab col s6"><a href="#sql">Modelos Entidad-Relacion</a></li>
            </ul>
          </div>
          <div id="clases" class="col s12">
            <div class="list-graph" style="margin-top: 10px;">
              <div class="row diagHere" style="overflow-y: auto;">
              </div>
              <div class="input-field col s12">
                <select id='classSelect'>
                  <option value="" disabled selected>Seleccione uno</option>
                  <option value='2' data-icon="img/python1.png" class="left circle">Python</option>
                  <option value='3' data-icon="img/p1.png" class="left circle">PHP</option>
                  <option value='4' data-icon="img/java.jpg" class="left circle">Java</option>
                </select>
                <label>Seleccione lenguaje a exportar</label>
              </div>
            </div>
          </div>
          <div id="sql" class="col s12">
            <div class="list-graph" style="margin-top: 10px;">
              <div class="row sqlHere" style="overflow-y: auto;">
              </div>
              <div class="input-field col s12">
                <select id='sqlSelect'>
                  <option value="" disabled selected>Seleccione uno</option>
                  <option value='1' data-icon="img/sql2.png" class="left circle">SQL</option>
                </select>
                <label>Seleccione lenguaje a exportar</label>
              </div>
            </div>
          </div>
        <input type="hidden" id="idd">
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-light btn-flat ">Cerrar</a>&nbsp;
      <a class="waves-effect waves-light btn degradado">
        <i class="material-icons left">file_download</i>Exportar
      </a>
    </div>
  </div>

  @include('include.sidenavEu')

  @endsection

@section('script')
<script type="text/javascript">

$(document).ready(function() {
  $('#mdExpInd').modal();
  $('#mdExpMult').modal();
  // $('#langSelect').material_select();
  $('#classSelect').material_select();
  $('#sqlSelect').material_select();

  
});


$('.exportMult').on('click', function(event) {

  $.ajax({
    url: '{{ url('diagUsuario') }}',
    type: 'POST',
    data: { '_token': '{{csrf_token()}}' }
  })
  .done(function(data) {
    $('.sqlHere').empty();
    $('.diagHere').empty();
    $('.sqlHere').css('height',$('#mdExpMult > div.modal-content').height()-230);
    $('.diagHere').css('height',$('#mdExpMult > div.modal-content').height()-230);


    $.each( data, function(index, val) {
      if(val.tipo == 0){
        $('.sqlHere').append(
          `<div class="col s6" style ='padding: 10px 0 20px 0;'>
            <input type="checkbox" class="checkbox-morado filled-in" id="${val.id}" />
            <label for="${val.id}" style = 'font-size: 16px;'>${val.nombre}</label>
          </div>`);

      }else if(val.tipo ==1){
        $('.diagHere').append(
          `<div class="col s6" style ='padding: 10px 0 20px 0;'>
            <input type="checkbox" class="checkbox-morado filled-in" id="${val.id}" />
            <label for="${val.id}" style = 'font-size: 16px;'>${val.nombre}</label>
          </div>`);
      }
    });
  });

  $('#mdExpMult').modal('open');
  setTimeout(function() {$('ul.tabs').tabs()}, 250);
});

$('.exportCard').on('click', function(event) {

  event.preventDefault();
  event.stopPropagation();
  $('#langSelect').empty();

  if($(this).data('tipo')==0){

    $('#langSelect')
      .append(`<option value="" disabled selected>Seleccione uno</option>
                <option value='1' data-icon="img/sql2.png" class="left circle">SQL</option>`); 
    $('#langSelect').material_select();

  }else if($(this).data('tipo')==1){

    $('#langSelect')
      .append(`
              <option value="" disabled selected>Seleccione uno</option>
              <option value='2' data-icon="img/python1.png" class="left circle">Python</option>
              <option value='3' data-icon="img/p1.png" class="left circle">PHP</option>
              <option value='4' data-icon="img/java.jpg" class="left circle">Java</option>`
              ); 

    $('#langSelect').material_select();
  }

  $('#mdExpInd').modal('open');
});



$('.btnEditar').on('click', function(event) {
  event.preventDefault();
  event.stopPropagation();

  $.ajax({
    url: '{{ url('editGraph') }}',
    type: 'POST',
    data: {data: $(this).data('id'), '_token': '{{ csrf_token()}}' },
  })
  .done(function(data) {   
    $.redirect("{{ url('editor') }}",{ edit: true, name: data.filename},'GET');
  });
});


  $('.button-collapse').sideNav();
  @if (empty($datos))
    $('.exportMult').hide();
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

    Materialize.toast('Dejastes tu correo vacio', 1500)
    return false;

  }else if(!validator.isEmail($('#user_email').val())){

    Materialize.toast('Email incorrecto', 1500)
    return false;
  }

  $.ajax({
    url: '{{ url('updUsers') }}',
    type: 'POST',
    data: {
      id: '{{ Auth::user()->id }}',
      username: $('#user_name').val(),
      nombre: $('#user_nombre').val(),
      apellido: $('#user_apellido').val(),
      correo: $('#user_email').val(),
      pass: $('#user_password').val(),
      pass_confirmation: $('#user_password-confirm').val(),
      _token: '{{ csrf_token()}}' 

      },
  })
  .done(function(data) {
    if(data =='ok'){
      Materialize.toast('Usuario actualizado', 1500)
    }else{
      location.reload();
    }
  })
  .fail(function(data) {
    $.each(data.responseJSON.errors, function(index, val) {
      Materialize.toast(val, 1500)
    });
  });
});


</script>

@endsection