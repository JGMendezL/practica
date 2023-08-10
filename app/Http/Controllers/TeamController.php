<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //Show all teams
    public function index(){
        return view('teams.index', 
        ['teams'=> Team::latest()->filter(request(['search']))->paginate(4)] );
    }

    //Show one Team
    public function show(Team $team){
        return view('teams.show', [
            "team"=> $team 
        ]);
    }

    //Show create form
    public function create(){
        return view('teams.create');
    }   
    //Store a Team

    public function store(Request $request){
        $formFields = $request->validate([
            'name'=>'required',
            'description'=>['required', 'max:450'],
            'city'=>'required'
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('logos','public');
        }

        $formFields['user_id'] = auth()->id();
        Team::create($formFields);

        return redirect('/teams');
    }

    public function edit(Team $team){

        if($team->user_id != auth()->id()){
            abort('403', 'You can not update this team');
        }
        return view('teams.edit',[
            'team'=> $team
        ]);
    }
    
    public function update(Request $request , Team $team){
        $formFields = $request->validate([
            'name'=>'required',
            'description'=>['required', 'max:450'],
            'city'=>'required'
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('logos','public');
        }
        $team->update($formFields);

        return redirect('/teams');

    }

    public function destroy(Team $team){

        if($team->user_id != auth()->id()){
            abort('403', 'You can not delete this team.');
        }
        $team->delete();  

        return redirect('/teams');
    }
   //Manage teams
   public function manage(){
    return view('teams.manage', [
        'teams'=>auth()->user()->teams()->get()
    ]);
}
}
// Common resources routes
// index - Show all items
// show - Show single item
// store - Create new item
// edit - Edit item
// update - Update item
// destroy - Delete item