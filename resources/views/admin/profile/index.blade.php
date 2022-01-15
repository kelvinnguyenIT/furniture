@extends('admin.layouts.app')

@section('title', __('My Profile'))

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('Edit Profile')</h4>
                    <h6>&nbsp;</h6>
                    <form method="POST" action="{{route('profile.update', $user->id)}}" class="floating-labels mt-4">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-5 focused @error('name') has-error @enderror">
                            <input id="name" type="text" name="name" value="{{ old('name') ?? $user->name}}" class="form-control @error('name') is-invalid @enderror" required>
                            <span class="bar"></span>
                            <label for="name">@lang('Name')</label>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-5 focused @error('email') has-error @enderror">
                            <input id="email" type="email" name="email" value="{{ old('email') ?? $user->email}}" class="form-control @error('email') is-invalid @enderror" required>
                            <span class="bar"></span>
                            <label for="email">@lang('E-Mail Address')</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-5 focused @error('password') has-error @enderror">
                            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password">
                            <span class="bar"></span>
                            <label for="password">@lang('New password')</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-5 focused @error('password_confirmation') has-error @enderror">
                            <input id="password-confirmation" type="password" name="password_confirmation"
                                   class="form-control @error('password_confirmation') is-invalid @enderror" autocomplete="new-password">
                            <span class="bar"></span>
                            <label for="password-confirmation">@lang('Confirm new password')</label>
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light mr-2">@lang('Save')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
