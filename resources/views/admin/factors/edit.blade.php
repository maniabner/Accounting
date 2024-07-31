@extends('admin.master')
@section('maincontent')
    <div class="col-md-2"></div>
    <div class="col-md-10 my-5">
        @foreach($errors->all() as $error)
            <ul>
                <li class="text-danger">{{$error}}</li>
            </ul>
        @endforeach
        <form role="form" method="post" action="{{route('admin.customers.update',['customer'=>$customer->id])}}">
            @method('put')
            @csrf
                <div class="form-group">
                    <label>نام مشتری</label>
                    <input  class="form-control" name="name" value="{{$customer->name}}">
                </div>

            <div class="form-group">
                <label>کد ملی</label>
                <input  class="form-control" name="national_code" value="{{$customer->national_code}}">
            </div>

            <div class="form-group">
                <label>نوع مشتری</label>
                <input  class="form-control" name="type" value="{{$customer->type}}">
            </div>

            <div class="form-group">
                <label>شماره موبایل</label>
                <input  class="form-control" name="mobile" value="{{$customer->mobile}}">
            </div>

            <div class="form-group">
                <label> شماره تلفن</label>
                <input  class="form-control" name="phone" value="{{$customer->phone}}">
            </div>

            <div class="form-group">
                <label> کشور</label>
                <input  class="form-control" name="state" value="{{$customer->state}}">
            </div>

            <div class="form-group">
                <label> شهر</label>
                <input  class="form-control" name="city" value="{{$customer->city}}">
            </div>

            <div class="form-group">
                <label> آدرس</label>
                <input  class="form-control" name="address" value="{{$customer->address}}">
            </div>

            <div class="form-group">
                <label>کد پستی </label>
                <input  class="form-control" name="zipcode" value="{{$customer->zipcode}}">
            </div>

            <div class="form-group">
                <label>توضیحات</label>
                <input  class="form-control" name="desc" value="{{$customer->desc}}">
            </div>
                <button type="submit" class="btn btn-primary">ویرایش مشخصات مشتری </button>
        </form>

    </div>

@endsection
