@extends('admin.master')
@section('maincontent')
    <div class="col-md-3"></div>
<div class="col-md-9 mt-5">
    <table class="table table-bordered">
        <tr>
            <th style="width: 10px">#</th>
            <th>نام</th>
            <th>کد ملی</th>
            <th>نوع</th>
            <th>موبایل</th>
            <th>تلفن</th>
            <th>کشور</th>
            <th>شهر</th>
            <th>آدرس</th>
            <th>کد پستی</th>
            <th>توضیحات</th>
            <th>نمایش</th>
            <th>حذف</th>
            <th>ویرایش</th>

        </tr>
        @foreach($customers as $customer)
        <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->national_code}}</td>
            <td>{{$customer->type}}</td>
            <td>{{$customer->mobile}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->state}}</td>
            <td>{{$customer->city}}</td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->zipcode}}</td>
            <td>{{$customer->desc}}</td>
            <td><a href="{{route('admin.customers.show',['customer'=>$customer->id])}}">@</a></td>
            <form method="post" action="{{route('admin.customers.destroy',['customer'=>$customer->id])}}">
                @csrf
                @method('delete')
            <td> <button type="submit">X</button> </td>
            </form>
            <td><a href="{{route('admin.customers.edit',['customer'=>$customer->id])}}">#</a></td>

        </tr>
        @endforeach
    </table>
</div>

@endsection
