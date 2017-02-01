
<!--   Core JS Files   -->
    <script src="{{asset('template/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
	<script src="{{asset('template/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('template/js/jquery.newsTicker.min.js')}}" type="text/javascript"></script>
	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{asset('template/js/bootstrap-checkbox-radio.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('template/js/bootstrap-notify.js')}}"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="{{asset('template/js/paper-dashboard.js')}}"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

                 @if(Session::has('success'))
                	$.notify({
                    	icon: 'ti-heart',
                    	message: "<h5>{{Session::get('success')}}</h5>"

                    },{
                        type: 'success',
                        timer: 4000
                    });
                @endif

                @if(Session::has('warning'))
                    $.notify({
                        icon: 'ti-bell',
                        message: "<h5>{{Session::get('warning')}}</h5>"

                    },{
                        type: 'danger',
                        timer: 4000,
                        placement: {
                                from: 'bottom',
                                align: 'center'
                            }
                    });
                @endif

                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        $.notify({
                            icon: 'ti-bell',
                            message: "<h5>{{$error}}</h5>"

                        },{
                            type: 'danger',
                            timer: 4000,
                            placement: {
                                    from: 'top',
                                    align: 'center'
                                }
                        });
                    @endforeach
                @endif


                $('#cetlogo').bind('contextmenu', function(e){
                    return false;
                });


    	});
	</script> 

    <script type="text/javascript">
        var unsaved = false;

        $(":input, textarea").change(function(){ //trigers change in all input fields including text type
            unsaved = true;
        });

        function unloadPage(){ 
            if(unsaved){
                return "You have unsaved changes on this page. Do you want to leave this page and discard your changes or stay on this page?";
            }
        }

        $("#submit").click(function(){
            unsaved = false;
        });

        $('#branchname, #chosen, #postid, #textarea-wysihtml5').change(function(){
             unsaved = false;
        });

        $('#search').change(function(){
            unsaved = false;
        });

        window.onbeforeunload = unloadPage;
    </script>