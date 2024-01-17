<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Service\BookService;
use Illuminate\Http\Request;

class BookRestController extends Controller
{
    protected $service;

    public function __construct(
        BookService $service
    )
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     */
    public function gets()
    {
        return response()->json($this->service->gets());
    }

    public function get($id)
    {
        return response()->json($this->service->get($id));
    }

    public function post(Request $request)
    {

    }
    public function put(Request $request, $id)
    {

    }

    public function delete(Books $books)
    {
        //
    }
}
