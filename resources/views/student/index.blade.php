@extends('layouts.app2')

@section('content')

<div class="md-card">
    <div class="md-card-content">
        <h3 class="heading_a">Add New Studetn</h3>
        <div class="uk-grid" >
            <form class="uk-form">
                <div class="uk-width-1-1">
                    <div class="uk-form-row">
                        <label for="{{ __('name') }}">{{ __('name') }}</label>
                        <input type="text" class="md-input-dan">
                    </div>
                    <div class="uk-form-row">
                        <label for="">{{ __('Student No') }}</label>
                        <input type="number" class="md-input">
                    </div>
                    <div class="uk-form-row">
                        <label for="">{{ __('Date_of_Birth') }}</label>
                        <input id="kUI_datepicker_a" value="10-06-2015" />

                    </div>

                </div>


            </form>
        </div>
    </div>
</div>




@endsection
