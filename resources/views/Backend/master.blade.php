


@include('Backend.layouts.header')
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('Backend.layouts.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            
            <!-- Main Content -->
            <div id="content">
                @include('Backend.layouts.topbar')

                @yield("main-content")
                
            </div>
            <!-- End of Main Content -->

@include('Backend.layouts.footer')
@include('Backend.layouts.model')
@include('Backend.layouts.script')


      
