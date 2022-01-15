@extends('admin.layouts.app')

@section('title', __('Content Management System'))

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('Content Management System')</h4>
                    <h6 class="card-subtitle">&nbsp;</h6>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered display js-datatable w-100">
                            <thead>
                            <tr>
                                <th></th>
                                <th>@lang('Code')</th>
                                <th>@lang('Content')</th>
                                <th>@lang('Last modified date')</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($cmsList as $cms)
                            <tr>
                                <td>{{$cms->id}}</td>
                                <td>{{$cms->key}}</td>
                                <td>
                                    @if(Str::startsWith($cms->value, config('constants.folder.cms')))
                                        <img src="{{$cms->src}}" width="80">
                                    @else
                                        {{$cms->limit_value}}
                                    @endif
                                </td>
                                <td>{{$cms->updated_at}}</td>
                                <td>
                                    <form action="{{ route('cms.destroy', $cms->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn p-0 text-inverse js-delete-sweetalert" title="@lang('Delete')" data-toggle="tooltip">
                                            <i class="ti-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
