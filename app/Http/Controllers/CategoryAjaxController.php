<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class CategoryAjaxController extends Controller
{
    public function index(Request $request)
    {



        if ($request->ajax()) {



            $data = Category::latest()->get();



            return DataTables::of($data)

                ->addIndexColumn()

                ->addColumn('action', function ($row) {



                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';



                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';



                    return $btn;

                })

                ->rawColumns(['action'])

                ->make(true);

        }



        return view('productAjax');

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)
    {

        Product::updateOrCreate(
            [

                'id' => $request->product_id

            ],

            [

                'name' => $request->name,

                'detail' => $request->detail

            ]
        );



        return response()->json(['success' => 'Product saved successfully.']);

    }
}
