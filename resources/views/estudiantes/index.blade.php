
@extends("holamundo")
@section('contenido-uno')
<center><h1>Registros de usuarios obtenidos de la base de datos</h1></center>
@include('estudiantes.componentes.lista-estudiantes', ["estudiantes"=> $estudiantes])
{{-- Recomendable decirle al componente que use las variables que se le estan enviando desde dicha vista en este caso el de la variable $estudiantes --}}
@endsection