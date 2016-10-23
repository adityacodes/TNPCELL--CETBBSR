@extends('user')

@section('title', 'IMPORT DATABASE')

@section('content')
    <!-- Row 3 For Contact Form-->
    <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <!-- Title here -->
                        <h4 class="title">PLEASE NOTE :</h4>
                        <p class="alert-warning"><br>
                            ** Table Heading should be in the Given Format.</p>
                        <hr>
                    </div>          
                    <div class="content" >              
                        <!-- Content goes here -->
                        <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                            {!!Form::open(array('method' => 'POST','url' => 'admin/import', 'files' => true, 'class' => 'form-horizontal'))!!}

                                    <fieldset>
                                        <legend>IMPORT FILE</legend>
                                    
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">File input :</label>
                                            <div class="col-md-10">
                                                <input type="file" name="file" class="btn btn-default" id="exampleInputFile1">
                                                <p class="help-block">
                                                    Upload your file here.
                                                </p>
                                            </div>
                                        </div>
                                        
                                    </fieldset>
                                    <div class="form-group text-center">

                                        <button type="submit" class="btn btn-success">Upload File</button>
                                        <button type="reset" class="btn btn-default">Cancel</button>
                                    </div>
                            {!! Form::close()!!}
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>

@endsection