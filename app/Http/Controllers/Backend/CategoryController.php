<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use Illuminate\Http\Request;
use Exception;
use File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category:: paginate(10);
        return view('backend.categories.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $category = new Category();
            $category->category_id=$request->category_id;
            $category->name=$request->name;
        
        if($category->save())
        return redirect()->route('categories.index')->with('success','Successfully saved');
    else
    return redirect()->back()->withInput()->with('error','Please try again');
    }catch(Exception $e){
        dd($e);
        return redirect()->back()->withInput()->with('error', 'Plese try again');
            }
    }
    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
    $category = Category::findOrFail(encryptor('decrypt', $id));
    return view('backend.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        try{
            $category = Category::findOrFail(encryptor('decrypt', $id));
            $category = new Category();
            $category->category_id=$request->category_id;
            $category->name=$request->name;
         
        if($category->save())
        return redirect()->route('categories.index')->with('success','Successfully saved');
    else
    return redirect()->back()->withInput()->with('error','Please try again');


    }catch(Exception $e){
        return redirect()->back()->withInput()->with('error', 'Plese try again');
            }
        }
        
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail(encryptor('decrypt',$id));
        if($category->delete()){
            print_r($category);
            return redirect()->back();
        }
    }
}
