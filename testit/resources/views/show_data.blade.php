@extends('layouts')
@section('content')
<a href="{{ route('all.contact')}}" class="btn btn-success">All Contacts</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">Phone</th>
      </tr>
    </thead>
    <tbody>
      
        
      <tr>
        <th >{{$sngl_con->id }}</th>
        <td>{{$sngl_con->name}}</td>
        <td>{{$sngl_con->email}}</td>
        <td>{{$sngl_con->phone}}</td>
       
        
    </tr>
     
    </tbody>
  </table>
@endsection