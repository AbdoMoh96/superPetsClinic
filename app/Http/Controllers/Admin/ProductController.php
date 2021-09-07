<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\Admin\ProductInterface;
use Illuminate\Http\Request;
use Spatie\Tags\Tag;

class ProductController extends Controller
{
   private $productRepo;

   /*##########Abdelrahman##Mohammed#El-sayed###########
    * ##############FullStack#Web#Developer#############
    * ##########Phone#=>01121226689##Egypt##############
    * ######Email#=>abdo.moh96@outlook.com##############
    * ######github#=>github.com/AbdoMoh96/##############*/

   public function __construct(ProductInterface $repo)
   {
       $this->productRepo = $repo;
   }

   public function index(){
       $products = $this->productRepo->all();
       return view('dashboard.product.index' , compact('products'));
   }

   public function create(){
       $categories = Tag::getWithType('category');
       return view('dashboard.product.create' , compact('categories'));
   }

   public function store(Request $request){
       $this->productRepo->store($request);
       return redirect()->route('admin.product.index')->with('success' , 'product created successfully!!');
   }

   public function edit($product){
       $product = $this->productRepo->getById($product);
       $categories = Tag::getWithType('category');
       $categoryName = $product->tags->first();
       return view('dashboard.product.edit' , compact('product' , 'categories' , 'categoryName'));
   }

   public function update(Request $request){
       $this->productRepo->update($request);
       return redirect()->route('admin.product.index')->with('success' , 'product updated successfully!!');
   }

   public function destroy($product){
       $this->productRepo->delete($product);
   }
}
