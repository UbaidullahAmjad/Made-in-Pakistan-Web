<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Buyer;
use App\Models\Order;
use App\Models\Product;
use App\Models\Seller;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SuperAdminDashboardController extends Controller
{
    public function index(){
        $customers = Buyer::all();
        $sellers = Seller::all();
        $orders =  Order::all();
        $products = Product::take(7)->get();
        $subcat = SubCategory::take(5)->get();
        return view('backend.superadmin.dashboard', compact('sellers', 'customers', 'orders', 'products', 'subcat'));
    }
}
