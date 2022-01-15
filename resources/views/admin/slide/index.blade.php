@extends('admin.layouts.app')

@section('title', __('Slide'))

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-actions">
                        <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                    </div>
                    <h4 class="card-title mb-0">@lang('Add New')</h4>
                </div>
                <div class="card-body pb-0 collapse show table-responsive no-wrap">
                    <form method="POST" action="{{route('slide.store')}}" class="floating-labels mt-1" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
                                <div class="form-group mb-4">
                                    <input type="file" class="form-control js-dropify" name="file" accept="image/*" data-show-remove="false" required />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-7 col-lg-8 col-xl-9">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="form-group focused mb-4 @error('name') has-error @enderror">
                                            <input id="name" type="text" name="name"
                                                   class="form-control form-control-sm @error('name') is-invalid @enderror"
                                                   value="{{old('name')}}" required>
                                            <span class="bar"></span>
                                            <label for="name">@lang('Title')</label>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-lg-2">
                                        <div class="form-group focused mb-4 @error('order') has-error @enderror">
                                            <input id="order" type="number" name="order"
                                                   class="form-control form-control-sm @error('order') is-invalid @enderror"
                                                   value="{{old('order')}}" required>
                                            <span class="bar"></span>
                                            <label for="order">@lang('Order')</label>
                                            @error('order')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-7 col-lg-3">
                                        <div class="form-group mb-4 @error('time') has-error @enderror">
                                            <input id="time" type="number" name="time"
                                                   class="form-control form-control-sm @error('time') is-invalid @enderror"
                                                   value="{{old('time')}}" required>
                                            <span class="bar"></span>
                                            <label for="time">@lang('Time') <code>(@lang('second'))</code></label>
                                            @error('time')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group mb-4 @error('url') has-error @enderror">
                                            <input id="url" type="text" name="url" class="form-control form-control-sm @error('url') is-invalid @enderror" value="{{old('url')}}" required>
                                            <span class="bar"></span>
                                            <label for="url">@lang('Link')</label>
                                            @error('url')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="form-group @error('content') has-error @enderror">
                                            <textarea id="content" rows="2" type="text" name="content" class="form-control form-control-sm @error('content') is-invalid @enderror">{{old('content')}}</textarea>
                                            <span class="bar"></span>
                                            <label for="content">@lang('Content')</label>
                                            @error('content')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-2 mb-3 mb-lg-0 d-flex flex-column justify-content-center">
                                        <button type="submit" class="btn text-center btn-success waves-effect waves-light">@lang('Save')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row draggable-cards js-dragula">
{{--                loop--}}
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-2">
                            <form action="">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="/images/admin/background/user-info.jpg" width="80">
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="row">
                                            <div class="col-12">Tiêu đề</div>
                                            <div class="col-12">Thời gian chuyển: 2 <code>giây</code></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 d-flex flex-column justify-content-center">
                                        <div class="row">
                                            <a href="" class="text-inverse pr-2" data-toggle="tooltip" title="@lang('Edit')">
                                                <i class="ti-marker-alt"></i>
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn p-0 text-inverse js-delete-sweetalert" data-toggle="tooltip" title="@lang('Delete')">
                                                <i class="ti-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>
        .dropify-wrapper {
            height: 150px;
        }
        #content {
            resize: none;
        }
    </style>
@endsection

@section('js')
    <script>
        $(function () {
            dragula([document.querySelector(".js-dragula")]).on("out", function (e, t) {
                t.className = t.className.replace("card-over", "")
            })
        });
    </script>
@endsection
