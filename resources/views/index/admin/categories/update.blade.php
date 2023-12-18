@extends('template.admin.layout')
@section('content')
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between">
            <h5 class="mb-0">ویرایش دسته بندی</h5>

            <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html">داکتریس</a></li>
                    <li class="breadcrumb-item"><a href="doctors.html">پزشکان</a></li>
                    <li class="breadcrumb-item active" aria-current="page">افزودن پزشک</li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12 ">
                <div class="card border-0 p-4 rounded shadow">
                    <form action="{{route('categories.update',$category->id)}}" method="post" >
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label"> نام</label>
                                    <input name="name" id="name" type="text" class="form-control" value="{{$category->name}}">
                                </div>
                            </div><!--end col-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label"> عنوان</label>
                                    <input name="title" id="name" type="text" class="form-control" value="{{$category->title}}">
                                </div>
                            </div><!--end col-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">دسته بندی والد</label>
                                    <select name="parent_id" class="form-control select2input">
                                        <option disabled selected>انتخاب کنید</option>
                                        @foreach($categories as $row)
                                            <option value="{{$row->id}}">{{$row->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <button type="submit" class="btn btn-primary">ویرایش دسته بندی</button>
                    </form>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>


@endsection
