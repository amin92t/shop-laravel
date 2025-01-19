@extends('admin.layouts.master')

@section('head-tag')
<title>مشاهده نظر</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">خانه</a></li>
        <li class="breadcrumb-item"><a href="#"></a></li>
        <li class="breadcrumb-item"><a href="#">بخش فروش</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#">نظرها</a></li>

    </ol>
</nav>


<section class="row">

    <section class="col-12 main-body-container">

        <section class="main-body-container-head">

            <h5>
                مشاهده نظر
            </h5>


        </section>
        <section class="d-flex justify-content-between align-items-center mb-3 py-3 border-bottom">
            <a href="{{route('admin.market.comment.index')}}" class="btn btn-info btn-sm">بازگشت</a>
        </section>

        <section class="card mb-3">

            <section class="card-header text-white bg-custom-yellow">
                565415645 - امین عطائی
            </section>
            <section class="card-body">
                <h5 class="card-title">مشخصات کالا - آیفون 13</h5>
                <p>یک موبایل کارآمد و بسیار توپ</p>
            </section>

        </section>

        <section>

            <form action="" method="">

                <section class="row">

                    <section class="col-12">
                        <div class="form-group">
                            <label for="">پاسخ ادمین</label>
                            <textarea class="form-control form-control-sm" rows="4">
                                </textarea>
                                
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