@extends('layouts.app')

@section('styles')

@endsection

@section('content')

    <form method="POST" action="{{ route('workfront.submit') }}">
        @csrf
        <!-- ROW -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <h3 class="card-title">Default Details</h3>
                    </div>

                    <div class="card-body">
                        <div class="mb-3">
                            <label for="input-label" class="form-label">Request Title</label>
                            <input type="text" name="name" placeholder="Request Title" required
                                   class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label for="input-label" class="form-label">Request Description</label>
                            <textarea name="description" placeholder="Request Description"
                                      class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach($forms as $form)
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <h3 class="card-title">{{ $form['name'] }}</h3>
                        </div>

                        <div class="card-body">
                            @foreach($form['fields'] as $field)
                                <div class="mb-3">
                                    <label for="{{ $field['label'] }}"
                                           class="fw-semibold mb-2"> {{$field['label']}} </label>
                                    @if ($field['displayType'] == 'select')
                                        <select class="form-select form-select-lg" aria-label=".form-select-lg"
                                                name="DE:{{ $field['name'] }} id={{ $field['label'] }}">
                                            @foreach($field['options'] as $option)
                                                <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
                                            @endforeach
                                        </select>
                                    @elseif ($field['displayType'] == 'MULT')
                                        <div class="choices" data-type="select-multiple" role="combobox">

                                        </div>
                                    @elseif ($field['displayType'] == 'CHCK')
                                        @foreach($field['options'] as $option)
                                            <div class="form-check">
                                                <label class="form-check-label"
                                                       for="{{ $field['name'] }}_{{ $option['label'] }}">{{ $option['label'] }}</label>
                                                <input class="form-check-input" name="DE:{{ $field['name'] }}[]"
                                                       id="{{ $field['name'] }}_{{ $option['label'] }}"
                                                       type="checkbox"
                                                       value="{{ $option['value'] }}"/>
                                            </div>
                                        @endforeach
                                </div>
                                @else
                                    <input name="DE:{{ $field['name'] }}" id="{{ $field['label'] }}"
                                           type="{{$field['displayType']}}"
                                           class="form-control"/>
                                @endif
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
        <div class="btn-group">
            <button class="btn btn-outline-primary" type="submit">Submit Request</button>
        </div>
    </form>

@endsection

@section('scripts')


@endsection
