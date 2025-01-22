@extends('admin.layouts.master')

@section('head-tag')
<title>دسته بندی ها</title>
@endsection

@section('content')
{{-- {{dd($postCategories)}} --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">خانه</a></li>
        <li class="breadcrumb-item"><a href="#"></a></li>
        <li class="breadcrumb-item"><a href="#">بخش محتوی</a></li>
        <li class="breadcrumb-item active" aria-current="page">دسته بندی</li>
    </ol>
</nav>


<section class="row">

    <section class="col-12 main-body-container">

        <section class="main-body-container-head">

            <h5>
                دسته بندی
            </h5>


        </section>
        <section class="d-flex justify-content-between align-items-center mb-3 border-bottom">
            <a href="{{route('admin.content.category.create')}}" class="btn btn-info btn-sm">ایجاد دسته بندی</a>
            <div>
                <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
            </div>
        </section>
        <section class="table-responsive">

                <table class="table table-striped table-hover">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>نام دسته بندی</th>
                                <th>توضیحات</th>
                                <th>slug</th>
                                <th>عکس</th>
                                <th>تگ ها</th>
                                <th>تنظیمات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($postCategories as $postCategory)
                            <tr>
                                <th>{{$postCategory->id}}</th>
                                <td>{{$postCategory->name}}</td>
                                <td>{{$postCategory->description}}</td>
                                <td>{{$postCategory->slug}}</td>
                                <td>
                                    <img src="{{asset($postCategory->image)}}" >
                                </td>
                                <td>{{$postCategory->tags}}</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">
                                        <i class="fa fa-edit"></i> ویرایش 
                                    </a>
                                    <button class="btn btn-danger btn-sm" type="submit">
                                        <i class="fa fa-trash-alt"></i>حذف
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>

                </table>

        </section>

    </section>

</section>



@endsection