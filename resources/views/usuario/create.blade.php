@extends('layouts.app')

@section('content')
<div class="container">

<form method="post" action="{{ url('/usuario') }}">
    @csrf
    @include('usuario.form',['modo'=>'Crear'])
</form>
</div>
@endsection