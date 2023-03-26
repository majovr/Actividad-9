@extends('layouts.app')
@section('content')
<div class="container">

<a href=" {{ url('superheroes/create') }}"> Registrar nuevo empleado </a>
<table class=table table-light">
<thead class="thead-light">
    <tr>
        <th>#</th>
        <th>Foto</th>
        <th>Nombre Real</th>
        <th>Nombre de superheroe</th>
        <th>Información Adicional</th>
        <th>Acciones</th>
</tr>
</thead>

<tbody>
    @foreach($superheroes as $superheroes)
    <tr>
        <td>{{ $superheroes->id }}</td>

        <td>
            <img src="{{ asset('storage').'/'.$superheroes->Foto }}" width="100" alt="">
</td>
        <td>{{ $superheroes->Foto }}</td>
        <td>{{ $superheroes->Nombre_Real }}</td>
        <td>{{ $superheroes->Nombre_De_Superheroe }}</td>
        <td>{{ $superheroes->Informacion_Adicional }}</td>
        <td>
        
        <a href="{{ url('/superheroes/'.$superheroes->id.'/edit' ) }}">
        Editar
</a>
            
        <form action="{{ url('/superheroes/'.$superheroes->id ) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('¿Quieres borrar?')"
            value="Borrar">

</form>

</tr>
@endforeach
</tbody>
</table>
</div>
@endsection