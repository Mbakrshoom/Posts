<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class postController extends Controller
{
    //
    public function loadposts(){
        $allpost=Post::all();
        return view('post', compact('allpost'));
    }
    public function loadadduserform(){
        return view('add_user');
    }
    public function AddUser(Request $request){
        $request->validate(
            [
                'title'=>'required',
                'desciption'=>'required',
            ]

            );
            try{
                $new_post=new Post;
                $new_post->title=$request->title;
                $new_post->desciption=$request->desciption;
                $new_post->save();
                return redirect('/post')->with('sccuess','User Added Succsefuly');

            }
            catch(\Exception $e){
                return redirect('/add/post')->with ('fail',$e->getMessage());

            }
          
    }
    public function EditUser (Request $request){
        $request->validate(
            [
                'title'=>'required',
                'desciption'=>'required',
            ]

            );
            try{
                //update posts
               $update_post=Post::where('id',$request->post_id)-> update(
                [
                    'title'=>$request->title,
                    'desciption'=>$request->desciption,

                ]
               );
                return redirect('/post')->with('sccuess','User update Succsefuly');

            }
            catch(\Exception $e){
                return redirect('/add/post')->with ('fail',$e->getMessage());

            }
        }
    public function LoadEditForm($id){
        $post=Post::find($id);
        return view('edit-post',compact('post'));

    }
    public function DeleteUserForm($id){
        try {
            Post::where('id',$id)->delete();
            return redirect('/post')->with('sccuess','User delete Succsefuly');
        } catch (\Exception $e) {
            return redirect('/edit/post')->with ('fail',$e->getMessage());
            
        }

    }
}
