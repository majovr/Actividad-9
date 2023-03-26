@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/superheroes') }}" method="post" enctype="multipart/form-data" >
@csrf
@include('superheroes.form');

</form>
</div>
@endsection