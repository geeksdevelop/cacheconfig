<?php

namespace Geeksdevelop\Cacheconfig\Middleware;

use DB;
use Cache;
use Closure;

class CacheConfigMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Cache::has(config('config.key'))) { 
            $env = Cache::get(config('config.key'));
        } else {
            $datas = $this->getData();
            foreach ($datas as $data) {
                $env[$data->key] = $data->value;
            }
           Cache::forever(config('config.key'), $env);
        }
        config(['app.config' => $env]);

        return $next($request);
    }

    public function getData()
    {
        if (count(config('config.filters')) == 0)
            return DB::table(config('config.table'))->get();

        return DB::table(config('config.table'))->where(config('config.filters'))->get();
    }
}
