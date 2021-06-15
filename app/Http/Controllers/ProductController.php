<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Subcategory;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tag;

class ProductController extends Controller
{
    
        public function index(){
            $produits=Product::all();
            $categories=Category::all();
            return view('home',['produits'=>$produits,'categories'=>$categories]);
            
        
    }
    public function article($slug){
        $product= Product::where('slug',$slug)->firstOrFail();
        $categories=Category::all();

        return view('article',['categories'=>$categories])->with('product', $product);
    }
   
    public function subcategory($id){
        $subcategorie=Subcategory::find($id);
        $produits=$subcategorie->produits;

        $categories=Category::all();
        return view('home',['produits'=>$produits,'categories'=>$categories]);
    }
    public function cart()
    {
        $all = session()->get('products', 'default');
        if (is_array($all) && !empty($all)) {
            $total = 0;

            foreach ($all as $key => $a) {
                $self =  Product::find($key);
                $self->quantity = $a;
                $articles[] = $self;
                $total += $self->price * $a;
            }
        } else {
            $articles = [];
            $total = [];
        }
        return view('cart', ['articles' => $articles, 'totale' => $total]);
    }
    public function change(Request $request)
    {
        $validate = $request->validate(['quantity' => ['required', 'numeric', 'between:0,100'], 'id' => ['required', 'numeric']]);
        session(['products.' . $validate['id'] => $validate['quantity']]);
        return redirect()->route('cart');
    }
    public function delete(Request $request)
    {
        $validate = $request->validate(['id' => ['required', 'numeric']]);
        session()->forget('products.' . $validate['id']);
        return redirect()->route('cart');
    }
    public function add(Request $request)
    {
        if (session()->has('products.' . $request->id)) {

            session(['products.' . $request->id => session()->get('products.' . $request->id) + 1]);
        } else {
            session(['products.' . $request->id => 1]);
        }


        return redirect()->route('cart');
    }

    
    

}
