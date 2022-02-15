<?php


namespace App\Services;

use App\Repositories\PostRepository;
use http\Env\Request;

class PostService
{

     protected $post;

    public function __construct(PostRepository $post)
    {
        $this->post =$post;
    }


    public function index(){
        return $this->post->showAll();
    }

    public function create($request){

        $atr = $request->only(['title','body']);

        return $this->post->create($atr);

    }

    public function read($id){


        return $this->post->find($id);

    }

    public function update($request,$id){

        $this->post->update($request->all(),$id);

    }

    public function delete($id){

        return $this->post->delete($id);

    }


}