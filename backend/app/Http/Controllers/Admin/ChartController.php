<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chart;
use Illuminate\Http\Request;

class ChartController extends Controller
{

    //api route methods start
    public function onAllSelect()
    {
        $result = Chart::all();
        return $result;

    } //end method

    //api route method end

    //web route method start

    public function allChartContent()
    {
        $chart = Chart::all();
    	return view('backend.chart.all_chart',compact('chart'));

    } //end method

    public function editChart($id)
    {
        $chartEdit = Chart::findOrFail($id);
    	return view('backend.chart.edit_chart',compact('chartEdit'));

    } //end method

    public function updateChart(Request $request)
    {
        $chart_id = $request->id;

    	Chart::findOrFail($chart_id)->update([
    		'x_data' => $request->x_data,
    		'y_data' => $request->y_data,
    	]);

    	 $notification = array(
    		'message' => 'Chart Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('all.chart.content')->with($notification);

    } //end method
}
