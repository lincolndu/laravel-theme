// <?php 
// namespace App\Http\Controllers;

// use App\Models\Comment;
// use Illuminate\Http\Request;
// use DB;
// use Session;

// class CommentController extends Controller{
	
// 	public function comments(Request $request){
// 		$comment = new Comment;
// 		$comment->name=$request->name;
// 		$comment->email=$request->email;
// 		$comment->website=$request->website;
// 		$comment->comment=$request->comment;
// 		$comment->save();

// 		Session::flash('success_msg', 'Your comment successfully saved in our system');
// 		return redirect()->back();
// 	}

// }


// ?>