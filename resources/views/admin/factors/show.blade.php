@extends('admin.master')
@section('maincontent')
    <div class="col-md-3"></div>
    <div class="col-md-9 my-5">


        <div class="form-group">
            <label>نام مشتری</label>
            <input  class="form-control" name="name" value="{{$customer->name}}" readonly>
        </div>

        <div class="form-group">
            <label>کد ملی</label>
            <input  class="form-control" name="national_code" value="{{$customer->national_code}}" readonly>
        </div>

        <div class="form-group">
            <label>نوع مشتری</label>
            <input  class="form-control" name="type" value="{{$customer->type}}" readonly>
        </div>

        <div class="form-group">
            <label>شماره موبایل</label>
            <input  class="form-control" name="mobile" value="{{$customer->mobile}}" readonly>
        </div>

        <div class="form-group">
            <label> شماره تلفن</label>
            <input  class="form-control" name="phone" value="{{$customer->phone}}" readonly>
        </div>

        <div class="form-group">
            <label> کشور</label>
            <input  class="form-control" name="state" value="{{$customer->state}}" readonly>
        </div>

        <div class="form-group">
            <label> شهر</label>
            <input  class="form-control" name="city" value="{{$customer->city}}" readonly>
        </div>

        <div class="form-group">
            <label> آدرس</label>
            <input  class="form-control" name="address" value="{{$customer->address}}" readonly>
        </div>

        <div class="form-group">
            <label>کد پستی </label>
            <input  class="form-control" name="zipcode" value="{{$customer->zipcode}}" readonly>
        </div>

        <div class="form-group">
            <label>آدرس</label>
            <input  class="form-control" name="desc" value="{{$customer->desc}}" readonly>
        </div>

        <a href="{{route('admin.customers.index')}}"><button class="btn btn-dark">بازگشت</button></a>

    </div>

@endsection
