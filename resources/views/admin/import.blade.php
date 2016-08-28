@extends('user')

@section('title', 'IMPORT DATABASE')

@section('content')
    <!-- Row 3 For Contact Form-->
<div class="col-md-8">
    <div class="row">
            <div class="col-md-12 panel-warning" style="padding:10px;">
                    <div class="content-box-header panel-heading">
                        <div class="panel-title ">PLEASE NOTE</div>
                        
                        <div class="panel-options">
                            <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                        </div>
                    </div>
                    <div class="content-box-large box-with-header">
                        NOTE:
                        1. Table Heading should be in the Given Format.

                        <br><br>
                    </div>
                </div>
            <div class="content-box-large">
                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                    {!!Form::open(array('method' => 'POST','url' => 'admin/import', 'files' => true, 'class' => 'form-horizontal'))!!}

                            <fieldset>
								<legend>IMPORT FILE</legend>
							
								<div class="form-group">
									<label class="col-md-2 control-label">File input</label>
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
            </div>
        </div>
    </div>
@endsection