@extends('admin.master')
@section('maincontent')
    <div class="col-md-3"></div>
    <div class="col-md-9 my-5">
        @foreach($errors->all() as $error)
            <ul>
                <li class="text-danger">{{$error}}</li>
            </ul>
        @endforeach
        <form role="form" method="post" action="{{route('admin.factors.store')}}">
            @csrf


            <div class="form-group">
                <label>انتخاب مشتری</label>
                <select class="form-control" name="customer_id" id="customer_id">
                    <option value="">انتخاب مشتری</option>
                    @foreach($customers as $customer)
                        <option value="{{$customer->id}}">{{$customer->name}}</option>
                    @endforeach
                </select>
            </div>

                <div class="form-group">
                    <label>ثبت مشتری جدید</label>
                    <input  class="form-control" name="name" placeholder="نام  را وارد کنید">
                </div>

            <div class="form-group">
                <label> کد ملی</label>
                <input  class="form-control" name="national_code" placeholder="کد ملی را وارد کنید">
            </div>

            <div class="form-group">
                <label>نوع مشتری</label>
                <input  class="form-control" name="type" placeholder="نوع مشتری را وارد کنید">
            </div>

            <div class="form-group">
                <label>شماره موبایل </label>
                <input  class="form-control" name="mobile" placeholder="شماره موبایل را وارد کنید">
            </div>

            <div class="form-group">
                <label>شماره تلفن</label>
                <input  class="form-control" name="phone" placeholder="شماره تلفن را وارد کنید">
            </div>

            <div class="form-group">
                <label>کشور</label>
                <input  class="form-control" name="state" placeholder="کشور را وارد کنید">
            </div>

            <div class="form-group">
                <label>شهر</label>
                <input  class="form-control" name="city" placeholder="شهر را وارد کنید">
            </div>

            <div class="form-group">
                <label>آدرس </label>
                <input  class="form-control" name="address" placeholder="آدرس را وارد کنید">
            </div>

            <div class="form-group">
                <label>کد پستی </label>
                <input  class="form-control" name="zipcode" placeholder="کد پستی را وارد کنید">
            </div>


            <div class="form-group">
                <label>توضیحات </label>
                <input  class="form-control" name="desc" placeholder="توضیحات">
            </div>


                <button type="submit" class="btn btn-primary">ثبت مشتری</button>

        </form>
    </div>

@endsection
