<?php
    
namespace App\Http\Controllers;
    
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Library\Common;
use DB;
use Illuminate\Contracts\Auth\Guard;
    
class ProductController extends Controller
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // $products = Product::latest()->paginate(5);
          
        // return view('products.index', compact('products'));

        $productsData = Product::select('id', 'name', 'status')->get();

        $productsData->each(function ($product) {
            $product->name = $product->name;
        });

        return view('products.index', compact('productsData'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('products.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request): RedirectResponse
    {   
        // Product::create($request->validated());
           
        // return redirect()->route('products.index')
        //                  ->with('success', 'Product created successfully.');

        // dd($this->auth->id());
        DB::beginTransaction();
        try {
                $request['created_by'] = $this->auth->id();
                $request['name'] = $request['name'];
                Product::create($request->all());
                DB::commit();
                // dd($request);
                return redirect()->route('products.index')
                ->with('flash_message_success', config('constants.SPECIALITY_ADD'));
           
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->route('products.create')
            ->with('flash_message_error', config('constants.SOME_THING_WRONG'));
        }
    }
  
   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        // return view('products.edit',compact('product'));
        $productData = Product::find($id);
        $productData->name = $productData->name;
        return view('products.edit', compact('productData'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdateRequest $request, $id): RedirectResponse
    {
        // $product->update($request->validated());
          
        // return redirect()->route('products.index')
        //                 ->with('success','Product updated successfully');

        DB::beginTransaction();
        try {

            $products = Product::find($id);
            $request['name'] = $request['name'];
            $request['updated_by'] = $this->auth->id();
            // dd(8);
            $products->update($request->all());
            DB::commit();
            return redirect()->route('products.index')
            ->with('flash_message_success', config('constants.SPECIALITY_UPDATE'));
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->route('products.edit', $id)
            ->with('flash_message_error', config('constants.SOME_THING_WRONG'));
        }
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        // $product->delete();
           
        // return redirect()->route('products.index')
        //                 ->with('success','Product deleted successfully');
        
        DB::beginTransaction();
        try {
            $products = Product::find($request->id);
            $products->delete();

            DB::commit();

            return redirect()->route('products.index')
            ->with('flash_message_success',config('constants.SPECIALITY_DELETE'));
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->route('products.index')
            ->with('flash_message_error', config('constants.SOME_THING_WRONG'));
        }
    }
}