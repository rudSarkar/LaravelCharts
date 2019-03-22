<?php

namespace App\Http\Controllers;

use App\Charts\SampleChart;
use Illuminate\Http\Request;
use App\Product;
use Charts;
use DB;

class ChartController extends Controller
{
    public function index()
    {
        $products = Product::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();
        $chart = Charts::database($products, 'pie', 'highcharts')
                     ->title('Product Details')
                     ->elementLabel('Total Products')
                     ->dimensions(1000, 500)
                     ->colors(['red', 'green', 'blue', 'yellow', 'orange', 'cyan', 'magenta'])
                     ->groupByMonth(date('Y'), true);
        return view('charts', ['chart' => $chart]);
    }
}