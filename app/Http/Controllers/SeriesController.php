<?php

namespace App\Http\Controllers;

#use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\SeriesRequest;
use App\Series;

class SeriesController extends Controller
{
    public function __construct()
	{
		$this->middleware('middleware-aut');	
	}
	
	public function listar()
	{
		$series = Series::all(); 
		return view('series.listar')->with('series',$series);
	}
	
	
	public function nova()
	{
		return view('series.form');
	}
	
	public function adiciona(SeriesRequest $request)
	{
		Series::create($request->all());
		return redirect()->action('SeriesController@listar')->withInput(Request::only('serie'));
	}
	
	public function atualiza($id)
	{
		$series = series::find($id);
		
		return view('series.atualiza')->with('s',$series);
	}
	

	
	public function remove($id)
	{
		$series = Series::find($id);
		$series->delete();
		return redirect()->action('SeriesController@listar');
	}
	
	public function alterar()
	{
		$params = Request::all();
		$series = Series::find($params['id']);
		$series->update($params);
		return redirect()->action('SeriesController@listar');
	}
}
