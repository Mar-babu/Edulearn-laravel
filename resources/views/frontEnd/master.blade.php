


<!-- header -->
@include('frontEnd.includes.header')
<!-- //header -->

<!-- banner -->


    @include('frontEnd.includes.headnav1')
    <!-- //navigation -->

<!-- //banner -->

<!-- about -->
@yield('body1')
<!-- //about -->

<!-- Stats-->
@include('frontEnd.includes.bodyst')

<!-- //course -->

<!-- what we do -->
@yield('body2')
<!-- //news -->

<!-- brands -->
<div class="brands-w3ls py-md-5 py-4">
    <div class="container py-xl-3">
        <ul class="list-unstyled">
            <li>
                <i class="fab fa-supple"></i>
            </li>
            <li>
                <i class="fab fa-angrycreative"></i>
            </li>
            <li>
                <i class="fab fa-aviato"></i>
            </li>
            <li>
                <i class="fab fa-aws"></i>
            </li>
            <li>
                <i class="fab fa-cpanel"></i>
            </li>
            <li>
                <i class="fab fa-hooli"></i>
            </li>
            <li>
                <i class="fab fa-node"></i>
            </li>
        </ul>
    </div>
</div>
<!-- //brands -->

<!-- footer -->
@include('frontEnd.includes.footer')
<!-- //footer -->


</html>
