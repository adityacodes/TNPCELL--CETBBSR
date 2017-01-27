@extends('user')

@section('title', 'Profile')

@section('content')
    

<div class="row">
    <div class="col-lg-4 col-md-5">
        <div class="card card-user">
            <div class="image">
                <img src="http://placehold.it/365x265" alt="...">
            </div>
            <div class="content">
                <div class="author">
                  <img class="avatar border-white" src="http://placehold.it/300x301" alt="...">
                  <h4 class="title">{{ $post->name }}<br>
                     <a href="#"><small>{{ $post->regdno }}</small></a>
                  </h4>
                </div>
                <p class="description text-center">
                    "I like the way you work it <br>
                    No diggity <br>
                    I wanna bag it up"
                </p>
            </div>
            <hr>
        </div>
    </div>
    <div class="col-lg-8 col-md-7">
    <div class="card">
        <div class="content">

                <div class="header text-center">
                        
                        <h2 class="title" style="font-weight: bold;"><i class="ti-user"></i> USER PROFILE</h2>
                        
                    </div>
                <h4>
                    <table class="table table-hover table-bordered" >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Attribute</th>
                                <th>Value</th>
                            </tr>
                        </thead> 
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>FULL NAME:</td>
                                <td>{{ $post->name }}</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>REGISTRATION NUMBER:</td>
                                <td>{{ $post->regdno }}</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>DATE OF BIRTH:</td>
                                <td>{{ $post->dob }}</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>GENDER:</td>
                                <td>{{ strtoupper($post->gender) }}</td>
                            </tr>


                            <tr>
                                <td>5</td>
                                <td>TENTH YEAR:</td>
                                <td>{{ $post->tenthyear }}</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>TENTH PERCENT:</td>
                                <td>{{ $post->tenthpercent }}</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>TENTH BOARD:</td>
                                <td>{{ strtoupper($post->tenthboard) }}</td>
                            </tr>

                        @if($post->twelthyear != "")
                                <tr>
                                    <td>8</td>
                                    <td>TWELTH YEAR:</td>
                                    <td>{{ $post->twelthyear }}</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>TWELTH PERCENT:</td>
                                    <td>{{ $post->twelthpercent }}</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>TWELTH BOARD:</td>
                                    <td>{{ strtoupper($post->twelthboard) }}</td>
                                </tr>

                        @else

                                <tr>
                                    <td>8</td>
                                    <td>DIPLOMA YEAR:</td>
                                    <td>{{ $post->diplomayear }}</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>DIPLOMA PERCENT:</td>
                                    <td>{{ $post->diplomapercent }}</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>DIPLOMA BOARD:</td>
                                    <td>{{ strtoupper($post->diplomaboard) }}</td>
                                </tr>
                        @endif
                            <tr>
                                <td>11</td>
                                <td>CGPA:</td>
                                <td>{{ $post->cgpa }}</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>ACTIVE BACKLOG:</td>
                                <td>{{ $post->backlog }}</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>PERMANENT ADDRESS:</td>
                                <td ><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#paddressModal">CLICK HERE</button>
                                </td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>PRESENT ADDRESS:</td>
                                <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#praddressModal">CLICK HERE</button></td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>FATHER'S NAME:</td>
                                <td>{{ $post->fname }}</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>FATHER'S OCCUPATION:</td>
                                <td>{{ $post->foccupation }}</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>MOTHER'S NAME:</td>
                                <td>{{ $post->mname }}</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>MOTHER'S OCCUPATION:</td>
                                <td>{{ $post->moccupation }}</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>RELATIVE NAME:</td>
                                <td>{{ $post->rname }}</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>RELATIVE OCCUPATION:</td>
                                <td>{{ $post->roccupation }}</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>INTERNSHIPS:</td>
                                <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#internshipsModal">CLICK HERE</button></td>
                            </tr>
                           
                        </tbody>
                    </table>
                    </h4>
            <div class="footer">
                <hr />
                <div class="stats">
                    <i class="ti-reload"></i> Updated now
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')

    <!-- Modal 1 -->
      <div class="modal fade" id="paddressModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Permanent Address</h4>
            </div>
            <div class="modal-body">
              <p>{{ $post->paddress }}</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>


  <!-- Modal 2 -->
  <div class="modal fade" id="praddressModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Present Address</h4>
        </div>
        <div class="modal-body">
          <p>{{ $post->praddress }}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Modal 3-->
  <div class="modal fade" id="internshipsModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Internships</h4>
        </div>
        <div class="modal-body">
          <p>{{ $post->internships }}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


@endsection