@extends('admin.layouts.master')



@section('head-tag')
<title>ایجاد دسته بندی</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">خانه</a></li>
        <li class="breadcrumb-item"><a href="#"></a></li>
        <li class="breadcrumb-item"><a href="#">بخش محتوی</a></li>
        <li class="breadcrumb-item active" aria-current="page">ایجاد دسته بندی</li>
    </ol>
</nav>


<section class="row">

    <section class="col-12 main-body-container">

        <section class="main-body-container-head">

            <h5>
                ایجاد دسته بندی
            </h5>


        </section>
        <section class="d-flex justify-content-between align-items-center mb-3 py-4 border-bottom">
            <a href="{{route('admin.content.category.index')}}" class="btn btn-info btn-sm">بازگشت</a>
        </section>
        <section>

            <form id="form" action="{{route('admin.content.category.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <section class="row">

                    <section class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="">نام دسته</label>
                            <input class="form-control form-control-sm" type="text" name="name" value="{{old('name')}}">
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
                            <label for="">تگ ها</label>
                            <input type="hidden" class="form-control form-control-sm" id="tags" type="text" name="tags" value="{{old('tags')}}">
                            <select class="select2 form-control form-control-sm" id="select_tags" multiple>


                            </select>
                          
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
                                <option value="0" @if (old('status') == 0)
                                 selected
                                @endif>غیر فعال</option>
                                <option value="1" @if (old('status') == 1)
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
                                {{old('description')}}
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


@section('script')


<script>

$(document).ready(function(){
    var tags_input = $("#tags");
    var select_tags = $("#select_tags");
    var default_tags = tags_input.val();
    var default_data = null;


    if(tags_input.val() !== null && tags_input.val().length > 0){
        default_data = default_tags.split(',');
    }

    
    select_tags.select2({
        placeholder: "لطفا تگ ها را وارد کنید",
        tags: true,
        data: default_data
    })

    select_tags.children('option').attr('selected', true).trigger('change');

    $("#form").submit(function(event){
        if(select_tags.val() !== null && select_tags.val().length > 0){
            var selectedSource = select_tags.val().join(',');
            tags_input.val(selectedSource);
        }
    })
})



</script>

@endsection