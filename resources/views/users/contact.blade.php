@extends('user')

@section('title', 'Contact')

@section('content')
    <!-- Row 3 For Contact Form-->
<div class="col-md-8">
    <div class="row">
            <div class="col-md-12 panel-warning" style="padding:10px;">
                    <div class="content-box-header panel-heading">
                        <div class="panel-title ">PLEASE NOTE</div>
                        
                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                        </div>
                    </div>
                    <div class="content-box-large box-with-header">
                        Please Contact the ADMIN only when its utmost necessary.
                        <br><br>
                    </div>
                </div>
            <div class="content-box-large">
                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                    <form class="form-horizontal">
                        <fieldset>
                            <legend>Contact Admin</legend>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Email :</label>
                                <div class="col-lg-10">
                                    <span class="form-control">admin@cettnp.com</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="focusedInput">Subject :</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="focusedInput" type="text">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="textarea-wysihtml5">Message :</label>
                                <div class="col-lg-10">
                                    <textarea id="textarea-wysihtml5" class="form-control textarea-wysihtml5" placeholder="Enter text..." style="width: 100%; height: 200px"></textarea>
                                </div>
                            </div>
                            <div class="form-group text-center">

                                <button type="submit" class="btn btn-success">Send Message</button>
                                <button type="reset" class="btn btn-default">Cancel</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection