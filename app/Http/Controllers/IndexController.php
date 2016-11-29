<?php
/**
 * Created by PhpStorm.
 * User: swr2d2
 * Date: 28/11/2016
 * Time: 21:41
 */

namespace CodeAgenda\Http\Controllers;


class IndexController extends Controller
{
    public function index()
    {
        return view('layout');
    }
}