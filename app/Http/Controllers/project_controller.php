<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project_model;

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
            'project' => project_model::all()
    
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
        // 
        $this->validate($request,[
            'nama_project' => 'required|min:3|max:10',
            'deskripsi_project' => 'required'
        ]);
        $project = new project_model;
        $project->nama_project = $request->input('nama_project');
        $project->deskripsi_project = $request->input('deskripsi_project');
        $project->save();
        return redirect('/project');
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
        $this->validate($request,[
            'nama_project' => 'required|min:3|max:10',
            'deskripsi_project' => 'required'
        ]);


        $project = project_model::find($id);
        $project->nama_project = $request->input('nama_project');
        $project->deskripsi_project = $request->input('deskripsi_project');
        $project->update();
        return redirect('project');
        // project_model::where('id', $request->id)->update(['nama_project'=>$request->nama_project,
        //  'deskripsi_project'=> $request->deskripsi_project
        // ]);
        
        // return redirect('project');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $post = project_model::find($id);
    //     $post->delete();
    //     return redirect('project')-> with('success','data succesfully removed');   
    //     //
    // }

    public function hapus($id)
    {
        $project = project_model::find($id);
        $project->delete();
        return redirect('project')-> with('success','data succesfully removed');   
        //
    }
}
