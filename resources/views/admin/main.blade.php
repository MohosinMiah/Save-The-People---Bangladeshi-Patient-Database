{{--  Header Included  --}}
@include('/admin/includes/header')

    <body>
        <div class="se-pre-con"></div>
        <div class="wrapper">

    {{--  Sidebar Included  --}}
    @include('/admin/includes/sidebar')

            <!-- Page Content Holder -->
           @yield('content')
        </div>

    {{--  Footer Included  --}}
    @include('/admin/includes/footer')