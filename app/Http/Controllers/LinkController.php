<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Twitter;
use App\Link;
use App\Category;

class LinkController extends Controller {

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
    $links = Link::orderBy('category_id', 'asc')->orderBy('weight', 'asc')->orderBy('name', 'asc')->get();
    return view('admin.links.index', ['links' => $links]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $categories = Category::all()->lists('name', 'slug');
    return view('admin.links.create', ['categories' => $categories]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $category = Category::findBySlug($request->get('category_slug'));

    $data = [
      'name' => $request->name,
      'weight' => $request->weight,
      'url' => $request->url,
      'description' => $request->description,
      'category_id' => $category->id,
    ];

    Link::create($data);

    $status = 'Just added \'' . $data['name'] . '\' to ' . $category->name;

    Twitter::postTweet(['status' => $status, 'format' => 'json']);
    return redirect('/category/' . $category->slug)->with('status', 'Link Added');
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
    $data = Link::findBySlug($id);
    $category = Category::findOrFail($data->category_id);
    $categories = Category::all()->lists('name', 'slug');
    return view('admin.links.edit', ['link' => $data, 'categories' => $categories, 'category_slug' => $category->slug]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {
    $link = Link::findBySlug($id);

    $category = Category::findBySlug($request->get('category_slug'));

    $link->name = $request->name;
    $link->weight = $request->weight;
    $link->url = $request->url;
    $link->description = $request->description;
    $link->category_id = $category->id;
    $link->save();
    return redirect('/category/' . $category->slug)->with('status', 'Link Updated');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $link = Link::findBySlug($id);
    $category = Category::findBySlug($request->get('category_slug'));

    $link->delete();
    return redirect('/category/' . $category->slug)->with('status', 'Link Deleted');
  }

}

?>
