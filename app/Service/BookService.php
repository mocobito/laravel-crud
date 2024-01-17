<?php

namespace App\Service;

use App\Models\Books;
use Illuminate\Http\Request;

class BookService
{
    public function gets()
    {
        return Books::all();
    }

    public function get($id)
    {
        return Books::find($id);
    }

    public function post(Request $request)
    {
        $book = new Books();
        $book->name = $request->name;
        $book->author = $request->author;
        $book->publish_date = $request->publish_date;
        $book->save();
        return 201;
    }

    public function put(Request $request, $id)
    {
        if (Books::where("id", $id)->exist()) {
            Books::where("id", $id)->update(['name' => $request['name'], 'author' => $request['author'], 'publish_date' => $request['publish_date']]);
            return 204;
        } else {
            return 404;
        }

    }
}
