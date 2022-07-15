<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function typing()
    {
        return view('typing');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create_paragraph()
    {

        $ban = "কে কানে কানে বললো";


        // explode the string into an array
        $ban_array = explode(" ", $ban);

        $ban_collection = collect();

        // loop through the array
        foreach ($ban_array as $word) {
            // add a class to the word
            $ban_collection->push($word);
        }

        // total number of words in the paragraph
        $total_paragraph_words = $ban_collection->count();

        $input = "কে";

        // explode the string into an array
        $input_array = explode(" ", $input);

        $input_collection = collect();

        // loop through the array
        foreach ($input_array as $word) {
            // add a class to the word
            $input_collection->push($word);
        }

        // user inputted words
        $user_input_words = $input_collection->count();

        $diff = $ban_collection->diff($input_collection);

        $diff_array = $diff->toArray();

        // diff in percentage
        $percentage = $diff->count() / $ban_collection->count() * 100;

        // diff in words
        $diff_words = $diff->count();

        return [
            'paragraph' => $ban_collection,
            'user_given_paragraph' => $input_collection,
            'diff' => $diff_array,
            'total_paragraph_words' => $total_paragraph_words,
            'diff_words' => $diff_words,
            'user_input_words' => $user_input_words,
            'missing_percentage' => $percentage,
            'result' => 100 - $percentage,
        ];

        return view('create_paragraph');
    }
}
