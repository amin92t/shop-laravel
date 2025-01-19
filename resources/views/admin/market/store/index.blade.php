@extends('admin.layouts.master')

@section('head-tag')
<title>انبار</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">خانه</a></li>
        <li class="breadcrumb-item"><a href="#"></a></li>
        <li class="breadcrumb-item"><a href="#">بخش فروش</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#">انبار</a></li>
        
    </ol>
</nav>


<section class="row">

    <section class="col-12 main-body-container">

        <section class="main-body-container-head">

            <h5>
                انبار
            </h5>


        </section>
        <section class="d-flex justify-content-between align-items-center mb-3 border-bottom">
            <a href="#" class="btn btn-info btn-sm disabled">ایجاد انبار جدید</a>
            <div>
                <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
            </div>
        </section>
        <section class="table-responsive">

                <table class="table table-striped table-hover h-150">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>نام کالا</th>
                                <th>تصویر کالا</th>
                                <th>موجودی</th>
                                <th>ورودی انبار</th>
                                <th>خروجی انبار</th>
                                <th>تنظیمات</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>LED سامسونگ</td>
                                <td><img src="" class="max-width-2"></td>
                                <td>16</td>
                                <td>28</td>
                                <td>46</td>
                                <td>
                                    
                                        <a href="{{route('admin.market.store.add-to-store')}}" class="btn btn-info btn-sm " >
                                            <i class="fa fa-edit"></i>افزایش موجودی
                                        </a>
                                        <button type="submit" class="btn btn-warning btn-sm " >
                                            <i class="fa fa-trash"></i>اصلاح موجودی
                                        </button>
                                        
                                   
                                </td>
                            </tr>
                        </tbody>

                </table>

        </section>

    </section>

</section>



@endsection