

@extends('layouts.app')

@section('content')

    <h1>Welcome to IIUM Student Compound System</h1>
    <p>Date: {{ date('d-m-Y') }} </p>
    <p>Time: <span id="datetime"></span></p>
    <script>
    var dt = new Date();
    document.getElementById("datetime").innerHTML = dt.toLocaleTimeString();
    </script>

@endsection
    
