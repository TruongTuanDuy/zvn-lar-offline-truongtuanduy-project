<!DOCTYPE html>
<html lang="en">

<head>
    @include('furniz.elements.head')
</head>

<body class="bg-effect">

    @include('furniz.elements.loader')
    @include('furniz.elements.header')
    @include('furniz.elements.mobile-menu')

    @yield('content')

    @include('furniz.elements.newsletter')
    @include('furniz.elements.footer')
    @include('furniz.elements.quick-view-modal-box')
    @include('furniz.elements.location-modal')
    @include('furniz.elements.cookie-bar-box')
    @include('furniz.elements.deal-modal-box')
    @include('furniz.elements.tap-to-top')
    @include('furniz.elements.bg-overlay')

    @include('furniz.elements.script')

</body>

</html>
