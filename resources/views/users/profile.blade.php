@extends('user')

@section('title', 'Profile')

@section('content')
    
    <div class="col-md-9">
        <div class="row">
            <div class="content-box-large">
                
                        <div class="panel-heading text-center">
                            <div class="panel-title"><h3><strong>User Profile</strong></h3></div>
                        </div>
                        <div class="panel-body">
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
                                        <td>FULL NAME</td>
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
                                        <td style="max-width:0px; word-wrap: break-word;">{{ $post->paddress }}</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>PRESENT ADDRESS:</td>
                                        <td style="max-width:0px; word-wrap: break-word;">{{ $post->praddress }}</td>
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
                                        <td>MOTHER'S NAME</td>
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
                                        <td>{{ $post->internships }}</td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                            </h4>
                        </div>
                
            </div>
        </div>
    </div>
@endsection