@extends('admin.layouts.master')

@section('head-tag')
<title>روش های ارسال</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">خانه</a></li>
        <li class="breadcrumb-item"><a href="#"></a></li>
        <li class="breadcrumb-item"><a href="#">بخش فروش</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#">روش های ارسال</a></li>
        
    </ol>
</nav>


<section class="row">

    <section class="col-12 main-body-container">

        <section class="main-body-container-head">

            <h5>
                 روش های ارسال
            </h5>


        </section>
        <section class="d-flex justify-content-between align-items-center mb-3 border-bottom">
            <a href="{{route('admin.market.delivery.create')}}" class="btn btn-info btn-sm">ایجاد روش ارسال جدید</a>
            <div>
                <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
            </div>
        </section>
        <section class="table-responsive">

                <table class="table table-striped table-hover">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>نام روش ارسال</th>
                                <th>هزیه ارسال</th>
                                <th>رمان ارسال</th>
                                <th>تنظیمات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>پست پیشتاز</td>
                                <td>27500</td>
                                <td>2 الی 3 روز کاری</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">
                                        <i class="fa fa-edit"></i> ویرایش 
                                    </a>
                                    <button class="btn btn-danger btn-sm" type="submit">
                                        <i class="fa fa-trash-alt"></i>حذف
                                    </button>
                                </td>
                            </tr>
                        </tbody>

                </table>

        </section>

    </section>

</section>



@endsection