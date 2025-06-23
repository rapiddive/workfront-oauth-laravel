@extends('layouts.app')

@section('styles')

@endsection

@section('content')

    <!-- ROW -->
    <div class="row">
        <div class="col-md-12 col-xl-6">
            <form method="POST" action="{{ route('workfront.submit') }}">
                @csrf
                <div class="card-header">
                    <h3 class="card-title">Default Details</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <input type="text" name="name" placeholder="Request Title" required class="form-control"/>
                        <textarea name="description" placeholder="Request Description" class="form-control"></textarea>
                    </div>
                </div>


                @foreach($forms as $form)
                    <div class="card-header">
                        <h3 class="card-title">{{ $form['name'] }}</h3>
                    </div>
                    <div class="card-body">
                        @foreach($form['fields'] as $field)
                            <div class="form-group row">
                                <label class="form-label" for="{{ $field['label'] }}">{{$field['label']}}</label>
                                @if ($field['displayType'] == 'select')
                                    <select class="form-select select2 leading-none" name="DE:{{ $field['name'] }}">
                                        @foreach($field['options'] as $option)
                                            <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
                                        @endforeach
                                    </select>
                                @elseif ($field['displayType'] == 'MULT')
                                    <select name="DE:{{ $field['name'] }}[]" multiple>
                                        @foreach($field['options'] as $option)
                                            <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
                                        @endforeach
                                    </select>
                                @elseif ($field['displayType'] == 'CHCK')
                                    @foreach($field['options'] as $option)
                                        <label>{{ $option['label'] }}</label>
                                        <input class="form-check-input" name="DE:{{ $field['name'] }}[]" type="checkbox"
                                               value="{{ $option['value'] }}"/>
                                    @endforeach
                                @else
                                    <input name="DE:{{ $field['name'] }}" id="{{ $field['label'] }}"
                                           type="{{$field['displayType']}}"
                                           class="form-control"/>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @endforeach
                <div class="btn-group">
                    <button class="btn btn-outline-primary" type="submit">Submit Request</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')


@endsection
