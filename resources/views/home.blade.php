@extends('layouts.app')

@section('content')
<div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">  {{__('messages.crear_tarea')}}</h4>
      </div>
      <form action="{{route('crear.tarea')}}" method="post">
        {{csrf_field()}}
      <div class="modal-body">
            <input type="text" id="texto" class="form-control" placeholder="  {{__('messages.escribir_una_tarea')}}">
      </div>

      <div class="modal-footer">

      <button type="button" id="guardarTareas" class="btn btn-primary">{{__('messages.salvar')}}"</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="text-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crear">
                  <i class="fa fa-plus"></i>
            </button>
          </div>

          <div class="panel panel-default">
                <div class="panel-heading">{{__('messages.mis_tareas')}}</div>

                <div class="panel-body">
                  <table class="table">
                   <thead>
                     <tr>
                       <th>Tareas</th>
                       <th>Estado</th>
                       <th class="text-right">Acciones</th>
                     </tr>
                   </thead>
                   <tbody id="tareas">
                      @include('tareas')
                   </tbody>


                  </table>
                </div>
            </div>
            <div class="text-center">
                {{$tareas->links()}}  {{-- indicadores de paginacion --}}
            </div>
        </div>
    </div>
</div>
@endsection
