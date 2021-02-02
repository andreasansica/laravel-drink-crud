@extends('layouts.main-layout')

@section('section')
    <form action="{{route('update-drink' , $drink -> id)}}" method="post">
        @csrf
        @method('post')

            <label for="name">Name : </label>
            <input type="text" name="name" value="{{$drink -> name}}">
            <br>
            <label for="gradation">Gradation : </label>
            <input type="text" name="gradation" value="{{$drink -> gradation}}">
            <br>
            <label for="price">Price : </label>
            <input type="text" name="price" value="{{$drink -> price}}">
            <br>
            <input type="submit" value="SALVA">
            

    </form>
@endsection
