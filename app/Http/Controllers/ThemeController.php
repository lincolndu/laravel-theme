<?php 
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\Comment;
use Auth;
use Pagination;

class ThemeController extends Controller{

	public function index(){
		$data['slider']=Post::limit(5)->latest()->get();
		$data['posts']=Post::limit(10)->latest()->get();

		return view('index', $data);
	}
	public function single($id){

		$data['posts']=Post::find($id);
		$data['post']=Post::limit(10)->latest()->get();
		$data['comments']=Comment::where('post_id', $id)->get();
		return view('single', $data);
	}

	public function dashboard(){
		// if (Auth::check()) {
		
		$data['posts']=Post::limit(20)->offset(0)->latest()->get();
		$data['authors']=Auth::user();

		return view('dashboard', $data);
		// }

		// else{
		// 	Session::flash('success_msg', 'Please login first to see dashboard');
		// 	return view('auth/login');
		// }

	}

	public function newpost(Request $request){
		if (Auth::check()) {
		if ($request->isMethod('post')) {
			$post= new Post();
			$post->title=$request->title;
            $post->author=Auth::user()->username;			
            $post->category=$request->category;
			$post->photo=$request->file('photo')->getClientOriginalName();
			$request->file('photo')->move(public_path(). '/photo/',$post->photo);

			$post->description=$request->description;
			$post->save();

			Session::flash('success_msg','successfully save your data.'); 
			return redirect('dashboard');
		}
		return view('dashboard');
			}
	}

	public function edit(Request $request, $id){
		if ($request->isMethod('POST')) {
			$edit=Post::find($id);
			$edit->title=$request->title;
			$edit->category=$request->category;
			$edit->photo=$request->file('photo')->getClientOriginalName();
			$request->file('photo')->move(public_path().'/photo/', $edit->photo);
			$edit->description=$request->description;
			$edit->save();

			Session::flash('success_msg', 'Your data edited successfully');
			return redirect('dashboard');
		}
		$data['id']=Post::find($id);
		// return "Hello"; die();
		return view('edit', $data);
	}
	
	public function delete($id){
		if(Auth::user()->userRole== 'Administrator'){
			Post::where('id', $id)->delete();
		Session::flash('success_msg', 'Your requested ID deleted successfully');
		return redirect('dashboard');
	}else{
		Session::flash('success_msg', 'You have no permission to delete');
		return redirect('dashboard');
		}	
	}

	// public function authUpdate($id){
	// 	return view('auth.auth_edit');
	// }


	public function gallery(){
		$data['posts']=Post::paginate(5);
		return view('gallery', $data);
	}

	public function blog(){
		$data['posts']=Post::paginate(10);
		return view('blog', $data);
	}
	
	public function comments(Request $request){
		$comment = new Comment;
		$comment->post_id=$request->post_id;
		$comment->name=$request->name;
		$comment->email=$request->email;
		$comment->website=$request->website;
		$comment->comment=$request->comment;
		$comment->save();

		Session::flash('success_msg', 'Your comment successfully saved in our system');
		return redirect()->back();
	}


}

