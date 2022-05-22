<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Requests\CreateNewsRequest;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNewsRequest $request)
    {
        dd(112);
        try{
            dd(112);
            $request = $request->toArray();
        
            $book = News::create($request);
            return response()->json([
                'is_success' => true,
                'message' => 'success',
            ]);
        }catch (\Exception $e){
            return response()->json([
                'is_success' => false,
                'message' => 'Error occurred ',
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $news = News::findOrFail($id);
            return response()->json([
                'is_success' => true,
                'message' => 'list of categories with books ',
                'date' =>$news
            ]);
        }catch (\Exception $e){
            return response()->json([
                'is_success' => false,
                'message' => 'Error occurred ',
            ]);
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function searchNews(Request $request) {
        try{
            
            $text = $request->text;
            $news = News::where('title', 'like', '%'.$text.'%')->paginate(10);
            return response()->json([
                'is_success' => true,
                'message' => 'success',
                'date' =>$news,
            ]);
        }catch (\Exception $e){
            return response()->json([
                'is_success' => false,
                'message' => 'Error occurred ',
            ]);
        }
    }
}
