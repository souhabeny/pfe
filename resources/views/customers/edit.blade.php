@extends('layout')
@section('content')
<h1>edit Custumer</h1>

<form action="update" method="post" >

@include('customers.form')
<button type="submit" > edit custumer</button>
</form>


@endsection