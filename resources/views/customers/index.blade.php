@extends('layout')
@section('content')
<h1>Custumer</h1>
<p><a href="/create">add new customer</a></p>

<table>

@foreach($activecustomers  as $customer) 

<tr><td><a href="/customers/{{$customer->id}}">{{$customer->name}}</a></td><td>{{$customer->email}}</td><td>{{$customer->active}}</td>

 @endforeach

</table>

<ul>

@foreach($companies  as $company) 
<h6>{{$company->name}}</h6>
@foreach($company->customers  as $customer)
<li>{{$customer->name}}</li>
@endforeach
 @endforeach

</ul>
@endsection