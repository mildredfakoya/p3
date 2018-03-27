@extends('layouts.master')

@section('title')
    Welcome to Project 3
@endsection

@section('content')
    <div class='row'>
        <div class='col-9'>
            <div class='outer'>
                <div class='heading'><h1>BMI Calculator Form</h1></div>
                <div class='container'>
                    <form method='GET' action='/'>
                        <div class='row'>
                            <label class='col-5' for='uniqueid'>Client's Unique ID</label>
                            <Input class='col-7 columnspacer' id='uniqueid' name='uniqueid' type='text'/>
                        </div>
                        <div class='textspacer spacer'></div>
                        <div class='row'>
                            <label class='col-5'>Gender</label>
                            <div class='col-7 columnspacer' id='gender'>
                                <Input name='gender'
                                       type='radio'
                                       value='female'
                                       id='female'/><label for='female'>Female </label><br/>
                                <Input name='gender' type='radio' value='male' id='male'/><label for='male'>Male</label>
                                <br/>
                            </div>
                        </div>
                        <div class='textspacer spacer'></div>
                        <div class='row'>
                            <label class='col-5' for='weight'>Weight In Kgs</label>
                            <Input class='col-7 columnspacer'
                                   id='weight'
                                   name='weight'
                                   type='number'
                                   step='0.01'
                                   min='0'/>
                        </div>
                        <div class='textspacer spacer'></div>
                        <div class='row'>
                            <label class='col-5' for='height'>Height in Metres</label>
                            <Input class='col-7 columnspacer'
                                   id='height'
                                   name='height'
                                   type='number'
                                   step='0.01'
                                   min='0'/>
                        </div>
                        <div class='spacer'></div>
                        <button class='btnblk' type='Submit'> Calculate</button>
                    </form>

                </div>
            </div>
        </div>

        <div class='col-3'>
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

            </div>
        </div>
    </div>
@endsection