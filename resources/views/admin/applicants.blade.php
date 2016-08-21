@extends('user')

@section('title', 'Applicants')

@section('content')
<div class="col-md-9">
	<div class="row">
		<div class="col-md-12">
			<div class="content-box-large">
				<div class="panel-heading">
					<div class="panel-title">Choose Notice</div>

					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label class="col-sm-2 control-label">Notice Title :</label>
						<div class="col-md-10">

								<select class="form-control" id="postid">
									@foreach($posts as $post)
										<option value="{{$post->id}}">{{$post->title}}</option>
									@endforeach
								</select>
						
								{{Form::token()}}
							    <br/>
								<button id="chosen" class="btn btn-primary">Select</button>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row" id="row2" hidden>
		<div class="col-md-12">
			<div class="content-box-large">
				<div class="panel-heading">
					<div class="panel-title">Applicants</div>

					<div class="panel-options">
						<a href="#" id="xls"><button class="btn btn-success"  data-rel="collapse"><i class="glyphicon glyphicon-save"> EXPORT</i></button></a>
					</div>
				</div>
				<div class="panel-body" >
					<table class="table table-hover table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Attribute</th>
								<th>Value</th>
							</tr>
						</thead>
						<tbody id="body">


						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection


@section('scripts')
<script type="text/javascript">
	$(document).ready(function() {

			$("#chosen").click(function() 
			{     
				//$(this).parents('.panel').toggleClass('panel-warning').toggleClass('panel-default');
				$('#row2').show();
				$('#body').empty();
				$('#xls').attr("href","/admin/export/excel/"+ $("#postid :selected").val());
				$('.panel-body').append('<i class="fa fa-refresh fa-spin"></i>');
				var token = $('input[name="_token"]').val();
				$.ajax({
					url: 'applicants',
					type: 'PUT',
					data: "postid=" + $("#postid :selected").val() + "&_token=" + token, 
					success: function(result){
							$('.fa-spin').remove();
        					$("#body").append(result);
        				}
				})
			});
	});



</script>


@endsection