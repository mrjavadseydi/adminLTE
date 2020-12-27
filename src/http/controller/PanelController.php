<?php


namespace admin\LTE\http\controller;


use App\Http\Controllers\Controller;

class PanelController extends Controller
{
    public function index()
    {
        return view('adminLTE::index');
    }
}
