@extends('layout.master')

@section('title','createpatient')
@section('content')

<form action="{{route('patient.update',$patients->id)}}" method="POST" class="row g-3">
  @csrf
  @method('PUT')
    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">First name</label>
      <input type="text" name="First_name" class="form-control" id="validationDefault01" value="{{$patients->First_name}}" required>
    </div>
    <div class="col-md-4">
      <label for="validationDefault02" class="form-label">Last name</label>
      <input type="text" name="Last_name" class="form-control" id="validationDefault02" value="{{$patients->Last_name}}" required>
    </div>
    <div class="col-md-3">
        <label for="validationDefault04" class="form-label">State</label>
        <select class="form-select" name="State" id="validationDefault04" required>
          <option value="{{$patients->State}}"  >State</option>
          <option>Single</option>
          <option>Maried</option>
          <option>Engaged</option>
        </select>
      </div>
    <div class="col-md-4">
      <label for="validationDefault03" class="form-label">disease</label>
      <input type="text" name="The_disease" class="form-control" id="validationDefault03" value="{{$patients->The_disease}}" required>
    </div>
    <div class="col-md-4">
        <label for="validationDefault03" class="form-label">Address</label>
        <input type="text" name="Address" class="form-control" id="validationDefault03" value="{{$patients->Address}}" required>
      </div>
    
    <div class="col-md-2">
      <label for="validationDefault05" class="form-label">Date</label>
      <input type="date" name="Date" class="form-control" id="validationDefault05" value="{{$patients->Date}}" required>
    </div>
    <div class="col-12">
        <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Doctor</label>
            <input type="text" name="Doctor_name" class="form-control" id="validationDefault02" value="{{$patients->Doctor_name}}" required>
          </div>
          <br>
     
    </div>
    
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
   
  </form>
@endsection    
