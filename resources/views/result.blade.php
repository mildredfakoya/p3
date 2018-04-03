@extends('layouts.master')

@section('title')
   Result
@endsection

@section('content')

    <h1>Your Result</h1>
    <p>BMI of a person is calculated as the weight in Kgs divided by the height in m <sup>2</sup>
    </p>
    <div class='outer'>
        <div class='heading'><h2>BMI for <em>{{$uniqueid}}</em></h2></div>
        <div class='container'>
            @if($uniqueid&&$gender&&$weight&&$height)
                <p> The selected gender for {{$uniqueid}} is {{$gender}}</p>
                <p> The entered Weight for {{$uniqueid}} is {{$weight}}</p>
                <p> The entered Height for {{$uniqueid}} is {{$height}}</p>
                <p> The calculated BMI for {{$uniqueid}} is {{$bmi}}</p>
            @else
                Please enter values in all the provided fields for the BMI to be calculated
            @endif

        </div>


@endsection
