@extends('layouts.main-layout')

@section('section')
  <h1>
    Name: {{$drink -> name}} <br>
    Gradiation: {{$drink -> gradation}} <br>
    Price: {{$drink -> price}}
  </h1>

@endsection
