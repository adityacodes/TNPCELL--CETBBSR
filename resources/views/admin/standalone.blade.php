@extends('user')

@section('title', 'Standalone')

@section('content')
    <!-- Row 3 For Contact Form-->
    <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <!-- Title here -->
                        <h4 class="title">PLEASE NOTE :</h4>
                        <p>This will only produce the list of eligible students.</p>
                        <hr>
                    </div>          
                    <div class="content" >              
                        <!-- Content goes here -->
                                {!! Form::open(array('route' => 'admin.standalone', 'class' => 'form-horizontal', 'method' => 'POST', 'data-parsley-validate' => '')) !!}
                                <div class="form-group">
                                    <label class="col-lg-4 control-label" for="tyear">Tenth Year Must be > than:</label>
                                    <div class="col-lg-4">
                                        {!! Form::text('tenthyear', null, array('class' => 'form-control border-input', 'id' => 'tyear', 'placeholder' => 'Enter value here', 'required' => '','minlength'=>'4')) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-4 control-label" for="tpercent">Tenth Percentage Must be > than:</label>
                                    <div class="col-lg-4">
                                        {!! Form::text('tenthpercent', null, array('class' => 'form-control border-input', 'id' => 'tpercent', 'placeholder' => 'Enter tenth Percentage Requirement', 'required' => '' )) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-4 control-label" for="twyeardpyear">Twelth Year Must be > than:</label>
                                    <div class="col-lg-4">
                                        {!! Form::text('twelthyear', null, array('class' => 'form-control border-input', 'id' => 'twyeardpyear', 'placeholder' => 'Enter Min Requirement of Twelth Pass Year ', 'required' => '','minlength'=>'4' )) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-4 control-label" for="twpercentage">Twelth Percentage Must be > than:</label>
                                    <div class="col-lg-4">
                                        {!! Form::text('twelthpercent', null, array('class' => 'form-control border-input', 'id' => 'twpercentage', 'placeholder' => 'Enter value here', 'required' => '' )) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-4 control-label" for="dpyear">Diploma Passing Year Must be > than:</label>
                                    <div class="col-lg-4">
                                        {!! Form::text('diplomayear', null, array('class' => 'form-control border-input', 'id' => 'dpyear', 'placeholder' => 'Enter value here', 'required' => '' )) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-4 control-label" for="dpercentage">Diploma Percentage Must be > than:</label>
                                    <div class="col-lg-4">
                                        {!! Form::text('diplomapercent', null, array('class' => 'form-control border-input', 'id' => 'dpercentage', 'placeholder' => 'Enter value here', 'required' => '' )) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-4 control-label" for="cgpa">CGPA:</label>
                                    <div class="col-lg-4">
                                        {!! Form::text('cgpa', null, array('class' => 'form-control border-input', 'id' => 'cgpa', 'placeholder' => 'Enter Min CGPA Requirement', 'required' => '' )) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-4 control-label" for="backlog">Active BackLog:</label>
                                    <div class="col-lg-4">
                                        {!! Form::text('backlog', null, array('class' => 'form-control border-input', 'id' => 'backlog', 'placeholder' => 'Enter value here', 'required' => '' )) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::button('<i class="ti-save"></i>  CHECK ELIGIBILITY AND EXPORT', array('type' => 'submit', 'class' => 'btn pull-down btn-success btn-lg col-lg-8 col-md-offset-2 col-xs-offset-3 text-center', 'id' => 'submit'  )) !!}
                                </div>

                            {!! Form::close() !!}

                        <div class="clearfix"></div>
                    </div>
                </div>
        </div>
    </div>

@endsection