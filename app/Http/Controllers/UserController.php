<?php

namespace App\Http\Controllers;
use App\Post;
use App\TNP;
use App\Applied;
use Auth, Session;
use View;

class UserController extends Controller{

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
		
		if(Auth::check()){
				$user = TNP::where('regdno', '=', Auth::user()->name)->first();
				View::share('user', $user);
		}
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getUserIndex()
	{
		$posts = Post::where('published', '=', '1')->orderBy('id', 'desc')->paginate(4);
		return view('users.dashboard')->withPosts($posts);
	}

	/**
	 * Show the application profile screen to the user.
	 *
	 * @return Response
	 */
	public function getUserProfile()
	{
		$post = TNP::where('regdno', '=', Auth::user()->name)->first();
		return view('users.profile')->withPost($post);
	}

	/**
	 * Show the application contact screen to the user.
	 *
	 * @return Response
	 */
	public function getUserContact()
	{
		return view('users.contact');
	}

	public function changeapplied($postid,$userid)
	{
		$applied = new Applied;

		$applied->postid = $postid;
		$applied->userid = $userid;
		$applied->applied = 1;
		$applied->timestamps = false;
		$applied->save();
	}

	public function checkeligibility($slug)
	{
		$student = TNP::where('regdno', '=', Auth::user()->name)->first();
		$post = Post::where('slug', '=', $slug)->first();
		if(empty($student->diplomapercent) && 
		  floatval($student->tenthyear) >= floatval($post->tenthyear) &&
          floatval($student->tenthpercent) >= floatval($post->tenthpercent) &&
          floatval($student->twelthyear) >= floatval($post->twelthyear) &&
          floatval($student->twelthpercent) >= floatval($post->twelthpercent) &&
          floatval($student->cgpa) >= floatval($post->cgpa) &&
          floatval($student->backlog) <= floatval($post->backlog))
		{
			//Twelth passing student is eligible
			$this->changeapplied($post->id, Auth::user()->id);
			Session::flash('success', 'You have successfully applied.');
			return redirect()->route('notice.single', $slug);
		}
		elseif (empty($student->twelthpercent) &&
			  floatval($student->tenthyear) >= floatval($post->tenthyear) &&
              floatval($student->tenthpercent) >= floatval($post->tenthpercent) &&
              floatval($student->diplomayear) >= floatval($post->diplomayear) &&
              floatval($student->diplomapercent) >= floatval($post->diplomapercent) &&
              floatval($student->cgpa) >= floatval($post->cgpa) &&
              floatval($student->backlog) <= floatval($post->backlog)) {
			//Diploma Passing Student is eligible
			$this->changeapplied($post->id, Auth::user()->id);
			Session::flash('success', 'You have successfully applied.');
			return redirect()->route('notice.single', $slug);
		}
		else{
			
			Session::flash('warning', 'Sorry you are not eligible.');
			return redirect()->route('notice.single', $slug);
		}
	}


}