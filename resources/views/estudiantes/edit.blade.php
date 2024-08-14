@extends("holamundo")
@section('contenido-uno')

<center><h1>Welcome desde el edit</h1>

<form action="{{ route('estudiante.update' , ['id'=>$estudiante->id])}}" method="POST">
                
    <td>
        @csrf
        @method('put')
        <input type="text" name="nombre" value="{{ $estudiante->nombre }}"/></td>
    <input type="number" name="curso" value="{{ $estudiante->curso }}"/>
    <input type="text" name="telefono" value="{{ $estudiante->telefono }}"/>
    <input type="text" name="correo" value="{{ $estudiante->correo }}"/>
    {{ $estudiante->updated_at }}
    <input type="submit" value="Actualizar">
    {{-- <a href="{{ route('estudiante.edit', ['id'=>$estudiante->id])}}" target="-blank">Ver registro</a> --}}
    
</form></center>
@endsection
<br>

@section('contenido-dos')
<br>

<center>

    <form action="{{ route('estudiante.delete' , ['id'=>$estudiante->id]) }}" method="POST">
        @csrf
        @method('delete')
        <label for=""><b>Eliminar Registro</b></label>
        <input type="submit" value="Eliminar">
    </form></center>

@endsection



