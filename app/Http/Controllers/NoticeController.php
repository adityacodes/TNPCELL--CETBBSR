<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use View;
use App\TNP;
use App\Applied;

class NoticeController extends Controller 
{


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
	 * Gets a single notice from the Post Model.
	 *
	 * @return Response
	 */
	public function getSingle($slug)
	{
		//fetch from DB based on slug
		$post = Post::where('slug', '=', $slug)->first();
			$applied = Applied::wherepostid($post->id)->whereuserid(Auth::user()->id)->first();
		//return the view and pass in the object
		return view('users.notice')->withPost($post)->withApplied($applied);
	}

	/**
	 * Gets all the notices in the DB.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$posts = Post::where('published', '=', '1')->orderBy('id', 'desc')->paginate(3);

		return view('users.allnotices')->withPosts($posts);

	}
	

}
