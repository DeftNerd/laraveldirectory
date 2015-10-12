<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Category;

class CategoryController extends Controller {


  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $categories = Category::orderBy('weight', 'asc')->orderBy('name', 'asc')->get();
    return view('admin.categories.index', ['categories' => $categories]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('admin.categories.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $category = new Category;
    $category->name = $request->name;
    $category->description = $request->description;
    $category->weight = $request->weight;
    $category->save();
    return redirect('/')->with('status', 'Category Created');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $data = Category::findBySlug($id);
    return view('admin.categories.edit', ['category' => $data]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
   public function update(Request $request, $id)
   {
     $category = Category::findBySlug($id);

     $category->name = $request->name;
     $category->description = $request->description;
     $category->weight = $request->weight;
     $category->save();

     return redirect('/')->with('status', 'Category Updated');

   }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $category = Category::findBySlug($id);
    $category->delete();
    return redirect('/')->with('status', 'Category Deleted');
  }

}

?>
