<?php

namespace App\Http\Middleware\Settings;

use Closure;
use Illuminate\Http\Request;
use App\Models\Setting;
class Store
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $setting = Setting::first();
        if (!$setting->active){
            abort(503);
        }

        if(session()->has('store.lang')) {
            app()->setLocale(session()->get('store.lang'));
        }else{
            app()->setLocale($setting->lang);
        }
        return $next($request);
    }
}
