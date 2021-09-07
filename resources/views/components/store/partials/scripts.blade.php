<script src="https://kit.fontawesome.com/ae85377f3e.js" crossorigin="anonymous"></script>
{{-- {{asset("store/")}} --}}
<!-- latest jquery-->
<script src="{{asset("store/js/jquery-3.3.1.min.js")}}"></script>

<!-- menu js-->
<script src="{{asset("store/js/menu.js")}}"></script>

<!-- lazyload js-->
<script src="{{asset("store/js/lazysizes.min.js")}}"></script>

<!-- popper js-->
<script src="{{asset("store/js/popper.min.js")}}"></script>

<!-- slick js-->
<script src="{{asset("store/js/slick.js")}}"></script>

<!-- Bootstrap js-->
<script src="{{asset("store/js/bootstrap.js")}}"></script>
<script src="{{asset("store/js/bootstrap.bundle.min.js")}}"></script>

<!-- Bootstrap Notification js-->
<script src="{{asset("store/js/bootstrap-notify.min.js")}}"></script>

<!-- Theme js-->
<script src="{{asset("store/js/script.js")}}"></script>

<script>
    function openSearch() {
        document.getElementById("search-overlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("search-overlay").style.display = "none";
    }
</script>

<script src="{{asset("dashboard/js/axios.js")}}"></script>

<script src="{{asset("dashboard/js/sweetalert.js")}}"></script>

<script src="{{asset('store/js/cart.js')}}"></script>
<script>
    url = '{{asset('')}}';
</script>

{{ $customScripts ?? '' }}
