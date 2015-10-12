<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Link;
use Mail;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
    		$categories = Category::orderBy('weight', 'asc')->orderBy('name', 'asc')->get();
		return view('welcome', ['categories' => $categories]);
	}


  /**
   * Display a listing of the links in this category
   *
   * @return Response
   */
  public function listCategory($id)
  {
		$category = Category::findBySlug($id);
		$links = Link::where('category_id', '=', $category->id)->orderBy('weight', 'asc')->orderBy('name', 'asc')->get();
    return view('listcategory', ['links' => $links, 'category' => $category]);
  }

  public function contact()
  {
	return view('contact');
  }

  public function contactSend(Request $request)
  {
	$data = [
       		'name' => $request->get('name'),
		'email' => $request->get('email'),
		'user_message' => $request->get('user_message')
	];

	Mail::send('contactemail', $data, function($message) {
		$message->from(env('MAIL_FROM'));
		$message->to(env('MAIL_TO'));
		$message->subject('LaravelDirectory Message');
	});

	return view('contact')->withFlashSuccess("Message Sent.");

  }

  public function about()
  {
        return view('about');
  }

}
