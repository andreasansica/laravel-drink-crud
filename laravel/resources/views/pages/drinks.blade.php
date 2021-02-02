@extends('layouts.main-layout')

@section('section')
  <h1>Drinks</h1>
  <h1><a href="{{ route('drink-create') }}">ADD</a></h1>
  <ul>
    @foreach ($drinks as $drink)
      <li>
        <a href="{{ route('drink-show', $drink -> id)}}">
          {{$drink -> name}}
        </a>
        <a href="{{route('edit-drink' , $drink -> id)}}">Edit</a>
        <a href="{{route('delete-drink' , $drink -> id)}}">Delete</a>

      </li>

    @endforeach
  </ul>
@endsection
