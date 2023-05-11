@include("Frontend.layouts.header")
@include("Frontend.layouts.navbar")

<main>
    @yield('main-content')
</main>

@include("Frontend.layouts.footer")
@include("Frontend.layouts.model")
@include("Frontend.layouts.script")