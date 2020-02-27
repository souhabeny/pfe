@extends('layout')
@section('content')
<div class="row">
<div>
<h1>details for {{$customer->name}}</h1>
<strong><a href="/customers/{{$customer->id}}/edit">edit</a></strong><br/>
<form action="{{$customer->id}}/delete" method="post">
@method('DELETE')
@csrf
<button type="submit" >delete</button>
</form>
<strong>{{$customer->email}}</strong><br/>
<strong>{{$company->name}}</strong>
</div>
</div>
@endsection