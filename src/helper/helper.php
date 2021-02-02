<?php
if (!function_exists('sview')){
    function sview($view = null, $data = [], $mergeData = []){
        if (view()->exists(resource_path('adminLTE.'.$view))) {
            return view('adminLTE.'.$view, $data = [], $mergeData = []);
        }else{
            return view('adminLTE::'.$view, $data = [], $mergeData = []);
        }
    }
}
