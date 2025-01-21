 <!-- Aside Menu -->
 <aside id="sidebar" class="sidebar">


<section class="sidebar-container">
  <!-- Wrapper aside -->
  <section class="sidebar-wrapper">
    <!-- Home link in aside -->
    <a href="{{route('admin.index')}}" class="sidebar-link">
      <i class="fas fa-home"></i>
      <span>خانه</span>
    </a>

    <!-- Sell part -->
    <section class="sidebar-part-title">بخش فروش</section>

    <section class="sidebar-group-link">
      <section class="sidebar-dropdown-toggle">
        <i class="fas fa-chart-bar icon"></i>
        <span>ویترین</span>
        <i class="fas fa-angle-left angle"></i>
      </section>
      <section class="sidebar-dropdown">
                    <a href="{{route('admin.market.category.index')}}">دسته بندی</a>
                    <a href="{{route('admin.market.property.index')}}">فرم کالا</a>
                    <a href="{{route('admin.market.brand.index')}}">برندها</a>
                    <a href="{{route('admin.market.product.index')}}">کالاها</a>
                    <a href="{{route('admin.market.store.index')}}">انبار</a>
                    <a href="{{route('admin.market.comment.index')}}">نظرات</a>
      </section>
    </section>


    <!-- Orders part  -->
    <section class="sidebar-group-link">
      <section class="sidebar-dropdown-toggle">
        <i class="fas fa-chart-bar icon"></i>
        <span>سفارشات</span>
        <i class="fas fa-angle-left angle"></i>
      </section>
      <section class="sidebar-dropdown">
                     <a href="#"> جدید</a>
                    <a href="#">در حال ارسال</a>
                    <a href="#">پرداخت نشده</a>
                    <a href="#">باطل شده</a>
                    <a href="#">مرجوعی</a>
                    <a href="{{route('admin.market.order.index')}}">تمام سفارشات</a>
      </section>
    </section>

    <!-- Pay part -->
    <section class="sidebar-group-link">
      <section class="sidebar-dropdown-toggle">
        <i class="fas fa-chart-bar icon"></i>
        <span>پرداخت ها</span>
        <i class="fas fa-angle-left angle"></i>
      </section>
      <section class="sidebar-dropdown">
                    <a href="{{route('admin.market.payment.index')}}">تمام پرداخت ها</a>
                    <a href="#">پرداخت های آنلاین</a>
                    <a href="#">پرداخت های آفلاین</a>
                    <a href="#">پرداخت در محل</a>
      </section>
    </section>

     <!-- Off part -->
     <section class="sidebar-group-link">
      <section class="sidebar-dropdown-toggle">
        <i class="fas fa-chart-bar icon"></i>
        <span>تخفیف ها</span>
        <i class="fas fa-angle-left angle"></i>
      </section>
      <section class="sidebar-dropdown">
                    <a href="{{route('admin.market.discount.copan')}}">کوپن تخفیف</a>
                    <a href="{{route('admin.market.discount.commonDiscount')}}">تخفیف عمومی</a>
                    <a href="{{route('admin.market.discount.amazingsale')}}">فروش شگفت انگیز</a>
      </section>
    </section>

    <a href="{{route('admin.market.delivery.index')}}" class="sidebar-link">
      <i class="fas fa-bars"></i>
      <span>روش های ارسال</span>
    </a>


    <!-- Content part in aside -->
    <section class="sidebar-part-title">بخش محتوی</section>

    <a href="{{route('admin.content.category.index')}}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>دسته بندی</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>پست ها</span>
            </a>
            <a href="{{route('admin.content.comment.index')}}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>نظرات</span>
            </a>
            <a href="{{route('admin.content.menu.index')}}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>منو</span>
            </a>
            <a href="{{route('admin.content.faq.index')}}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>سوالات متداول</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>پیج ساز</span>
            </a>


    <!-- Category in aside -->
    <a href="#" class="sidebar-link">
      <i class="fas fa-bars"></i>
      <span>دسته  ها</span>
    </a>

    <!-- Posts Category in aside -->
    <section class="sidebar-group-link">
      <section class="sidebar-dropdown-toggle">
        <i class="fas fa-chart-bar icon"></i>
        <span>نوشته ها</span>
        <i class="fas fa-angle-left angle"></i>
      </section>
      <section class="sidebar-dropdown">
        <a href="#">مقالات</a>
        <a href="#">پست ها</a>
        <a href="#">دوره ها</a>
      </section>
    </section>

    <!-- Users in aside -->
    <section class="sidebar-part-title">بخش کاربران</section>

    <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>کاربران ادمین</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>مشتریان</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>سطوح دسترسی</span>
            </a>

      <!-- Ticket Section -->
    <section class="sidebar-part-title">تیکت ها</section>
    <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>تیکت های جدید</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>تیکت های باز</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>تیکت های بسته</span>
            </a>


    <!-- <section class="sidebar-group-link">
      <section class="sidebar-dropdown-toggle">
        <i class="fas fa-chart-bar icon"></i>
        <span> کاربران</span>
        <i class="fas fa-angle-left angle"></i>
      </section>
      <section class="sidebar-dropdown">
        <a href="#">ادمین</a>
        <a href="#">مدرس ها</a>
        <a href="#">دانشجو</a>
      </section>
    </section> -->

    <section class="sidebar-part-title">اطلاع رسانی</section>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>اعلامیه ایمیلی</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>اعلامیه پیامکی</span>
            </a>


    <!-- Setting in aside -->
    <section class="sidebar-part-title">تنظیمات</section>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>تنظیمات</span>
            </a>

  </section>
</section>

</aside>
