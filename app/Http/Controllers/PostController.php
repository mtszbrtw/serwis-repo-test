<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{

    protected $postservice;

    public function __construct(PostService $postService)
    {
        $this->postservice = $postService;
    }

    public function index(){

        $posts = $this->postservice->index();

        return view('index',['posts'=>$posts]);

    }

    public function read($id){

        $post = $this->postservice->read($id);

        return view('edytuj',['post'=>$post]);

    }

    public function create(Request $request){

        $post = $this->postservice->create($request);

        return redirect()->back()->with('status','post został dodany');


    }

    public function update(Request $request,$id){

        $this->postservice->update($request,$id);

        return redirect()->route('index.post')->with('status','post został zaktuaizowny');

    }

    public function delete($id){

        $this->postservice->delete($id);

        return redirect()->back()->with(['status'=>'post został usunięty']);

    }

}
