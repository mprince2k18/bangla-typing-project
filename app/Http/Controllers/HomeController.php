<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paragraph;
use App\Models\Result;
use App\Models\ExamRanking;
use App\Models\User;
use Auth;

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
        $participants = User::count();
        $chapters = Paragraph::all();
        $total_exam = Result::count();
        return view('home', compact('chapters', 'participants', 'total_exam'));
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
        $paragraph->time = $request->time;
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

        // store to result
        $result = new Result;
        $result->user_id = auth()->user()->id;
        $result->paragraph_id = $which_chapter->id;
        $result->user_given_paragraph = $request->paragraph;
        $result->total_paragraph_words = $total_paragraph_words;
        $result->diff_words = $diff_words;
        $result->user_input_words = $user_input_words;
        $result->percentage = $percentage;
        $result->wpm = $gross_wpm;
        $result->accuracy = $accuracy;
        $result->result = 100 - $percentage;

        if ($result->save()) {
            $check_todays_result = ExamRanking::where('user_id', auth()->user()->id)->first();
            if ($check_todays_result) {
                if ($check_todays_result->result < $result->result) {
                    $check_todays_result->paragraph_id = $result->paragraph_id;
                    $check_todays_result->user_given_paragraph = $result->user_given_paragraph;
                    $check_todays_result->total_paragraph_words = $result->total_paragraph_words;
                    $check_todays_result->diff_words = $result->diff_words;
                    $check_todays_result->user_input_words = $result->user_input_words;
                    $check_todays_result->percentage = $result->percentage;
                    $check_todays_result->wpm = $result->wpm;
                    $check_todays_result->accuracy = $result->accuracy;
                    $check_todays_result->result = $result->result;
                    $check_todays_result->save();
                }
            }else {
                $exam_rank = new ExamRanking;
                $exam_rank->user_id = $result->user_id;
                $exam_rank->paragraph_id = $result->paragraph_id;
                $exam_rank->user_given_paragraph = $result->user_given_paragraph;
                $exam_rank->total_paragraph_words = $result->total_paragraph_words;
                $exam_rank->diff_words = $result->diff_words;
                $exam_rank->user_input_words = $result->user_input_words;
                $exam_rank->percentage = $result->percentage;
                $exam_rank->wpm = $result->wpm;
                $exam_rank->accuracy = $result->accuracy;
                $exam_rank->result = $result->result;
                $exam_rank->save();
            }
        }

        return $this->details($result->id);
    }

    public function report()
    {
        $reports = Result::where('user_id', Auth::id())->get();
        return view('report', compact('reports'));
    }

    public function details($id)
    {
        $report = Result::where('id', $id)->first();
        return view('report_details', compact('report'));
    }

    public function ranking_chapter_based($chapter_id)
    {
        $rank = ExamRanking::where('paragraph_id', $chapter_id)
                            ->select('id', 'user_id', 'result', 'wpm', 'accuracy', 'percentage', 'paragraph_id')
                            ->orderBy('result', 'desc')
                            ->get()
                            ->take(20);
        return view('ranking_chapter_based', compact('rank'));
    }

    //ENDS

}
