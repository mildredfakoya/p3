@extends('layouts.master')

@section('title')
    Welcome to Project 3
@endsection

@section('content')



            <div class='outer'>
            <div class='heading'><h1>BMI Calculator Form</h1></div>
            <div class='container'>

                <form method='POST' action='/save'>
                    {{ csrf_field() }}
                    <div class='error'>* Required fields</div>
                    <div class='row'>
                        <label class = 'col-5' for='uniqueid'>* Unique ID</label>
                        <input type='text' class = 'col-7 columnspacer' name='uniqueid' id='uniqueid' value='{{ old('uniqueid') }}'>
                        @include('modules.error-field', ['field' => 'uniqueid'])
                    </div>
                    <div class='textspacer spacer'></div>
                    <div class='row'>
                    <label class='col-5'>*Gender</label>
                    <div class='col-7 columnspacer' id='gender'>
                    <Input name='gender' type='radio' value='female' id='female' {{old('gender')=='female' ? 'checked' : '' }}/><label for='female'>Female </label><br/>
                    <Input name='gender' type='radio' value='male' id='male' {{old('gender')=='male' ? 'checked' : '' }} /><label for='male'>Male</label><br/>
                        @include('modules.error-field', ['field' => 'gender'])
                    </div>
                    </div>
                    <div class='textspacer spacer'></div>
                    <div class='row'>
                    <label class='col-5' for='weight'>*Weight In Kgs</label>
                    <Input class='col-7 columnspacer' id='weight' name='weight' type='text' value='{{ old('weight') }}'/>
                        @include('modules.error-field', ['field' => 'weight'])
                    </div>
                    <div class='textspacer spacer'></div>
                     <div class='row'>
                     <label class='col-5' for='height'>*Height in Metres</label>
                     <Input class='col-7 columnspacer' id='height' name='height' type='text' value='{{ old('height') }}'/>
                         @include('modules.error-field', ['field' => 'height'])
                        </div>
                        <div class='spacer'></div>
                        <button class='btnblk' type='Submit'> Calculate</button>
                    </form>

                </div>
            </div>


@endsection