<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\News;
use App\Http\Requests\CreateAuthorRequest;



class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $authors = Author::latest()->paginate(2);
            return response()->json([
                'is_success' => true,
                'message' => 'list of categories with books ',
                'date' =>$authors
            ]);
        }catch (\Exception $e){
            return response()->json([
                'is_success' => false,
                'message' => 'Error occurred ',
            ]);
        }
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
    public function store(CreateAuthorRequest $request)
    {
        try{
            
            $request = $request->toArray();
        
            $book = Author::create($request);
            
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
    //выдача всех новостей конкретного автора
    public function show($id)
    {

        try{
            $authors =  News::where('author_id', $id)->get();
            
            return response()->json([
                'is_success' => true,
                'message' => 'success',
                'date' =>$authors
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
}
