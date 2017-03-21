<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;

class YoutubeRankCheckerController extends Controller
{
	public function getForm(){
		return view('youtube-rank-checker.form');
	}

	public function postForm(Request $request){
		$keyword = $request->input('keyword');
		$url = $request->input('url');

		return redirect('/');
	}
}
