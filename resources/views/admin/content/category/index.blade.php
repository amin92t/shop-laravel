@extends('admin.layouts.master')

@section('head-tag')
<title>دسته بندی ها</title>
@endsection

@section('content')
{{-- {{dd($postCategories)}} --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">خانه</a></li>
        <li class="breadcrumb-item"><a href="#"></a></li>
        <li class="breadcrumb-item"><a href="#">بخش محتوی</a></li>
        <li class="breadcrumb-item active" aria-current="page">دسته بندی</li>
    </ol>
</nav>


<section class="row">

    <section class="col-12 main-body-container">

        <section class="main-body-container-head">

            <h5>
                دسته بندی
            </h5>


        </section>
        <section class="d-flex justify-content-between align-items-center mb-3 border-bottom">
            <a href="{{route('admin.content.category.create')}}" class="btn btn-info btn-sm">ایجاد دسته بندی</a>
            <div>
                <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
            </div>
        </section>
        <section class="table-responsive">

                <table class="table table-striped table-hover">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>نام دسته بندی</th>
                                <th>توضیحات</th>
                                <th>slug</th>
                                <th>عکس</th>
                                <th>تگ ها</th>
                                <th>وضعیت</th>
                                <th>تنظیمات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($postCategories as $postCategory)
                            <tr>
                                <th>{{$postCategory->id}}</th>
                                <td>{{$postCategory->name}}</td>
                                <td>{{$postCategory->description}}</td>
                                <td>{{$postCategory->slug}}</td>
                                <td>
                                    <img src="{{asset($postCategory->image)}}" >
                                </td>
                                <td>{{$postCategory->tags}}</td>
                                <td>
                                    <label>
                                        <input id="{{$postCategory->id}}" data-url="{{route('admin.content.category.status', $postCategory->id)}}" onchange="changeStatus({{$postCategory->id}})" type="checkbox" @if($postCategory->status == 1) checked @endif >
                                    </label>
                                </td>
                                <td>
                                    <a href="{{route('admin.content.category.edit', $postCategory->id)}}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-edit"></i> ویرایش 
                                    </a>
                                    <form class="d-inline" action="{{ route('admin.content.category.destroy', $postCategory->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm delete" type="submit">
                                            <i class="fa fa-trash-alt"></i> حذف
                                        </button>
                                    </form>
                                   
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>

                </table>

        </section>

    </section>

</section>



@endsection

@section('script')

<script>

    function changeStatus($id){
        // alert("Hi");
        var elem = $("#" + $id);
        var url = element.attr('data-url');
        var elementValue = !elem.prop('checked');

        $.ajax({

            url: url,
            type: "GET",
            success: function(response){
                if(response.status){
                    if(response.checked){
                        elem.prop('checked', true);
                    }else{
                        elem.prop('checked', false);
                    }
                }else{
                    elem.prop('checked', elementValue);
                }
            }

        })
    }

</script>

@endsection