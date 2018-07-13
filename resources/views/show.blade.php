@extends('layouts.master')

@section('content')
        Car name: {{$car->title}}
        <br>
        Car producer: {{$car->producer}}
        <br>
        Car number of doors: {{$car->number_of_doors}}
@endsection