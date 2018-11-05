@extends('layouts.app')
@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="col-md-10"></div>
            <div class="col-md-2 float-right">
                <a href="#" class="buy-now">Buy Now</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 pt-5">
            <div class="col-md-3">
                <h3>No data to show</h3>
            </div>
            <div class="col-md-3">
                <a href="{{route('enter-now')}}" class="enter-now"> Enter now</a>
            </div>
        </div>
    </div>

@endsection

