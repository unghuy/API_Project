<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Categories;
class ProductsController extends Controller
{
      /**
     * The product repository instance.
     */

      /**
      * Create a new controller instance.
      *
      * @param  ProductsController  $product
      * @return void
      */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //  //Create Response jon_encode
    // public function res_je($err_code, $err_msg = '', $result = [], $http_code = 200)
    // {
    //      header('Content-Type: application/json');
    //      http_response_code($http_code);
    //      return json_encode([
    //          'error' => [
    //              'message' => $err_msg,
    //              'code' => $err_code
    //          ],
    //          'http_code' => $http_code,
    //          'result' => $result
    //      ]);
    //      exit;
    // }
    public function index()
    {
        $pro = Products::all();
        //return view('info_product')->with('pro',$pro);
        return response()->json([
            'success'=>'true',
            'message'=>'Successfull',
            'data'=>$pro
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create product in Products table
        $pro = new Products;
        $pro->cate_id = $request->input("cate_id");
        $pro->pro_name = $request->input("pro_name");
        $pro->pro_image = $request->input("pro_image");
        $pro->pro_price = $request->input("pro_price");
        $pro->save();
        return redirect('product');
        //return $this->res_je(0, 'Successfull', $pro);
        // return response()->json([
        //     'success'=>'true',
        //     'message'=>'Successfull',
        //     'data'=>$pro
        // ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pro = Products::where('pro_id', $id)->first();
        return response()
            ->json([
                'message' => 'Successfull',
                'data' => $pro,
              ],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pro1 = new Products;
        $pro1->pro_name = $request->input("pro_name");
        $pro = Products::where('pro_id', $id)->update(['pro_name'=>$pro1]);
        return response()
          ->json([
            'message' => 'Successfull',
            'data' => $pro,
          ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Products::destroy($id);
        return response()
          ->json([
            'message' => 'Successfull',
            'data' => $pro
          ]);
    }
}
