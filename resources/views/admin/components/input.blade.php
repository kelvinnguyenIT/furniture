<div class="form-group {{$class}} @error($name) has-error @enderror">
    <input id="{{$name}}" type="{{$type}}" name="{{$name}}" @if(!str_contains($name, 'password')) value="{{old($name) ?? $value}}" @endif
           class="form-control {{$inputClass}} @error($name) is-invalid @enderror" @if($required) required @endif
           @if($autocomplete) autocomplete="{{$autocomplete}}" @endif>
    <span class="bar"></span>
    <label for="{{$name}}">@lang($label) @if($required)<code>*</code>@endif</label>
    @error($name)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
