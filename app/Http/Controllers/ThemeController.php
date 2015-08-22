<?php 
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use DB;
use Session;

class ThemeController extends Controller{

	public function index(){
		$data['slider']=Post::limit(5)->latest()->get();
		$data['posts']=Post::limit(10)->latest()->get();

		return view('index', $data);
	}
	public function single($id){
		$data['posts']=Post::find($id);
		$data['post']=Post::limit(10)->latest()->get();
		return view('single', $data);
	}

	public function dashboard(){
		$data['posts']=Post::limit(20)->offset(0)->latest()->get();

		return view('dashboard', $data);
	}

	public function newpost(Request $request){
		if ($request->isMethod('post')) {
			$post= new Post();
			$post->title=$request->title;
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
		Post::where('id', $id)->delete();

		Session::flash('success_msg', 'Your requested ID deleted successfully');
		return redirect('dashboard');
	}


}

