<?php


namespace App\Repositories;


use App\Post;

class PostRepository
{

    protected $post;

    public function __construct(Post $post){
        $this->post = $post;
}

   public function create($atr){
        return $this->post->create($atr);
   }

   public function showAll(){
        return $this->post->all();

   }

    public function find($id){
        return $this->post->find($id);

    }

    public function update($data,$id){
        return $this->post->find($id)->update($data);

    }

    public function delete($id){
        return $this->post->find($id)->delete();

    }



}