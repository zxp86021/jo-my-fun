@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
            @if (session('status') == '201')
                <div class="alert alert-success">
                    店家新增成功
                </div>
            @else
                <div class="alert alert-danger">
                    店家新增失敗
                </div>
            @endif
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{ url('/stores/create') }}">新增店家</a>
                <div class="card">
                    <div class="card-header">{{ __('StoreList') }}</div>

                    <ul class="list-group list-group-flush">
                        @foreach($stores as $store)
                        <li class="list-group-item">
                            <a href="{{ url('/stores/' . $store['id']) }}">
                                {{ $store['name'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
