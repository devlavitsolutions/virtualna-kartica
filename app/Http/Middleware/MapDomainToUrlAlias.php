<?php 

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Vcard;
use App\Http\Controllers\VcardController;

class MapDomainToUrlAlias
{
    public function handle(Request $request, Closure $next)
    {
        // let's encrypt pass 
        if (str_contains($request->getPathInfo(), '.well-known/')) {
            return $next($request);
        }

        $domain = $request->getHost();
     
        // check for subdomain (2nd link)
        /* // temp disabled on 22.10.24, luka ask me
        if ($domain === env('ALT_URL_PATH')) {
  
            $vcard = Vcard::where('url_alias', ltrim($request->getPathInfo(), '/'))->first();

            // Check if language change segment exists in the URL
            if (str_contains($request->getPathInfo(), 'language/')) { 
     
                $languageSegment = $request->segment(2);

                if (isset($languageSegment)) {
                    $cookieDomain = $this->getCookieDomain($domain);
                    Cookie::queue('app_vk_language_change', $languageSegment, 60, '/', $cookieDomain);
                }

                return $next($request);
            }
          
            if ($vcard && !str_contains($request->getPathInfo(), 'language/')) {

                $url_alias = trim($vcard->url_alias);
                // Check for the existence of the languageChange cookie
                $languageCookie = $request->cookie('app_vk_language_change');
               
                // \Illuminate\Support\Facades\Log::info('$languageCookie : ' . $languageCookie);
                if (isset($languageCookie)) {
                   session(['languageChange_'.$vcard->url_alias => $languageCookie]);
                }

                $newRequest = Request::create(env('APP_URL') . '/' . $url_alias); // 'https://app.virtualnakartica.com'
                return app()->handle($newRequest);
            } 

            return Redirect::to('https://virtualnakartica.com');
        }
        */
        
        $vcard = Vcard::where('domain', $domain)->first();

        if ($vcard && !str_contains($request->getPathInfo(), 'language/')) {
            $url_alias = trim($vcard->url_alias);
            // Check for the existence of the languageChange cookie
            $languageCookie = $request->cookie('app_vk_language_change');
           
            // \Illuminate\Support\Facades\Log::info('$languageCookie : ' . $languageCookie);
            if (isset($languageCookie)) {
               session(['languageChange_'.$vcard->url_alias => $languageCookie]);
            }

            // Create a new request with the desired URL
            $newRequest = Request::create(env('APP_URL') . '/' . $url_alias); // 'https://app.virtualnakartica.com'

            // Forward the new request internally
            return app()->handle($newRequest);
        } else if ($vcard && str_contains($request->getPathInfo(), 'language/')) { // Check if language change segment exists in the URL
            $languageSegment = $request->segment(2);
            // \Illuminate\Support\Facades\Log::info('$languageSegment: ' . $languageSegment);
            // Set a cookie for language persistence
            if (isset($languageSegment)) {
                $cookieDomain = $this->getCookieDomain($domain);
                Cookie::queue('app_vk_language_change', $languageSegment, 60, '/', $cookieDomain);
            }
        }

        return $next($request);
    }

    private function getCookieDomain($requestDomain)
    {
        // You can implement your logic to determine the appropriate cookie domain here
        // For example, you might want to set the cookie for the top-level domain
        return '.' . $requestDomain;
    }

}

