@extends('admin.layouts.app')

@section('title', __('Setting'))

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('Setting')</h4>
                    <h6>&nbsp;</h6>
                    <form method="POST" action="{{route('configuration.store')}}" class="floating-labels mt-4">
                        @csrf
                        <div class="form-group mb-5 focused d-none">
                            <input id="phone-number" type="number" name="phone_number" value="{{$configuration['phone_number'] ?? ''}}" class="form-control">
                            <span class="bar"></span>
                            <label for="phone-number">@lang('Phone Number')</label>
                        </div>
                        <div class="form-group mb-5 focused d-none">
                            <input id="phone-text" type="text" name="phone_text" value="{{$configuration['phone_text'] ?? ''}}" class="form-control">
                            <span class="bar"></span>
                            <label for="phone-text">@lang('Formatting Phone Number')</label>
                        </div>
                        <div class="form-group mb-5">
                            <input id="email" type="email" name="email" value="{{$configuration['email'] ?? ''}}" class="form-control">
                            <span class="bar"></span>
                            <label for="email">@lang('E-Mail Address')</label>
                        </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light mr-2">@lang('Save')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
