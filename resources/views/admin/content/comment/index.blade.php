@extends('admin.layouts.master')

@section('head-tag')
<title>نظرها</title>
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
                 نظرها
            </h5>


        </section>
        <section class="d-flex justify-content-between align-items-center mb-3 py-3 border-bottom">
            <a href="#" class="btn btn-info btn-sm disabled">ایجاد نظر</a>
            
        </section>
        <section class="table-responsive">

                <table class="table table-striped table-hover">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>کد کاربر</th>
                                <th>نویسنده نظر</th>
                                <th>کد کالا</th>
                                <th>کالا</th>
                                <th>وضعیت</th>
                                <th>تنظیمات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>132465</td>
                                <td>امین عطائی</td>
                                <td>9874534564</td>
                                <td>آیفون 13</td>
                                <td>در انتظار تایید</td>
                                <td>
                                    <a href="{{route('admin.market.comment.show')}}" class="btn btn-info btn-sm">
                                        <i class="fa fa-eye"></i> نمایش 
                                    </a>
                                    <button class="btn btn-success btn-sm" type="submit">
                                        <i class="fa fa-check"></i>تایید
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>65431</td>
                                <td>امین عطائی</td>
                                <td>313646131</td>
                                <td>نوت 13</td>
                                <td>تایید شده</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm">
                                        <i class="fa fa-eye"></i> نمایش 
                                    </a>
                                    <button class="btn btn-warning btn-sm" type="submit">
                                        <i class="fa fa-clock"></i>عدم تایید
                                    </button>
                                </td>
                            </tr>
                        </tbody>

                </table>

        </section>

    </section>

</section>



@endsection