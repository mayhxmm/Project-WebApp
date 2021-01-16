@extends('layouts.app')

@section('content')
@if(auth()->check())
<div class="container">
<div class="row">

<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success text-center">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

<div class="col-sm-12">
<br />
<h3 class="display-5 text-center">Student List</h3>    
  <table class="table table-striped">
    <thead>
        <tr>
          <th>No</th>
          <th>Matric Number</th>
          <th>Name</th>
          <th>Offence</th>
          <th>Amount To Be Paid</th>
          <th colspan="2" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $count => $student)
        <tr>
            <td>{{++$count}}</td>
            <td>{{$student->matric_no}}</td>
            <td>{{$student->first_name}} {{$student->last_name}}</td>
            <td>{{$student->offence}}</td>
            <td>{{$student->price}}</td>
            <td class="text-center">
                <a href="{{ route('students.edit',$student->id)}}" ><button class=
               "btn btn-primary btn-block btn-sm">Edit</button></a> 
            </td>
            <td class="text-center">
                <form action="{{ route('students.destroy', $student->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-block btn-sm" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="text-center">
    <a style="margin: 19px;" href="{{ route('students.create')}}" class="btn btn-primary">New Student</a>
  </div>
<div>

</div>
</div>
@else
<script>window.location = "/";</script>
@endif

@endsection
