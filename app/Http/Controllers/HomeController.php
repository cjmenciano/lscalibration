<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\RequestQuoteMail;
use App\Mail\ThankQuoteMail;
use App\Mail\ContactUsMail;
use App\Mail\ThankContactUsMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class HomeController extends Controller
{
    // Handles GET request
    public function index()
    {
        $item_clients = DB::table('clients')->get();
        return view('index', compact('item_clients'));
    }

    public function about()
    {
        return view('about');
    }

    public function iso()
    {
        return view('iso');
    }

    public function services()
    {
        return view('services');
    }

    public function quote()
    {
        return view('quote');
    }

    public function products()
    {
        $item_category = DB::table('categories')->get();
        return view('products.products', compact('item_category'));
    }

    public function showProductCategory($categorySlug)
    {
        // You can generate a URL with the slug dynamically
        //$url = route('category-page', ['categorySlug' => $categorySlug]); // This assumes you have a route named 'slug.page'

        $id = DB::table('categories')
        ->select('id')
        ->where('slug', $categorySlug);

        $page_name = DB::table('categories')
            ->select('name','slug')
            ->where('slug', $categorySlug)
            ->get();

        $item_category = DB::table('tags')
        ->where('category_id', $id)
        ->get();
        
        return view('products.categoryPage', compact('page_name', 'item_category', 'categorySlug'));
        //return view('products.categoryPage', compact('url', 'categorySlug'));
        //return redirect()->route('slug.page', ['slug' => $slug]);
    }

    public function showSubProductCategory($subCategorySlug)
    {
        // You can generate a URL with the slug dynamically
        //$url = route('category-page', ['categorySlug' => $categorySlug]); // This assumes you have a route named 'slug.page'

        $id = DB::table('tags')
        ->select('id')
        ->where('slug', $subCategorySlug);

        $page_name = DB::table('tags')
            ->select('name','slug')
            ->where('slug', $subCategorySlug)
            ->get();

        $item_subCategory = DB::table('products')
        ->where('tag_id', $id)
        ->get();

        $category_id = DB::table('tags')
        ->select('category_id')
        ->where('slug', $subCategorySlug);

        $categories = DB::table('categories')
        ->select('id', 'name', 'slug')
        ->where('id', $category_id)
        ->get();
        
        return view('products.subCategoryPage', compact('page_name', 'item_subCategory', 'categories'));
        //return view('products.categoryPage', compact('url', 'categorySlug'));
        //return redirect()->route('slug.page', ['slug' => $slug]);
    }

    public function trainingprograms()
    {
        $training_type = DB::table('trainings')
            ->select('training_type')
            ->groupBy('training_type')
            ->get();

        $trainings = DB::table('trainings')
            ->select('code', 'title','training_type')
            ->orderBy('training_type')
            ->get();
        return view('trainingprograms', compact('trainings', 'training_type'));
    }

    public function faq()
    {
        $faq = DB::table('faqs')->get();
        return view('faq', compact('faq'));
    }

    public function contact()
    {
        $item_company_details = DB::table('company_details')->get();
        return view('contact', compact('item_company_details'));
    }

    public function subCategory()
    {
        return view('products.sub-category-page');
    }

    // End of Handles GET request

    // Handles POST request

    public function handleFormQuote(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'companyName' => 'required|string|max:150',
            'companyAddress' => 'required|string|max:150',
            'phoneNumber' => 'required|numeric',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $filePath = public_path('/img/logo.png');

        // Process the data (e.g., save to database)
        // Example: Model::create($validated);

        // Send the email
        Mail::to('ls.calibrationservices@gmail.com')->send(new RequestQuoteMail($validated, $filePath));
        Mail::to($validated['email'])->send(new ThankQuoteMail($validated, $filePath));

        //return response()->json(['message' => 'Request sent successfully!']);
        return redirect()->back()->with('success', 'Request sent successfully!');
    }

    public function handleFormContact(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phoneNumber' => 'required|numeric',
            'subject' => 'required|string|max:150',
            'message' => 'required|string',
        ]);

        $filePath = public_path('/img/logo.png');

        // Process the data (e.g., save to database)
        // Example: Model::create($validated);

        // Send the email
        Mail::to('ls.calibrationservices@gmail.com')->send(new ContactUsMail($validated, $filePath));
        Mail::to($validated['email'])->send(new ThankContactUsMail($validated, $filePath));

        //return response()->json(['message' => 'Message sent successfully!']);
        return redirect()->back()->with('success', 'Message sent successfully!!');
    }

    // End of Handles POST request
}
