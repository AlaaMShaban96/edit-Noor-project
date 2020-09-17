<!-- BEGIN: Footer-->
@if($configData["mainLayoutType"] == 'horizontal')
    <footer class="footer {{ $configData['footerType'] }} footer-light navbar-shadow">
@else
    <footer class="footer {{ $configData['footerType'] }} footer-light">
@endif
    <p class="clearfix blue-grey lighten-2 mb-0" ><span class="float-md-left d-block d-md-inline-block mt-25">Copyright &copy; <script>document.write(new Date().getFullYear());</script> Nano-tech. All Right Reserved <a class="text-bold-800 grey darken-2" href="{{ URL::to('http://www.nano-tech.ly') }}" target="_blank">nano-tech.ly</a></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->
