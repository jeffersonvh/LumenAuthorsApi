<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{

    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return List of Authors
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::all();

        return $this->successResponse($authors);
    }

    /**
     * Create one new author
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Obtains and show author
     *
     * @return Illuminate\Http\Response
     */
    public function show($author)
    {

    }

    /**
     * Update an author
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author)
    {

    }

    /**
     * Destroy an author
     *
     * @return Illuminate\Http\Response
     */
    public function destroy(Request $request, $author)
    {
        
    }
}
