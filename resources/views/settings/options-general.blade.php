@extends('user')

@section('title', 'WEBSITE SETTINGS')




@section('content')

	<div class="card">
	    <div class="header">
	    	<!-- Title here -->
	        <h4 class="title">General Settings :</h4>
	        <hr>
	    </div>          
	    <div class="content">
            <form>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Site Name:</label>
                            <input type="text" class="form-control border-input" disabled="" placeholder="Company" value="Training & Placement Cell">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Logo:</label><a class="pull-right" href="#changelogo"></a>
                            <input type="text" class="form-control border-input" placeholder="Username" value="michael23">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control border-input" placeholder="Email">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control border-input" placeholder="Company" value="Chet">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control border-input" placeholder="Last Name" value="Faker">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control border-input" placeholder="Home Address" value="Melbourne, Australia">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control border-input" placeholder="City" value="Melbourne">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" class="form-control border-input" placeholder="Country" value="Australia">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Postal Code</label>
                            <input type="number" class="form-control border-input" placeholder="ZIP Code">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Address:</label>
                            <textarea rows="5" class="form-control border-input" placeholder="Here can be your description" value="Mike">
                            College Of Engineering And Technology
							Ghatikia, Bhubaneswar, India - 751003
							Phone: +91-7381110897
							FAX : I dont know
							</textarea>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-info btn-fill btn-wd">Save Settings</button>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
	</div>


@endsection