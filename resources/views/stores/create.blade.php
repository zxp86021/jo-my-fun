@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ url('/stores') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="StoreName">店名</label>
                        <input type="text" class="form-control" id="StoreName" name="name">
                    </div>
                    <div class="form-group">
                        <label for="StoreAddress">店址</label>
                        <input type="text" class="form-control" id="StoreAddress" name="address">
                    </div>
                    <div class="form-group">
                        <label for="StorePhone">電話</label>
                        <input type="text" class="form-control" id="StorePhone" name="phone">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
