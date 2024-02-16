<?php

namespace App\Http\Controllers;

use App\Models\BookPost;
use Illuminate\Http\Request;

class BookPostController extends Controller
{
    // Return List of Books Availible
    public function index()
    {
        // Get the top 10 Records
        $books = BookPost::orderBy('updated_at', 'desc')->take(10)->get();
        return view("Home", compact("books"));
    }

    // Search a list of book from given name
    public function search(Request $request)
    {
        // Validate the request
        $data = $request->validate([
            "bookName" => "required"
        ]);

        $searchTerm = $data["bookName"];

        // Get the top 10 Records
        $books = BookPost::where("bookTitle", "like", "%$searchTerm%")->orderBy('updated_at', 'desc')->take(10)->get();
        return view("Search", compact("books"))->with("searchTerm", $searchTerm);
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

    // Store a new Book Data
    public function store(Request $request)
    {
        // Validate the Data from User
        $data = $request->validate([
            "bookTitle" => "required",
            "bookAuthor" => "required",
            "bookPublisher" => "required",
            "bookPublishDate" => "required",
            "bookLanguage" => "required",
            "bookPageCount" => "required",
            "bookPrice" => "required",
            "bookCondition" => "required",
            "userEmail" => "required",
            "userPhone" => "required",
            "userCity" => "required",
            "userState" => "required",
            "userZip" => "required"
        ]);

        // Check if User Submit the Cover Photo
        if ($request->hasFile("coverImage")) {

            // Store the User Uploaded File
            $file = $request->file("coverImage");
            $filename = $file->getClientOriginalName();
            $storeLocationName = uniqid() . $filename;
            $file->move(public_path("uploads"), $storeLocationName);
            $data["coverImage"] = $storeLocationName;

            // Add Book Post to the database
            $newBookPost = BookPost::create($data);

            // Return to Home Page
            return view(
                "NewListing",
                [
                    "status" => "Book listing created successfully",
                    "type" => "success"
                ]
            );

        }

        return view(
            "NewListing",
            [
                "status" => "Error in creating book listing",
                "type" => "danger"
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookPost  $bookPost
     * @return \Illuminate\Http\Response
     */
    public function show(BookPost $bookPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookPost  $bookPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BookPost $bookPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookPost  $bookPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookPost $bookPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookPost  $bookPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookPost $bookPost)
    {
        //
    }
}