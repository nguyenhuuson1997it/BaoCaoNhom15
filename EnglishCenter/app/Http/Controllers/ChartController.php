<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Charts;

use App\Product;

use App\Cate;

use DB;

class ChartController extends Controller
{
    
	public function index(){
		//Chart course
        $product = Product::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
    				->get();
        $chartproduct = Charts::database($product, 'bar', 'highcharts')
			      ->title(" Monthly new Courses ")
			      ->elementLabel("Total Courses")
			      ->dimensions(400, 400)
			      ->responsive(true)
			      ->groupByMonth(date('Y'), true);

		//Chart cate	      
		$cate = DB::table('cates')
				->join('products','products.cate_id','=','cates.id')
				->select('cates.name', DB::raw('count(*) as total'))
				->groupBy('cates.name')
				->get();
		$chartcate = Charts::create('pie', 'highcharts')
			    ->title('Courses of the Categories ')
			    ->labels($cate->pluck('name'))
			    ->values($cate->pluck('total'))
			    ->dimensions(500,0)
			    ->responsive(false);
        return view('admin.statistics.statistics',compact('chartproduct','chartcate'));
    }

}
