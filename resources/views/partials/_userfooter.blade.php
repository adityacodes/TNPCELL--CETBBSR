<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>

                <li>
                    <a href="http://adityacodes.net">
                        Aditya Padhi
                    </a>
                </li>
                <li>
                    <a href="#">
                       Blog
                    </a>
                </li>
                <li>
                    <a href="#">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.adityacodes.net">Aditya Padhi</a>
        </div>
    </div>
</footer>

<!--   Core JS Files   -->
    <script src="{{URL::to('template/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
	<script src="{{URL::to('template/js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{URL::to('template/js/bootstrap-checkbox-radio.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{URL::to('template/js/bootstrap-notify.js')}}"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="{{URL::to('template/js/paper-dashboard.js')}}"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

         @if(Session::has('success'))
        	$.notify({
            	icon: 'ti-gift',
            	message: "{{Session::get('success')}}"

            },{
                type: 'success',
                timer: 4000
            });
        @endif

    	});
	</script>