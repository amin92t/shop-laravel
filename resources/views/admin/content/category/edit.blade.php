@extends('admin.layouts.master')



@section('head-tag')
<title>ویرایش دسته بندی</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">خانه</a></li>
        <li class="breadcrumb-item"><a href="#"></a></li>
        <li class="breadcrumb-item"><a href="#">بخش محتوی</a></li>
        <li class="breadcrumb-item active" aria-current="page">ویرایش دسته بندی</li>
    </ol>
</nav>


<section class="row">

    <section class="col-12 main-body-container">

        <section class="main-body-container-head">

            <h5>
                ویرایش دسته بندی
            </h5>


        </section>
        <section class="d-flex justify-content-between align-items-center mb-3 py-4 border-bottom">
            <a href="{{route('admin.content.category.index')}}" class="btn btn-info btn-sm">بازگشت</a>
        </section>
        <section>

            <form action="{{route('admin.content.category.update', $postCategory->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <section class="row">

                    <section class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="">نام دسته</label>
                            <input class="form-control form-control-sm" type="text" name="name" value="{{old('name', $postCategory->name)}}">
                        </div>
                        @error('name')
                            <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    {{$message}}
                                </strong>
                            </span>
                        @enderror
                    </section>

                    <section class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="">نام دسته</label>
                            <input class="form-control form-control-sm" type="text" name="tags" value="{{old('tags', $postCategory->tags)}}">
                            @error('tags')
                            <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    {{$message}}
                                </strong>
                            </span>
                        @enderror
                        </div>
                    </section>


                    <section class="col-12 col-md-6">

                        <div class="form-group">
                            <label for="">وضعیت</label>
                            <select class="form-control form-control-sm" name="status" id="">
                                <option value="0" @if (old('status', $postCategory->status) == 0)
                                 selected
                                @endif>غیر فعال</option>
                                <option value="1" @if (old('status', $postCategory->status) == 1)
                                selected
                               @endif>فعال</option>
                            </select>
                        </div>

                    </section>


                    <section class="col-12 col-md-6">

                        <div class="form-group">
                            <label for="">تصویر</label>
                            <input  class="form-control form-control-sm" type="file" name="image" id="">
                        </div>
                        @error('image')
                        <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                            <strong>
                                {{$message}}
                            </strong>
                        </span>
                    @enderror
                    </section>


                    <section class="col-12">
                        <div class="form-group">
                            <label for="">متن</label>
                            <textarea class="form-control form-control-sm" type="text" name="description" rows="5">
                                {{old('description', $postCategory->description)}}
                            </textarea>
                        </div>
                        @error('description')
                        <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                            <strong>
                                {{$message}}
                            </strong>
                        </span>
                    @enderror
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