@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form>
                    @csrf
                    <div class="form-group">
                        <label for="ShowStoreName">店名</label>
                        <input type="text" class="form-control" id="ShowStoreName" name="name" value="{{ $store['name'] }}">
                    </div>
                    <div class="form-group">
                        <label for="ShowStoreAddress">店址</label>
                        <input type="text" class="form-control" id="ShowStoreAddress" name="address" value="{{ $store['address'] }}">
                    </div>
                    <div class="form-group">
                        <label for="ShowStorePhone">電話</label>
                        <input type="text" class="form-control" id="ShowStorePhone" name="phone" value="{{ $store['phone'] }}">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
