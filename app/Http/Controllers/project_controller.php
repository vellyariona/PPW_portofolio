<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project_model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



class project_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return Post::All();
        $data = array(
            'id' => "project",
            'project' => project_model::orderBy('created_at', 'desc')->paginate(10)
    
        );
        // return view('posts.index')->with($data);
        return view('project.project')->with($data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //tambah validasi
        //misalkan title dan deskripsi harus diisi
        // $this->validate($request, [
        //     'title' => 'required|max:255',
        //     'description' => 'required',
        //     'picture' => 'image|nullable|max:1999'
        // ]);
        

        if ($request->hasFile('picture')){
            //ada file yang diupload
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('picture')->storeAs('public/posts_image', $filenameSimpan);
        } else{
            //tidak ada file yang diupload
           $filenameSimpan = 'noimage.png';
        }

        $project = new project_model;
        $project->picture = $filenameSimpan;
        $project->nama_project = $request->input('nama_project');
        $project->deskripsi_project = $request->input('deskripsi_project');
        $project->save();

        return redirect('project');


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
        // return Post::find($id);
        $data = array(
            'id' => "project",
            // 'project' => project::find($id)
            'project' => project_model::find($id)
        );
        return view('project.show')->with($data);
        // return view('project.project')->with($data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array('id' => "project" ,
        'project'=> project_model::find($id) 
        );
        return view('project.edit')->with($data);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //request dari view, dan id dari primary key
    {
        // Post::where('id', $request->id)->update(['title'=>$request->title,
        //  'description'=> $request->description
        // ]);
        Post::where('id', $request->id)->update(['nama_project'=>$request->nama_project,
         'deskripsi_project'=> $request->deskripsi_project
        ]);
        
        return redirect('project');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {// post diganti project?
        $project = project_model::find($id);
        $project->delete();
        return redirect('project')-> with('success','data succesfully removed');   
        File::delete(public_path() . '/public/posts_image/' . $project->picture);
        //
    }

    //tambahan:
    public function __construct()
    {
    $this->middleware('auth', ["except" => ["index", "show", "project"]]);
    }
};
