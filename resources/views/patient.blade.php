@extends('layout.master')
@section('title','Patient')
@section('content')


<table class="table table-striped
">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">State</th>
        <th scope="col">The Disease</th>
        <th scope="col">Address</th>
        <th scope="col">Date</th>
        <th scope="col">Doctor</th>
        
    
      </tr>
    </thead>
    <tbody>
      
      
      @foreach ($patients as $patient)
      <tr>
      
       
        <th scope="row">{{$patient->id}}</th>
        <td>{{$patient->First_name}}</td>
        <td>{{$patient->Last_name}}</td>
        <td>{{$patient->State}}</td>
        <td>{{$patient->The_disease}}</td>
        <td>{{$patient->Address}}</td>
        <td>{{$patient->Date}}</td>
        <td>{{$patient->Doctor_name}}</td>
        <td>
          <a class="btn btn-primary" href="{{route('patient.edit',$patient->id)}}" role="button" >Edit</a>
          <a class="btn btn-danger" href="{{route('patient.delete',$patient->id)}}" role="button" >Trush</a>
          <a class="btn btn-dark" href="{{route('patient.view',$patient->id)}}" role="button" >View</a>
          <a class="btn btn-danger" href="{{route('patient.delete.all')}}" role="button" >Delete All</a>
          
          
          
          


        </td>

      </tr>
      @endforeach
    
    </tbody>
  </table>
  @endsection  