@extends('layouts.master')

@section('content')

    <ul>
        @foreach($cars as $car)
            <li>
                Car name:  <a href="/cars/{{$car->id}}">{{$car->title}}</a>
                <br>
                Car producer: {{$car->producer}}
                <br>
                Car number of doors: {{$car->number_of_doors}}
            </li>
        @endforeach

    </ul>
       
@endsection