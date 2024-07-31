@extends('admin.master')
@section('maincontent')
    <div class="col-md-3"></div>
<div class="col-md-9 mt-5">
    <table class="table table-bordered">
        <tr>
            <th style="width: 10px">#</th>
            <th>مشتری</th>
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
        @foreach($factors as $factor)
        <tr>
            <td>{{$factor->id}}</td>
            <td>{{$factor->customer->name}}</td>
            <td>{{$factor->name}}</td>
            <td>{{$factor->national_code}}</td>
            <td>{{$factor->type}}</td>
            <td>{{$factor->mobile}}</td>
            <td>{{$factor->phone}}</td>
            <td>{{$factor->state}}</td>
            <td>{{$factor->city}}</td>
            <td>{{$factor->address}}</td>
            <td>{{$factor->zipcode}}</td>
            <td>{{$factor->desc}}</td>
            <td><a href="{{route('admin.factors.show',['factor'=>$factor->id])}}">@</a></td>
            <form method="post" action="{{route('admin.factors.destroy',['factor'=>$factor->id])}}">
                @csrf
                @method('delete')
            <td> <button type="submit">X</button> </td>
            </form>
            <td><a href="{{route('admin.factors.edit',['factor'=>$factor->id])}}">#</a></td>

        </tr>
        @endforeach
    </table>
</div>

@endsection
