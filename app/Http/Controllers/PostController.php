<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Post Display
     * @param NA
     * @return view
     */
    public function index()
    {
        $posts = Post::paginate(10);
        return view('index', compact('posts'));
    }

    /**
     * Create Post
     * @param NA
     * @return view
     */
    public function create()
    {
        return view('create-post');
    }

    /**
     * Store Post
     * @param request
     * @return response
     */
    public function store(Request $request)
    {
        $postRequest = array(
            "title" => $request->title,
            "description" => $request->description
        );

        $post = Post::create($postRequest);

        if ($post) {
            return back()->with("success", "Success! Post created");
        } else {
            return back()->with("failed", "Failed! Post not created");
        }
    }

    /**
     * Upload image
     * @param request
     * @param response
     */
    public function uploadImage(Request $request)
    {
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('upload')->move('public/uploads', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('public/uploads/'.$filenametostore);
            $message = 'File uploaded successfully';
            $result = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$message')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $result;
        }
    }
}