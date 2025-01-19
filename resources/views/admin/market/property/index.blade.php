@extends('admin.layouts.master')

@section('head-tag')
<title>فرم کالا</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">خانه</a></li>
        <li class="breadcrumb-item"><a href="#"></a></li>
        <li class="breadcrumb-item"><a href="#">بخش فروش</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#">فرم کالا</a></li>
        
    </ol>
</nav>


<section class="row">

    <section class="col-12 main-body-container">

        <section class="main-body-container-head">

            <h5>
                 فرم کالا
            </h5>


        </section>
        <section class="d-flex justify-content-between align-items-center mb-3 border-bottom">
            <a href="{{route('admin.market.property.create')}}" class="btn btn-info btn-sm">ایجاد فرم جدید</a>
            <div>
                <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
            </div>
        </section>
        <section class="table-responsive">

                <table class="table table-striped table-hover h-150">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>عنوان فرم </th>
                                <th>فرم والد</th>
                                <th>تنظیمات</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>موبایل</td>
                                <td>کالای دیجیتال</td>
                                <td>موفق</td>
                                <td>
                                    
                                        <a href="#" class="btn btn-info btn-sm " >
                                            <i class="fa fa-edit"></i>ویژگی ها
                                        </a>
                                        <a href="#" class="btn btn-warning btn-sm " >
                                            <i class="fa fa-edit"></i>ویرایش
                                        </a>
                                        <button type="submit" class="btn btn-danger btn-sm " >
                                            <i class="fa fa-trash"></i>حذف
                                        </button>
                                        
                                   
                                </td>
                            </tr>
                        </tbody>

                </table>

        </section>

    </section>

</section>



@endsection