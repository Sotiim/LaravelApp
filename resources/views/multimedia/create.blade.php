@extends('layout')
@section('dashboard-content')
    <h1>Formulario para Agregar Multimedia</h1>
        @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="gone">
                <strong>{{Session::get('success')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (Session::get('failed'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="gone">
            <strong>{{Session::get('failed')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif            

        <form action="{{URL::to('post-multimedia-form')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="personaNombre">Nombre</label>
              <input type="text" class="form-control" id="personaNombre" placeholder="Ingrese el nombre"name="personaNombre">            
            </div>

            <div class="form-group">
              <label for="personaNombre">Archivo Multimedia</label>
              <input type="file" class="form-control" id="archivo"name="archivo">            
            </div>
            

            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
           
          </form>
@stop