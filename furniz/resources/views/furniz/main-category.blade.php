<!DOCTYPE html>
<html lang="en">

<head>
    @include('furniz.elements.head')
</head>

<body>

    @include('furniz.elements.loader')
    @include('furniz.elements.header')
    @include('furniz.elements.mobile-menu')
    @include('furniz.elements.breadcrumb')

    @yield('content')

    @include('furniz.elements.footer')
    @include('furniz.elements.quick-view-modal-box')
    @include('furniz.elements.location-modal')
    @include('furniz.elements.deal-modal-box')
    @include('furniz.elements.add-to-cart')
    @include('furniz.elements.tap-to-top')
    @include('furniz.elements.bg-overlay')

    @include('furniz.elements.script')
</body>

</html>
