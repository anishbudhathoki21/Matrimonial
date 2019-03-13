<?php

namespace App\Http\Controllers;
use App\User;
use DB;

use Illuminate\Http\Request;

class MatchMaking extends Controller
{
	public function index()
	{
		return view('matchmaking');
	}
	public function action(Request $request)
	{
		// if($request->ajax())
		// {
		// 	$query=$request-get('query');
		// 	if($query!='')
		// 	{
		// 		$data=DB::table('users')
		// 			->where('name','like','%'.$query.'%')
		// 			->orWhere('religion','like','%'.$query.'%')
		// 			->orWhere('address','like','%'.$query.'%')
		// 			->orderBy('id','desc')
		// 			->get();
		// 	}
		// 	else
		// 	{
		// 		$data=DB::table('users')
		// 				->orderBy('id','desc')
		// 				->get();
		// 	}
		// 	$total_row=$data->count();
		// 	if($total_row>0)
		// 	{
		// 		foreach($data as $row)
		// 		{
		// 			$output.='
		// 			<tr>
		// 			<td>'.$row->name.'</td>
		// 			<td>'.$row->religion.'</td>
		// 			<td>'.$row->address.'</td>
		// 			</tr>';
					
		// 		}
		// 	}
		// 	else
		// 	{
		// 		$output='<tr>
		// 		<td align="center">No data</td>
		// 		</tr>';
				
		// 	}
		// 	$data=array(
		// 		'table_data' => $output,
		// 		'total_data'=> $total_data
		// 	);
		// 	echo json_encode($data);
		// }
	}

	
}
