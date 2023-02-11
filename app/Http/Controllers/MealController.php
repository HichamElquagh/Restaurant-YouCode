<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Meal;

class MealController extends Controller
{
    //
    

    public function store(Meal $meals , Request $request ){

     $request->validate(
        [
            'name'=>'required',
            'image'=>'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:30000',
            'description'=>'required',
            'date'=>'required',
        ] 
     );
    //  model , controller , route
        $image = $request->file('image');
        // dd($image);
        if (!empty($image)){
              $image_name = time().'.'.$image->getClientOriginalExtension();
            //   dd($image_name);
              $image->move(public_path('images'),$image_name);
            //   dd($image_name);  
              $meals->image=$image_name;
        }
        else {
            $meals->image=$image;
        }
         $meals->create([
            'image' => $image_name,
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,

        ]);
         
    return redirect()->route('dash')->with('success','Meal created successfully.');
    
    
    
    }
    public function edit (Meal $meals , $id){
           
        
          $mealss =$meals->find($id);
        //   dd($mealss);
        
        return view('edit', ['meal' => $mealss]);
   }
   public function update(Meal $meals ,Request $request,$id){

    $request->validate(
        [
            'name'=>'required',
            'image'=>'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:11000',
            'description'=>'required',
            'date'=>'required',
        ] 
        );
        $image = $request->file('image');
        $mealss =$meals->find($id);
            //   dd($mealss);
        if (!empty($image)){
              $image_name = time().'.'.$image->getClientOriginalExtension();
              $image->move(public_path('images'),$image_name);
              $meals->image=$image_name;
              
              $mealss->update([
                'image' => $image_name,
                'name' => $request->name,
                'description' => $request->description,
                'date' => $request->date,
            ]);
        }
        else {
            // $meals->image=$image;
            $mealss->update([
                // 'image' => $image_name,
                'name' => $request->name,
                'description' => $request->description,
                'date' => $request->date,
    
            ]);
        }
        
        
         
    return redirect()->route('dash')->with('success','Meal created successfully.');

   }
   public function showlanding(Meal $meal)
   {
       $mealss = $meal->get();
       return view('welcome', ['meal' => $mealss]);
   }
   public function delete($id, Meal $meals){
    $mealss =$meals->find($id);
    $mealss->delete();
    return redirect()->route('dash')->with('success','Company has been deleted successfully');

   }
}
