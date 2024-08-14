{{-- @extends('holamundo') --}}

<form action="{{ route('estudiante.store') }}" method="POST">
    @csrf
    <lable>Nombre</lable>
    <input type="text" name="nombre">
    <lable>Curso</lable>
    <input type="number" name="curso">
    <lable>Telefono</lable>
    <input type="text" name="telefono">
    <lable>Correo</lable>
    <input type="email" name="correo">
    <input type="submit" value="Agregar">
</form>
