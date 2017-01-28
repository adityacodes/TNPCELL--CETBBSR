<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Post;
use Session, Auth, View, Validator, File;
use App\TNP;
use App\Applied;

class PostController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('admin');

		if(Auth::check()){
				$user = TNP::where('regdno', '=', Auth::user()->name)->first();
				View::share('user', $user);
		}
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//create a variable and store all the blog posts in it
		$posts = Post::orderBy('id', 'desc')->paginate(5);

		//return a view and pass in the above variabe
		return view('posts.index')->withPosts($posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('posts.create');
	}

	/**\
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//1. validate the date
		 $validator = Validator::make($request->all(), array(
				'title' => 'required|max:255',
				'slug'	=> 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'post_image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
				'body' => 'required',
				'tenthyear' => 'required|min:4|max:4', 
				'tenthpercent' => 'required',
				'twelthyear' => 'required|min:4|max:4',
				'twelthpercent' => 'required',
				'diplomayear'=> 'required|min:4|max:4',
				'diplomapercent'=> 'required',
				'cgpa'=> 'required',
				'backlog'=> 'required',
			));

		  if ($validator->fails()) {
            // send back to the page with the input data and errors
            return redirect('admin/post/create')
                        ->withErrors($validator)
                        ->withInput();
          }

          	if ($request->file('post_image')->isValid()) {
	            $imageName = time().'.'.$request->file('post_image')->getClientOriginalExtension();
	            $request->file('post_image')->move('uploads/post', $imageName);
        	}
	        else {
	          // sending back with error message.
	          Session::flash('warning', 'Uploaded file is not valid');
	          return redirect('admin/post/create')
	                        ->withErrors($validator)
	                        ->withInput();
	        }

		//2. Store in the DB
		$post = new Post;
		$post->image = $imageName;
		$post->title = $request->title;
		$post->tenthyear = $request->tenthyear;
		$post->tenthpercent = $request->tenthpercent;
		$post->twelthyear = $request->twelthyear; 
		$post->twelthpercent = $request->twelthpercent;
		$post->diplomayear =  $request->diplomayear;
		$post->diplomapercent = $request->diplomapercent;
		$post->cgpa = $request->cgpa;
		$post->backlog = $request->backlog;
		$post->slug = $request->slug;
		$post->body = $request->body;

		$post->save();

		//3. Redirect to another page
		Session::flash('success', 'The post was successfully saved.');

		return redirect()->route('admin.post.show', $post->id);


	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		return view('posts.show')->withPost($post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//find the post in the db ans save as a var
		$post = Post::find($id);
		//return the view and pass in the var we previously created
		return view('posts.edit')->withPost($post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		//validate data
		$post = Post::find($id);

		if ($request->input('slug') == $post->slug ) {
			$this->validate($request, array(
				'title' => 'required|max:255',
				'body' => 'required',
                'post_image'=> 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
				'tenthyear' => 'required', 
				'tenthpercent' => 'required',
				'twelthyear' => 'required',
				'twelthpercent' => 'required',
				'diplomayear'=> 'required',
				'diplomapercent'=> 'required',
				'cgpa'=> 'required',
				'backlog'=> 'required',
			));
		}

		else{
			$this->validate($request, array(
				'title' => 'required|max:255',
				'slug'	=> 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'post_image'=> 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
				'body' => 'required',
				'tenthyear' => 'required', 
				'tenthpercent' => 'required',
				'twelthyear' => 'required',
				'twelthpercent' => 'required',
				'diplomayear'=> 'required',
				'diplomapercent'=> 'required',
				'cgpa'=> 'required',
				'backlog'=> 'required',
			));
		}
		
		if($request->hasfile('post_image'))
        {
            if($request->file('post_image')->isValid())
            {
                File::delete('uploads/post/'.$post->image);
                $imageName = time().'.'.$request->file('post_image')->getClientOriginalExtension();
                $request->file('post_image')->move('uploads/post', $imageName);
                $post->image = $imageName;
            }
            else{     
              // sending back with error message.
              Session::flash('warning', 'Uploaded file is not valid');
              return back()->withErrors($validator)
                            ->withInput();
            }

        }

		//save the data
		$post->title = $request->title;
		$post->tenthyear = $request->tenthyear;
		$post->tenthpercent = $request->tenthpercent;
		$post->twelthyear = $request->twelthyear; 
		$post->twelthpercent = $request->twelthpercent;
		$post->diplomayear =  $request->diplomayear;
		$post->diplomapercent = $request->diplomapercent;
		$post->cgpa = $request->cgpa;
		$post->backlog = $request->backlog;
		$post->slug = $request->slug;
		$post->body = $request->body;

		$post->save();
		// set flash meessage to be shown

		Session::flash('success', 'The post was successfully updated');
		//redirect the users

		return redirect()->route('admin.post.show', $post->id);

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//Check if post is present in applied field
		$applieds = Applied::where('postid', '=', $id)->delete();

		$post = Post::find($id);
		File::delete('uploads/post/'.$post->image);
		$post->delete();

		Session::flash('Success', 'Post Deleted Successfully');

		return redirect()->route('admin.post.index');
	}

	

}
