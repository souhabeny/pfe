@extends('layout')
@section('content')
<h1>create Custumer</h1>

<form action="custumers" method="post" >
@include('customers.form')
<button type="submit" > add custumer</button>
</form>


@endsection