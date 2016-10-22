@extends('user')

@section('title', 'Contact')

@section('content')
    <!-- Row 3 For Contact Form-->
    <div class="row">
        <div class="card">
            <div class="header row">
                <div class="icon-big icon-success col-md-2 col-xs-3">
                        <i class="ti-wallet"></i>            
                </div>
                <h4 class="title" style="font-weight: bold;">CONTACT ADMIN</h4>
                <p class="category">Last Campaign Performance</p>
            </div>
            
            <div class="content">
                <form class="form-horizontal">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-lg-1 control-label">Email :</label>
                            <div class="col-lg-10">
                                <span class="form-control border-input">admin@tnp.cet.edu.in</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-1 control-label" for="focusedInput">Subject :</label>
                            <div class="col-lg-10">
                                <input class="form-control border-input" id="focusedInput" type="text">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-1 control-label" for="textarea-wysihtml5">Message :</label>
                            <div class="col-lg-10">
                                <textarea id="textarea-wysihtml5" class="form-control  border-input textarea-wysihtml5" placeholder="Enter text..." style="width: 100%; height: 200px"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-1">
                                <button type="submit" class="btn btn-success">Send Message</button>
                                <button type="reset" class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                    </fieldset>
                </form>                       

                    <div class="footer">
                        <hr>
                        <div class="stats">
                            <i class="ti-timer"></i> Campaign sent 2 days ago
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection