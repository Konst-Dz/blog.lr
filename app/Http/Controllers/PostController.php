<?php


namespace App\Http\Controllers;
use App\Country;
use App\Http\Controllers\Controller;
use App\Person;
use App\Post;
use App\User;
use App\City;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class PostController extends Controller
{

    public function getAll($order = 'date',$dir = 'desc')
    {
        $posts = Post::orderBy($order,$dir)->get();
        return view('post.all',['posts' => $posts]);
    }

    public function getOne($id)
    {
        $post = Post::findOrFail($id);
        return view('post.one',['post' => $post]);

    }

    public function newPost(Request $request)
    {
        if ($request->filled(['title','desc','text'])){
            $post = new Post();
            $post->title = $request->title;
            $post->desc = $request->desc;
            $post->text = $request->text;
            $post->save();
            return response('success', 200)->header('Content-Type', 'text/plain');
       }
        else{
            return view('post.form');
        }
    }

    public function editPost(Request $request,$id)
    {
        $post = Post::find($id);
        if ($request->filled(['title','desc','date','text'])){
            $post->title = $request->title;
            $post->desc  = $request->desc;
            $post->date  = $request->date;
            $post->text  = $request->text;

            $post -> save();
            return redirect()->route('all')->with('success',"$post->id updated!");
        }
        return view('post.editpost',['post' => $post]);

    }

    public function massAssignment()
    {
      /* $post = Post::create();
        $post->fill(['title' => 'Flight 22']);
        $post->save();
        return 'succes';*/

      //$post = Post::firstOrCreate(['title'=>'Flight 22']);
      $post = Post::firstOrNew(['title'=>'Flight 23']);
      $post->save();
        /*$post = Post::firstOrCreate(['title'=>'Flight 23'],
            ['desc'=>123]);*/
        return 'succes';

    }

    public function delPost($id)
    {

        $del = Post::find($id);
        $del->delete();
        return redirect()->route('all')->with('success',"$del->title deleted!");
    }

    public function getDeletedPost()
    {
        $trashed = Post::onlyTrashed()->get();

        return view('post.deleted',['trashed' =>$trashed]);

    }

    public function restorePost($id)
    {
        $post = Post::withTrashed()->where('id',$id)->restore();
        return 'success';
    }

    /*public function real()
    {
        $post = User::all();

        return view('post.real',['post'=>$post]);

    }*/

    public function real()
    {
        $person = City::all();


       return view('post.real',['person'=>$person]);
    }


}

