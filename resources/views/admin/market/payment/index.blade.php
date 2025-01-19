@extends('admin.layouts.master')

@section('head-tag')
<title>پرداخت ها</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">خانه</a></li>
        <li class="breadcrumb-item"><a href="#"></a></li>
        <li class="breadcrumb-item"><a href="#">بخش فروش</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#">پرداخت ها</a></li>
        
    </ol>
</nav>


<section class="row">

    <section class="col-12 main-body-container">

        <section class="main-body-container-head">

            <h5>
                پرداخت ها
            </h5>


        </section>
        <section class="d-flex justify-content-between align-items-center mb-3 border-bottom">
            <a href="#" class="btn btn-info btn-sm disabled">پرداخت ها </a>
            <div>
                <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
            </div>
        </section>
        <section class="table-responsive">

                <table class="table table-striped table-hover h-150">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>کد تراکنش</th>
                                <th>بانک</th>
                                <th>پرداخت کننده</th>
                                <th>وضعیت پرداخت</th>
                                <th>تنظیمات</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>12345</td>
                                <td>سامان</td>
                                <td>امین عطائی</td>
                                <td>موفق</td>
                                <td>
                                    
                                        <a href="#" class="btn btn-info btn-sm " >
                                            <i class="fa fa-tools"></i>مشاهده
                                        </a>
                                        <a href="#" class="btn btn-warning btn-sm " >
                                            <i class="fa fa-tools"></i>باطل کردن
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm " >
                                            <i class="fa fa-tools"></i>برگرداندن
                                        </a>
                                        
                                   
                                </td>
                            </tr>
                        </tbody>

                </table>

        </section>

    </section>

</section>



@endsection