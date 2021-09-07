<?php


namespace App\Repositories\Admin;


use App\Interfaces\Admin\ProductInterface;
use App\Models\Lang\ProductLang;
use App\Models\Product;
use App\Models\ProductImages;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Spatie\Tags\Tag;

class ProductRepository implements ProductInterface
{

    public function all()
    {
      return Product::orderBy('created_at' , 'desc')->paginate(10);
    }

    public function getByTitle($title)
    {
        return Product::whereHas('product_'.app()->getLocale() , function ($query) use ($title){
            $query->where('title' , 'like' , "%$title%");
        })->with('product_en' , 'product_ar')->paginate(10);
    }

    public function getByCode($code)
    {
        return Product::where('code' , $code)->first();
    }

    public function getById($id)
    {
        $product = Product::find($id);
        $product->load('product_en' , 'product_ar');
        return $product;
    }

    public function store($data)
    {
       $product = new Product();
       $product['code'] = '#'.Str::random(4).time();
       $product['admin_id'] = Auth::guard('admin')->user()->id;
       $product['slug'] = Str::slug($data['title'] , '_');
       $product['price'] = $data['price'];
       $product['quantity'] = $data['quantity'];
       $product['thumbnail'] = $data['thumbnail'];
        if ($data['top']) {
            $product['top'] = 1;
        }else{
            $product['top'] = 0;
        }
       $product->save();

        if ($data['category']) {
            $product->tags()->sync($data['category']);
        }


       if($data['gallery']){
           foreach ($data['gallery'] as $path){
               $path = Str::remove(['[' , ']' , '"' , '\\'] , $path);
               $image = new ProductImages();
               $image['product_id'] = $product['id'];
               $image['path'] = $path;
               $image->save();
           }
       }

       $productEn = new ProductLang();
       $productEn['product_id'] = $product['id'];
       $productEn['lang'] = 'en';
       $productEn['title'] = $data['title'];
       $productEn['subtitle'] = $data['subtitle'];
       $productEn['description'] = $data['description'];
       $productEn->save();

        $productAr = new ProductLang();
        $productAr['product_id'] = $product['id'];
        $productAr['lang'] = 'ar';
        $productAr['title'] = $data['title_ar'];
        $productAr['subtitle'] = $data['subtitle_ar'];
        $productAr['description'] = $data['description_ar'];
        $productAr->save();
    }

    public function update($data)
    {
        $product = Product::find($data['id']);
//        $product['code'] = '#'.Str::random(4).time();
//        $product['admin_id'] = Auth::guard('admin')->user()->id;
        $product['slug'] = Str::slug($data['title'] , '_');
        $product['price'] = $data['price'];
        $product['quantity'] = $data['quantity'];
        if($data['thumbnail']) {
            $product['thumbnail'] = $data['thumbnail'];
        }
        if ($data['top']) {
            $product['top'] = 1;
        }else{
            $product['top'] = 0;
        }
        $product->update();

        if ($data['category']) {
            $product->tags()->sync($data['category']);
        }

        if(count($data['gallery']) >= 2){
            $product->gallery()->delete();
            foreach ($data['gallery'] as $path){
                $path = Str::remove(['[' , ']' , '"' , '\\'] , $path);
                $image = new ProductImages();
                $image['product_id'] = $product['id'];
                $image['path'] = $path;
                $image->save();
            }
        }

        $productEn =  $product->product_en;
        $productEn['product_id'] = $product['id'];
        $productEn['lang'] = 'en';
        $productEn['title'] = $data['title'];
        $productEn['subtitle'] = $data['subtitle'];
        $productEn['description'] = $data['description'];
        $productEn->update();

        $productAr = $product->product_ar;
        $productAr['product_id'] = $product['id'];
        $productAr['lang'] = 'ar';
        $productAr['title'] = $data['title_ar'];
        $productAr['subtitle'] = $data['subtitle_ar'];
        $productAr['description'] = $data['description_ar'];
        $productAr->update();
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
    }
}
