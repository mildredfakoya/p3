@extends('layouts.master')

@section('title')
    {{'BMI Calculator'}}
@endsection

@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <link href='/css/p3.css' type='text/css' rel='stylesheet'>
@endpush

@section('content')
    <div class ='row'>
        <div class ='col-3'></div>
        <div class ='col-9'>
            <div class ='outer'>
                <div class ='heading'><h1>BMI Calculator Form</h1></div>
                <div class ='container'>
                    <form method ='get'>
                        <div class ='row'>
                        <label class ='col-5' for ='uniqueid'>Client's Unique ID</label>
                        <Input class ='col-7 columnspacer' id ='uniqueid' name ='uniqueid' type ='text' />
                        </div>
                        <div class ='textspacer spacer'></div>
                        <div class ='row'>
                            <label class ='col-5'>Gender</label>
                            <div class = 'col-7 columnspacer' id ='gender'>
                            <Input name ='gender' type ='radio' value ='female' id ='female'/><label for ='female'>Female </label><br/>
                            <Input name ='gender' type ='radio' value ='male' id = 'male'/><label for 'male'>Male</label> <br/>
                            </div>
                        </div>
                        <div class ='textspacer spacer'></div>
                        <div class ='row'>
                            <label class ='col-5' for ='weight'>Weight In Kgs</label>
                            <Input class ='col-7 columnspacer' id ='weight' name ='weight' type ='number' step = '0.01' min ='0'/>
                        </div>
                        <div class ='textspacer spacer'></div>
                        <div class ='row'>
                            <label class ='col-5' for ='height'>Height in Metres</label>
                            <Input class ='col-7 columnspacer' id ='height' name ='height' type ='number' step = '0.01' min ='0'/>
                        </div>
                        <div class ='spacer'></div>
                        <button class ='btnblk' type ='Submit' name ='submit'> Calculate </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection