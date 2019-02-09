@extends('layouts')
@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">Phone</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $all_contacts as $v_contact )   
        
      <tr>
        <th scope="row">{{$v_contact->id }}</th>
        <td>{{$v_contact->name}}</td>
        <td>{{$v_contact->email}}</td>
        <td>{{$v_contact->phone}}</td>
        <td>
        <a href="{{URL::to('edit-contact/'.$v_contact->id)}}" class="btn btn-sm btn-warning">EDIT</a>
        <a href="{{URL::to('show-contact/'.$v_contact->id)}}" class="btn btn-sm btn-info">View</a>
        <a href="{{URL::to('delete-contact/'.$v_contact->id)}}"  class="btn btn-sm btn-danger" id="delete">Delete </a></td>
    </tr>
      @endforeach
    </tbody>
  </table>
@endsection