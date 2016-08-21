@extends('user')

@section('title', 'Standalone')

@section('content')
    <!-- Row 3 For Contact Form-->
<div class="col-md-9">
    <div class="row content-box-large">
            <div class="col-md-12 panel-warning" style="padding:10px;">
                    <div class="content-box-header panel-heading">
                        <div class="panel-title ">PLEASE NOTE</div>
                        
                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                        </div>
                    </div>
                    <div class="content-box-large box-with-header">
                        This will only produce the list of eligible students.
                        <br><br>
                    </div>
            </div>

            <div class="col-md-12 panel-default" style="padding:10px;">
                    <div class="content-box-header panel-heading">
                        <div class="panel-title ">PLEASE NOTE</div>
                        
                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                        </div>
                    </div>
                    <div class="content-box-large box-with-header">
                        {!! Form::open(array('route' => 'admin.standalone', 'class' => 'form-horizontal', 'method' => 'POST', 'data-parsley-validate' => '')) !!}
                    <div class="form-group">
                        <label class="col-lg-4 control-label" for="tyear">Tenth Year Must be > than:</label>
                        <div class="col-lg-4">
                            {!! Form::text('tenthyear', null, array('class' => 'form-control', 'id' => 'tyear', 'placeholder' => 'Enter value here', 'required' => '','minlength'=>'4')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 control-label" for="tpercent">Tenth Percentage Must be > than:</label>
                        <div class="col-lg-4">
                            {!! Form::text('tenthpercent', null, array('class' => 'form-control', 'id' => 'tpercent', 'placeholder' => 'Enter tenth Percentage Requirement', 'required' => '' )) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 control-label" for="twyeardpyear">Twelth Year Must be > than:</label>
                        <div class="col-lg-4">
                            {!! Form::text('twelthyear', null, array('class' => 'form-control', 'id' => 'twyeardpyear', 'placeholder' => 'Enter Min Requirement of Twelth Pass Year ', 'required' => '','minlength'=>'4' )) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 control-label" for="twpercentage">Twelth Percentage Must be > than:</label>
                        <div class="col-lg-4">
                            {!! Form::text('twelthpercent', null, array('class' => 'form-control', 'id' => 'twpercentage', 'placeholder' => 'Enter value here', 'required' => '' )) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 control-label" for="dpyear">Diploma Passing Year Must be > than:</label>
                        <div class="col-lg-4">
                            {!! Form::text('diplomayear', null, array('class' => 'form-control', 'id' => 'dpyear', 'placeholder' => 'Enter value here', 'required' => '' )) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 control-label" for="dpercentage">Diploma Percentage Must be > than:</label>
                        <div class="col-lg-4">
                            {!! Form::text('diplomapercent', null, array('class' => 'form-control', 'id' => 'dpercentage', 'placeholder' => 'Enter value here', 'required' => '' )) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 control-label" for="cgpa">CGPA:</label>
                        <div class="col-lg-4">
                            {!! Form::text('cgpa', null, array('class' => 'form-control', 'id' => 'cgpa', 'placeholder' => 'Enter Min CGPA Requirement', 'required' => '' )) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 control-label" for="backlog">Active BackLog:</label>
                        <div class="col-lg-4">
                            {!! Form::text('backlog', null, array('class' => 'form-control', 'id' => 'backlog', 'placeholder' => 'Enter value here', 'required' => '' )) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::submit('CHECK ELIGIBILITY AND EXPORT', array('class' => 'btn pull-down btn-success btn-lg col-lg-8 col-md-offset-2 col-xs-offset-3 text-center', 'id' => 'submit'  )) !!}
                    </div>

                {!! Form::close() !!}
                        <br><br>
                    </div>
            </div>
            

    </div>
</div>

@endsection