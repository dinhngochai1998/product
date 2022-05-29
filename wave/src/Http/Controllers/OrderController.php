<?php
/**
 * @Author Admin
 * @Date   May 29, 2022
 */

namespace Wave\Http\Controllers;

class OrderController extends \App\Http\Controllers\Controller
{
    public function index() {

        return view('product.order');
    }
}