@extends('admin.layouts.master')



@section('head-tag')
<title>ایجاد محصول جدید</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">خانه</a></li>
        <li class="breadcrumb-item"><a href="#"></a></li>
        <li class="breadcrumb-item"><a href="#">بخش فروش</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#">ایجاد کالا</a></li>
    </ol>
</nav>


<section class="row">

    <section class="col-12 main-body-container">

        <section class="main-body-container-head">

            <h5>
                ایجاد کالا
            </h5>


        </section>
        <section class="d-flex justify-content-between align-items-center mb-3 py-4 border-bottom">
            <a href="{{route('admin.market.product.index')}}" class="btn btn-info btn-sm">بازگشت</a>
        </section>
        <section>

            <form action="" method="">

                <section class="row">

                    <section class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="">نام کالا</label>
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </section>

                    <section class="col-12 col-md-6">

                        <div class="form-group">
                            <label for="">نام دسته </label>
                            <select class="form-control form-control-sm" name="" id="">
                                <option value="">1</option>
                                <option value="">2</option>

                            </select>
                        </div>

                    </section>

                    <section class="col-12 col-md-6">

                        <div class="form-group">
                            <label for="">فرم کالا</label>
                            <select class="form-control form-control-sm" name="" id="">
                                <option value="">1</option>
                                <option value="">2</option>

                            </select>
                        </div>

                    </section>
                    <section class="col-12 col-md-6">

                        <div class="form-group">
                            <label for="">تصویر کالا</label>
                            <input  class="form-control form-control-sm" type="file" name="" id="">
                        </div>

                    </section>

                    
                    <section class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="">قیمت کالا</label>
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </section>

                    
                    <section class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="">وزن کالا</label>
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </section>
                </section>

                <section class="col-12 border-top border-bottom py-2 m-0">

                    <div class="row">

                        <section class="col-6 col-md-3">
                            <div class="form-group">
                                <input placeholder="ویژگی" type="text" name="" id="" class="form-control form-control-sm">
                            </div>
                        </section>

                        <sشection class="col-6 col-md-3">
                            <div class="form-group">
                                <input placeholder="مقدار" type="text" name="" id="" class="form-control form-control-sm">
                            </div>
                        </sشection>

                    </div>

                </section>


                <section>
                    <button class="btn btn-primary btn-sm">ثبت</button>
                </section>

            </form>


        </section>

    </section>

</section>



@endsection