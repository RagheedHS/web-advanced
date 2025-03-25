<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    
    public function index(Request $request)
    {        
        $size = $request->query('size')?$request->query('size'):12;
        $sorting = $request->query('sorting')?$request->query('sorting'):'default';	
        $f_brands = $request->query('brands');	
        $brands = Brand::orderBy('name','ASC')->get();


        if($sorting=='date')   
        {
            $products = Product::where(function($query) use ($f_brands){
                                    $query->whereIn('brand_id',explode(',',$f_brands))->orWhereRaw("'".$f_brands."' = ''");
                                })							
                                ->orderBy('created_at','DESC')->paginate($size);  
        }
        else if($sorting=="price")
        {
            $products = Product::where(function($query) use ($f_brands){
                $query->whereIn('brand_id',explode(',',$f_brands))->orWhereRaw("'".$f_brands."' = ''");
            })		
            ->orderBy('regular_price','ASC')->paginate($size); 
        }
        else if($sorting=="price-desc")
        {
            $products = Product::where(function($query) use ($f_brands){
                $query->whereIn('brand_id',explode(',',$f_brands))->orWhereRaw("'".$f_brands."' = ''");
            })		
            ->orderBy('regular_price','DESC')->paginate($size); 
        }
        else{
            $products = Product::where(function($query) use ($f_brands){
                $query->whereIn('brand_id',explode(',',$f_brands))->orWhereRaw("'".$f_brands."' = ''");
            })		
            ->paginate($size);  
        }           	
        return view('shop',compact("products","size","sorting","brands","f_brands"));
    }   
    public function product_details($product_slug)
    {
        $product = Product::where("slug",$product_slug)->first();
        $products = Product::where("slug","<>",$product_slug)->get()->take(8);
        return view('details',compact("product","products"));
    }
    

   
}
