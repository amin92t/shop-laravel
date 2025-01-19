
@extends('admin.layouts.master')



@section('head-tag')
<title>ایجاد کوپن تخفیف</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">خانه</a></li>
        <li class="breadcrumb-item"><a href="#"></a></li>
        <li class="breadcrumb-item"><a href="#">بخش فروش</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#">ایجاد کوپن تخفیف</a></li>
    </ol>
</nav>


<section class="row">

    <section class="col-12 main-body-container">

        <section class="main-body-container-head">

            <h5>
                ایجاد کوپن
            </h5>


        </section>
        <section class="d-flex justify-content-between align-items-center mb-3 py-4 border-bottom">
            <a href="{{route('admin.market.discount.copan')}}" class="btn btn-info btn-sm">بازگشت</a>
        </section>
        <section>

            <form action="" method="">

                <section class="row">

                    <section class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="">کد کوپن</label>
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </section>


                    <section class="col-12 col-md-6">

                        <div class="form-group">
                            <label for="">نوع کوپن</label>
                            <select class="form-control form-control-sm" name="" id="">
                                <option value="">عمومی</option>
                                <option value="">خصوصی</option>

                            </select>
                        </div>

                    </section>

                    
                    <section class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="">درصد تخفیف</label>
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </section>

                    
                    <section class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="">سقف تخفیف</label>
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </section>

                    
                    <section class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="">عنوان مناسبت</label>
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </section>

                    
                    <section class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="">تاریخ شروع</label>
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </section>

                    
                    <section class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="">تاریخ پایان</label>
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </section>

                </section>
                <section>
                    <button class="btn btn-primary btn-sm">ثبت</button>
                </section>

            </form>


        </section>

    </section>

</section>



@endsection

