<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paragraph;

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
    public function chapters()
    {
        $chapters = Paragraph::all();
        return view('chapters', compact('chapters'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function exam($chapter)
    {
        $chapter = Paragraph::where('id', $chapter)->first();
        return view('exam', compact('chapter'));
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
        return view('create_paragraph');
    }

    /**
     * Store
     */
    public function store(Request $request)
    {
        $paragraph = new Paragraph;
        $paragraph->chapter = $request->chapter;
        $paragraph->paragraph = $request->paragraph;
        $paragraph->save();
        return back();
    }

    public function examResult(Request $request, $chapter)
    {

        $which_chapter = Paragraph::where('id', $chapter)->first();

        $chapter = $which_chapter->paragraph;

        // explode the string into an array
        $chapter_array = explode(" ", $chapter);

        $chapter_collection = collect();

        // loop through the array
        foreach ($chapter_array as $word) {
            // add a class to the word
            $chapter_collection->push($word);
        }

        // total number of words in the paragraph
        $total_paragraph_words = $chapter_collection->count();

        $exam_data = $request->paragraph;

        // explode the string into an array
        $exam_data_array = explode(" ", $exam_data);

        $exam_data_collection = collect();

        // loop through the array
        foreach ($exam_data_array as $word) {
            // add a class to the word
            $exam_data_collection->push($word);
        }

        // user inputted words
        $user_input_words = $exam_data_collection->count();

        $diff = $chapter_collection->diff($exam_data_collection);

        $diff_array = $diff->toArray();

        // diff in percentage
        $percentage = $diff->count() / $chapter_collection->count() * 100;

        // diff in words
        $diff_words = $diff->count();

        /**
         * Gross WPM
         */
        $gross_wpm = $user_input_words / 2; // Total Words Typed / Total Time Taken (in minutes)

        /**
         * Net Speed
         */
        $net_speed = ($user_input_words - $diff_words) / 2; // (Total Words Typed - Word Error ) / Total Time Taken (in minutes)

        /**
         * Accuracy
         */
        $accuracy = ($net_speed / $gross_wpm) * 100; // (Net WPM/ Gross WPM ) * 100

        return [
            'paragraph' => $chapter_collection,
            'user_given_paragraph' => $exam_data_collection,
            'diff' => $diff_array,
            'total_paragraph_words' => $total_paragraph_words,
            'diff_words' => $diff_words,
            'user_input_words' => $user_input_words,
            'missing_percentage' => $percentage,
            'result' => 100 - $percentage,
            'wpm' => $gross_wpm,
            'net_speed' => $gross_wpm,
            'accuracy' => $accuracy,
        ];
    }

}
