<?php

namespace App\Http\Controllers\Cpanel\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostRequest;
use App\Models\Post;
use App\Models\PostTranslation;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $breadcrumbs = [
            ['link'=>"dashboard",'name'=>"Home"],
            ['link'=>"post",'name'=>"Post"]
        ];
        $postTranslation=PostTranslation::all();
        return view('cpanel.post.index',compact('postTranslation','breadcrumbs'));
        // return response([ 'success' => true,compact('postTranslation','breadcrumbs')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cpanel.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        //
        $post = new Post();
        // $post->admin_id = auth('admin')->user()->id;
        $post->admin_id = 1;
        $post->type = $request->type;
        if ($request->image == null) {

        }else{
            $post->image = $this->uploadeImage($request);
        }
      
        $post->save();

        foreach ($request->language_code as $key => $code) {   
            $postTranslation = new PostTranslation();
            $postTranslation->post_id = $post->id;
            $postTranslation->language_code = $code;
            $postTranslation->title = $request->title[$key];
            $postTranslation->content = $request->content[$key];
            $postTranslation->save();
        }
        return redirect()->back();
        // return response(['post' => $post,'PostTranslation' => $postTranslation]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $breadcrumbs = [
            ['link'=>"dashboard",'name'=>"Home"],
            ['link'=>"post",'name'=>"Post"]
        ];
        $post = Post::find($id);
        return view('cpanel.post.edit', compact('post','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        //
        $post = Post::find($id);

         // $post->admin_id = auth('admin')->user()->id;
         $post->admin_id = 1;
         $post->type = $request->type;
        if ($request->image == null) {

        }else{
            $post->image = $this->uploadeImage($request);
        }
        $post->save();

        foreach ($post->postTranslation as $key=> $translation) {
            
            $translation->post_id = $post->id;
            $translation->title = $request->title[$key];
            $translation->content = $request->content[$key];
            
            $translation->save();
        }
  
        return redirect('cpanel/admin/post');
        // return response()->json($translation);
        // return response(['slide' => $slide,'SlideTranslation' => $translation]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
     
        if ($post->image == null) {
            $post->postTranslation()->delete();
            $post->delete();
        }else{
            $post->postTranslation()->delete();
            unlink($post->image);
            $post->delete();
        }
        return redirect('cpanel/admin/post');

    }

    private function uploadeImage(Request $request)
    {
        
        $imageName = time().".png";

        $path ="storage/". $request->file('image')->storeAs('uploads/Post', $imageName, 'public');
    
        return $path;
    }
}
