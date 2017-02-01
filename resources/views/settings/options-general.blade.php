@extends('user')

@section('title', 'WEBSITE SETTINGS')



@section('content')

    <div class="row">
        <div class="card">
                @include('partials._settingsnav')
                
                     <div class="card tab-content">  
                        <div class="header">
                            <!-- Title here -->
                            <h4 class="title">General Settings :</h4>
                            <hr>
                        </div>          
                        <div class="content">

                            {!! Form::open(array( 'method' => 'PUT', 'route' => 'admin.settings.update', 'data-parsley-validate' => '', 'enctype' => 'multipart/form-data', 'files' => 'true')) !!}
                                <div class="row">
                                    <div class="col-md-5">
                                        <label>Site Name:</label>
                                            <div class="input-group border-input">                           
                                                <span class="input-group-addon">
                                                    <i class="ti-palette"></i>
                                                </span>
                                                <input type="text" name="sitename" class="form-control border-input" placeholder="Website Name" value="{{$setting['sitename']}}">
                                            </div>
                                    </div>
                                    <div class="col-md-3">
                                            <img class="pull-right" style="max-height: 100px;" src="{{url('/users/img/logo.jpg')}}">
                                    </div>

                                        <div class="col-md-4">
                                            <label class="pull-right">Registrations?&nbsp;&nbsp;&nbsp; 
                                            <div class="togglebutton toggle-danger pull-right">
                                                <label>
                                                    <input type="checkbox" name="registrations_open" 
                                                    @if($settings['registrations_open']) checked="" @endif><span class="toggle"></span>
                                                </label>
                                            </div>
                                            </label>
                                        </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email:</label>
                                            <div class="input-group border-input">                           
                                                <span class="input-group-addon">
                                                    <i class="ti-comment-alt"></i>
                                                </span>
                                                <input type="text" name="tnp_email" class="form-control border-input" placeholder="Email Address" value="{{$setting['tnp_email']}}">
                                            </div>
                                    </div>
                                </div>


                                <div class="row">
                                    
                                    <div class="col-md-4">
                                        <label>Facebook</label>
                                            <div class="input-group border-input">                           
                                                <span class="input-group-addon">
                                                    <i class="ti-facebook"></i>
                                                </span>
                                                <input type="text" name="tnp_facebook" class="form-control border-input" placeholder="Facebook URL" value="{{$setting['tnp_facebook']}}">
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                        
                                            <label>Twitter</label>
                                            <div class="input-group border-input">                           
                                                <span class="input-group-addon">
                                                    <i class="ti-twitter"></i>
                                                </span>
                                                <input type="text" name="tnp_twitter" class="form-control border-input" placeholder="Twitter URL" value="{{$setting['tnp_twitter']}}">
                                            </div>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <label>LinkedIn</label>
                                            <div class="input-group border-input">                           
                                                <span class="input-group-addon">
                                                    <i class="ti-linkedin"></i>
                                                </span>
                                                <input type="text" name="tnp_linkedin" class="form-control border-input" placeholder="LinkedIn URL" value="{{$setting['tnp_linkedin']}}">
                                            </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Youtube</label>
                                            <div class="input-group border-input">                           
                                                <span class="input-group-addon">
                                                    <i class="ti-youtube"></i>
                                                </span>
                                                <input type="text" name="tnp_youtube" class="form-control border-input" placeholder="Youtube URL" value="{{$setting['tnp_youtube']}}">
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Google Plus</label>
                                            <div class="input-group border-input">                           
                                                <span class="input-group-addon">
                                                    <i class="ti-google"></i>
                                                </span>
                                                <input type="text" name="tnp_googleplus" class="form-control border-input" placeholder="Google+ URL" value="{{$setting['tnp_googleplus']}}">
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Instagram</label>
                                            <div class="input-group border-input">                           
                                                <span class="input-group-addon">
                                                    <i class="ti-instagram"></i>
                                                </span>
                                                <input type="text" name="tnp_instagram" class="form-control border-input" placeholder="Instagram URL" value="{{$setting['tnp_instagram']}}">
                                            </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">

                                                <label>Address:</label>
                                        <div class="input-group border-input">                           
                                                <span class="input-group-addon">
                                                    <i class="ti-comment-alt"></i>
                                                </span>
                                                <textarea name="tnp_address" align="left" rows="5" class="form-control border-input" placeholder="Here can be your address">{{$setting['tnp_address']}}
                                                </textarea>
                                        </div>
                                </div>
                                
                                <div class="text-center">
                                    {!! Form::submit('Save Settings', array('class' => 'btn btn-info btn-fill btn-wd', 'id' => 'submit'  )) !!}
                                </div>
                                <div class="clearfix"></div>
                            {!! Form::close() !!}
                        </div>
                     </div>
                
        </div>
    </div>
	


@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.icons').remove();
        });
        
    </script>

@endsection