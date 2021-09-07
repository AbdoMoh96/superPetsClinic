<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Mail;
use App\Models\Slide;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Product;
use Illuminate\Support\Str;
use Spatie\Tags\Tag;

class StoreController extends Controller
{

/*##########Abdelrahman##Mohammed#El-sayed###########
* ##############FullStack#Web#Developer#############
* ##########Phone#=>01121226689##Egypt##############
* ######Email#=>abdo.moh96@outlook.com##############
* ######github#=>github.com/AbdoMoh96/##############*/

    public function index()
    {
        $homePageSlider = Slider::where('slug' , 'homepage_slider')->first();
        $homePageSlider->load('slides');
        $homePageSlider->slides->load('slide_en' , 'slide_ar');
        $partnersSlider = Slider::where('slug' , 'partners')->first();
        $partnersSlider->load('slides');
        $partnersSlider->slides->load('slide_en' , 'slide_ar');
        $products = Product::where('top' , 1)->where('quantity' , '>' , 0)->get();
        $categories = Tag::getWithType('category');

       return view('store.home' , compact('homePageSlider' , 'partnersSlider' , 'products' , 'categories'));
    }

    public function clinic(){
        $about = About::first();
        $about->load('about_en' , 'about_ar');
        return view('store.info.clinic' , compact('about'));
    }

    public function about(){
        $about = About::first();
        $about->load('about_en' , 'about_ar');
        return view('store.info.about' , compact('about'));
    }

    public function contact(){
        return view('store.info.contact');
    }

    public function contactForm(Request $request){
        $mail = new Mail();
        $mail['fullname'] = $request['fullname'];
        $mail['phone'] = $request['phone'];
        $mail['email'] = $request['email'];
        $mail['message'] = $request['message'];
        $mail->save();

        return redirect()->back()->with('success' , 'thanks for contacting us');
    }

    public function team(){
        $teamSlider = Slider::where('slug' , 'team')->first();
        $teamSlider->load('slides');
        $teamSlider->slides->load('slide_en' , 'slide_ar');
        return view('store.info.team.index' , compact('teamSlider'));
    }

    public function showTeam($id){
       $slide = Slide::where('id' , $id)->firstOrFail();
       $slide->load('slide_en' , 'slide_ar');
       return view('store.info.team.show' , compact('slide'));
    }

    public function products(){
      $products = Product::where('quantity' , '>' , 0)->with('product_en' , 'product_ar')->paginate(10);
      $categories = Tag::getWithType('category');
      return view('store.services.product.index' , compact('products' , 'categories'));
    }

    public function getProduct($product){
        $product = Product::where('slug' , $product)->where('quantity' , '>' , 0)->firstOrFail();
        $product->load('product_en' , 'product_ar' , 'gallery');
        $relatedProducts = Product::where('quantity' , '>' , 0)
            ->withAnyTags([$product->getCategory()] , 'category')
            ->with('product_en' , 'product_ar')->get();
        return view('store.services.product.show' , compact('product' , 'relatedProducts' ));
    }

    public function productSearch(Request $request){
        if(empty($request['title'])){
            return redirect()->route('store.products');
        }
        $title = $request['title'];
        return redirect()->route('store.product.search.get' , $title);
    }

    public function productSearchGet($title){
        $products =  Product::whereHas('product_'.app()->getLocale() , function ($query) use ($title){
            $query->where('title' , 'like' , "%$title%");
        })->where('quantity' , '>' , 0)->with('product_en' , 'product_ar')->paginate(10);
        $categories = Tag::getWithType('category');
        return view('store.services.product.index' , compact('products' , 'categories'));
    }

    public function category(Request $request){
        if(empty($request['categories'])){
            return redirect()->route('store.products');
        }
        $categories = implode('&' , $request['categories']);
        return redirect()->route('store.products.categories.get' , $categories);
    }

    public function categoryGet($categories){
        $categories = explode('&' , $categories);
        $products = Product::where('quantity' , '>' , 0)
                    ->withAnyTags($categories , 'category')
                    ->with('product_en' , 'product_ar')->paginate(10);
        $categories = Tag::getWithType('category');
        return view('store.services.product.index' , compact('products' , 'categories'));
    }

    public function appointment(){
        return view('store.services.appointment');
    }

    public function appointmentForm(Request $request){
        $appointment = new Appointment();
        $appointment['fullname'] = $request['fullname'];
        $appointment['phone'] = $request['phone'];
        $appointment['email'] = $request['email'];
        $appointment['message'] = $request['message'];
        $appointment->save();
        return redirect()->back()->with('success' , 'thanks for reserving an appointment will contact you shortly!!');
    }



}
