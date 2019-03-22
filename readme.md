# Laravel Chart Project
<p align="center"><img src="https://i.ibb.co/hmQF0S9/charts.png"/></p>


### Package used
`composer require consoletvs/charts:5.*`


You can change your design from `LaravelCharts\app\Http\Controller\ChartController.php`


#  Line Chart

```
 $products = Product::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();
 $chart = Charts::database($products, 'line', 'highcharts')
             ->title('Product Details')
             ->elementLabel('Total Products')
             ->dimensions(1000, 500)
             ->groupByMonth(date('Y'), true);
return view('charts', ['chart' => $chart]);
```


# Area Chart

```
$products = Product::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();
 $chart = Charts::database($products, 'area', 'highcharts')
             ->title('Product Details')
             ->elementLabel('Total Products')
             ->dimensions(1000, 500)
             ->groupByMonth(date('Y'), true);
return view('charts', ['chart' => $chart]);
```

# Donut Chart

```
 $products = Product::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();
 $chart = Charts::database($products, 'donut', 'highcharts')
             ->title('Product Details')
             ->elementLabel('Total Products')
             ->dimensions(1000, 500)
             ->colors(['red', 'green', 'blue', 'yellow', 'orange', 'cyan', 'magenta'])
             ->groupByMonth(date('Y'), true);
return view('charts', ['chart' => $chart]);
```

Just a fun project.If you need any help [Ping Me](https://facebook.com/r.sark4r).
