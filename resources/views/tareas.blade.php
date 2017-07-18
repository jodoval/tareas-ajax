@forelse ($tareas as $tarea)
@if ($tarea->estado==='En proceso')
 <tr class="success">
@elseif ($tarea->estado==='Completada')
 <tr class="info">
@else
   <tr>
@endif
 <td>{{$tarea->texto}}</td>
<td>
   @if ($tarea->estado==='Pendiente')
       {{__('messages.pendiente')}}
   @elseif ($tarea->estado===" En proceso")
         {{__('messages.en_proceso')}}
   @else
       {{__('messages.completada')}}
   @endif
 </td>

 <td class="text-right">
   @if ($tarea->estado==='Pendiente')
     <a href="{{route ('cambiar.estado',[$tarea->id,1])}}" class="btn btn-warning btn-xs"><i class="fa fa-play fa-fw"></i></a>
   @endif
   @if ($tarea->estado==='En proceso')
     <a href="{{route('cambiar.estado',[$tarea->id,2])}}" class="btn btn-success btn-xs"><i class="fa fa-check fa-fw"></i></a>
   @endif
   <a href="{{route('eliminar.tarea',[$tarea->id])}}" class="btn btn-danger btn-xs"><i class="fa fa-trash fa-fw"></i></a>
 </td>

</tr>
@empty
  <tr>
    <td colspan="3">
            <h3>No hay tareas a mostrar</h3>
    </td>
  </tr>

@endforelse
