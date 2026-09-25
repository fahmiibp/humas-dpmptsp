<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;



class ActivityController extends Controller
{


    public function index()
    {

        $activities = Activity::with([
            'category',
            'documentations'
        ])
        ->latest()
        ->paginate(10);



        return response()->json([

            'status'=>true,

            'message'=>'List kegiatan',

            'data'=>$activities

        ]);

    }





    public function show(Activity $activity)
    {


        $activity->load([

            'category',
            'documentations',
            'files'

        ]);



        return response()->json([

            'status'=>true,

            'data'=>$activity

        ]);

    }





    public function search(Request $request)
    {


        $keyword = $request->keyword;



        $activities = Activity::with('category')

        ->where(
            'title',
            'LIKE',
            "%{$keyword}%"
        )

        ->orWhere(
            'location',
            'LIKE',
            "%{$keyword}%"
        )

        ->paginate(10);



        return response()->json([

            'status'=>true,

            'data'=>$activities

        ]);

    }





    public function filter(Request $request)
    {


        $activities = Activity::query();



        if($request->start_date)
        {

            $activities->whereDate(

                'start_date',

                '>=',

                $request->start_date

            );

        }



        if($request->end_date)
        {

            $activities->whereDate(

                'end_date',

                '<=',

                $request->end_date

            );

        }



        return response()->json([

            'status'=>true,

            'data'=>$activities
                ->latest()
                ->paginate(10)

        ]);

    }


}