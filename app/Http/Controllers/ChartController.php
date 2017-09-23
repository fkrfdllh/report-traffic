<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logs;
use Charts;

class ChartController extends Controller
{
    public function index($month = null) {
        if($month) {
            $user_agent = Charts::database(Logs::whereMonth('created_at', '=', $month)->get(), 'bar', 'highcharts')
            ->title('User Agent')
            ->elementLabel("User Agent")
            ->dimensions(1300, 500)
            ->responsive(false)
            ->groupBy('user_agent');

            $url = Charts::database(Logs::whereMonth('created_at', '=', $month)->get(), 'bar', 'highcharts')
            ->title('URL')
            ->elementLabel("URL")
            ->dimensions(1300, 500)
            ->responsive(false)
            ->groupBy('url');

            $http_host = Charts::database(Logs::whereMonth('created_at', '=', $month)->get(), 'bar', 'highcharts')
            ->title('HTTP Host')
            ->elementLabel("HTTP Host")
            ->dimensions(1300, 500)
            ->responsive(false)
            ->groupBy('http_host');
        } else {
            $user_agent = Charts::database(Logs::all(), 'bar', 'highcharts')
            ->title('User Agent')
            ->elementLabel("User Agent")
            ->dimensions(1300, 500)
            ->responsive(false)
            ->groupBy('user_agent');


            $url = Charts::database(Logs::all(), 'bar', 'highcharts')
            ->title('URL')
            ->elementLabel("URL")
            ->dimensions(630, 500)
            ->responsive(false)
            ->groupBy('url');


            $http_host = Charts::database(Logs::all(), 'bar', 'highcharts')
            ->title('HTTP Host')
            ->elementLabel("HTTP Host")
            ->dimensions(630, 500)
            ->responsive(false)
            ->groupBy('http_host');
        }

    	$user_agent = Charts::database(Logs::all(), 'bar', 'highcharts')
    	->title('User Agent')
    	->elementLabel("User Agent")
    	->dimensions(1300, 500)
    	->responsive(false)
    	->groupBy('user_agent');


		$url = Charts::database(Logs::all(), 'bar', 'highcharts')
		->title('URL')
    	->elementLabel("URL")
    	->dimensions(630, 500)
    	->responsive(false)
    	->groupBy('url');


		$http_host = Charts::database(Logs::all(), 'bar', 'highcharts')
		->title('HTTP Host')
    	->elementLabel("HTTP Host")
    	->dimensions(630, 500)
    	->responsive(false)
    	->groupBy('http_host');

		return view('welcome')->with('user_agent', $user_agent)->with('url', $url)->with('http_host', $http_host)->with('month', $month);
    }

    public function send(Request $request) {
        # code...
    }
}
