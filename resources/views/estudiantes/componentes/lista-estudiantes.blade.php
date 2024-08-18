{{-- Para listar los regiddtros --}}
{{-- <center><table>  
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Curso</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Fecha de creacion</th>
        <th>Fecha de actualizacion</th>

    </tr>

    @foreach ($estudiantes as $estudiante)
        <tr>
            <td>{{ $estudiante->id }}</td>
            <td>{{ $estudiante->nombre }}</td>
            <td>{{ $estudiante->curso }}</td>
            <td>{{ $estudiante->telefono }}</td>
            <td>{{ $estudiante->correo }}</td>
            <td>{{ $estudiante->created_at }}</td>
            <td>{{ $estudiante->updated_at }}</td>
        </tr>
    @endforeach

</table></center> --}}

{{-- Para actualizar los registros --}}

<center>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Curso</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Fecha de creacion</th>
            <th>Fecha de actualizacion</th>
            <th>Accion</th>
            <th>Registro</th>

        </tr>

        @foreach ($estudiantes as $estudiante)
            <tr>
                <form action="{{ route('estudiante.update', ['id' => $estudiante->id]) }}" method="POST">

                    <td>
                        @csrf
                        @method('put')
                        <input type="text" name="nombre" value="{{ $estudiante->nombre }}" />
                    </td>
                    <td><input type="number" name="curso" value="{{ $estudiante->curso }}" /></td>
                    <td><input type="text" name="telefono" value="{{ $estudiante->telefono }}" /></td>
                    <td><input type="text" name="correo" value="{{ $estudiante->correo }}"></td>
                    <td class="fechas">{{ $estudiante->created_at }}</td>
                    <td class="fechas">{{ $estudiante->updated_at }}</td>
                    <td><input type="submit" value="Actualizar"></td>
                    <td><a href="{{ route('estudiante.edit', ['id' => $estudiante->id]) }}" target="-blank">Ver
                            registro</a></td>

                </form>
            </tr>
        @endforeach

    </table>
</center>
