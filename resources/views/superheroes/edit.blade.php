@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/superheroes/'.$superheroes->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

@include('superheroes.form');

</form>
</div>
@endsection