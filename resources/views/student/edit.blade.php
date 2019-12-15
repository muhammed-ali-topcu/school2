@extends('layouts.app2')

@section('content')

<div class="md-card">
    <div class="md-card-content">
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-1-4">
                    <a  class="md-btn md-btn-primary" href="{{ route('student.create') }}">{{ __('Add_New_Studetn') }}</a>
            </div>
            <div class="uk-width-1-4">
                    <button id="save" class="md-btn md-btn-primary">{{ __('Save') }}</button>
            </div>

            <div class="uk-width-1-4">
                <button id="btn-delete" class="md-btn md-btn-danger">{{ __('Delete') }}</button>
            </div>
            <div class="uk-width-1-4">
                <a  class="md-btn md-btn-primary" href="{{ route('student.index') }}">{{ __('Cancel') }}</a>
            </div>
        </div>
    </div>
</div>

<div class="md-card">
    <div class="md-card-content">
        <form action="{{ route('student.update', compact('student')) }}" method="post" id="main-form">
            @csrf
            @method('PUT')
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-1-1">
                <div class="uk-form-row">
                    <label for="">{{ __('name') }}</label>
                    <input type="text" class="md-input" name="name" value="{{ old('name')?? $student->name }}">
                </div>
                <div class="uk-form-row">
                    <label for="">{{ __('student_no') }}</label>
                    <input type="number" class="md-input" name="student_no" value="{{ old('student_no')?? $student->student_no }}">
                </div>
                <div class="uk-form-row">
                    <label for="">{{ __('class') }}</label>
                    <select name="class" id="" data-md-selectize>
                        <option value="">{{ __('select') }}</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option ></option>
                    </select>
                </div>
                <div class="uk-form-row uk-input-group">
                    <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"> </i></span>
                    <label for="">{{ __('date_of_birth') }}</label>
                    <input type="text" name="date_of_birth" class="md-input" data-uk-datepicker="{format:'YYYY.MM.DD'}" value="{{ old('date_of_birth')?? $student->date_of_birth }}" >
                </div>
                <div class="uk-form-row">
                    <label for="">{{ __('notes') }}</label>
                <textarea name="notes" id="" cols="30" rows="2" class="md-input">{{old('notes')?? $student->notes}}</textarea>
                </div>
                <div class="uk-form-row">
                    <button class="md-btn md-btn-primary" type="submit">{{ __('save') }}</button>
                </div>
            </div>

        </div>
    </form>

    <form action="{{ route('student.destroy',compact('student')) }}" method="post" id="form-delete">
        @csrf
        @method('DELETE')
    </form>
    </div>
</div>





@endsection


@push('scripts')
    <script>
        $("#save").click(function(){
            $('#main-form').submit();
        });
        $('#btn-delete').click(function(){
            $('#form-delete').submit();
        })
    </script>

@endpush



