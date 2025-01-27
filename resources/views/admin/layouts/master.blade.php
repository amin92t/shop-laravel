<!DOCTYPE html>
<html lang="en">

<head>
 @include('admin.layouts.head-tag')
 @yield('head-tag')
</head>
<!-- Direction for persian  -->

<body dir="rtl">
  <!-- Header  -->
    @include('admin.layouts.header')

<!-- Body -->
  <section class="body-container">

     @include( 'admin.layouts.sidebar')


    <!-- Body -->
    <section id="main-body" class="main-body">

    @yield('content')
    </section>

  </section>


  @include( 'admin.layouts.scripts')
  @yield('script')


  <section class="toast-wrapper flex-row-reverse">
    @include('admin.alerts.toast.success')
    @include('admin.alerts.toast.error')
  </section>
  
  @include('admin.alerts.sweetalert.success')
  @include('admin.alerts.sweetalert.error')

</body>

</html>