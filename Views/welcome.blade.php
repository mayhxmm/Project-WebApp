@extends('layouts.app')

@section('content')

<div style="text-align:center" >
<h1>Welcome to</br>IIUM Student Compound Management System</h1>
    {{ date('d-m-Y') }} | <span id="datetime"></span>
    <script>
    var dt = new Date();
    document.getElementById("datetime").innerHTML = dt.toLocaleTimeString();
    </script>
</div> 

@endsection


