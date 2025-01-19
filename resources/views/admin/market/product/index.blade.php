@extends('admin.layouts.master')

@section(section: 'head-tag')
<title>محصولات</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">خانه</a></li>
        <li class="breadcrumb-item"><a href="#"></a></li>
        <li class="breadcrumb-item"><a href="#">بخش فروش</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#">محصولات</a></li>
        
    </ol>
</nav>


<section class="row">

    <section class="col-12 main-body-container">

        <section class="main-body-container-head">

            <h5>
                محصولات
            </h5>


        </section>
        <section class="d-flex justify-content-between align-items-center mb-3 border-bottom">
            <a href="{{route('admin.market.product.create')}}" class="btn btn-info btn-sm">ایجاد کالای جدید </a>
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
                                <th>قیمت</th>
                                <th>وزن</th>
                                <th>دسته</th>
                                <th>فرم</th>
                                <th>تنظیمات</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <th>آیفون 12</th>
                                <th><img class="max-height-2" src=""></th>
                                <th>139000تومان</th>
                                <th>1 کیلو</th>
                                <th>پرداخت شده</th>
                                <th>در حال ارسال</th>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-success btn-sm btn-block dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-tools"></i>عملیات
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a href="#" class="dropdown-item text-right"><i class="fa fa-image">گالری</i></a>
                                            <a href="#" class="dropdown-item text-right"><i class="fa fa-list-ul">فرم کالا</i></a>
                                            <a href="#" class="dropdown-item text-right"><i class="fa fa-edit">ویرایش</i></a>
                                            <form action="" method="post">
                                                <button class="dropdown-item text-right">
                                                    <i class="fa fa-window-close"></i>حذف
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                   
                                </td>
                            </tr>
                        </tbody>

                </table>

        </section>

    </section>

</section>



@endsection