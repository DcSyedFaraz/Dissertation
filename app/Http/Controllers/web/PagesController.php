<?php

namespace App\Http\Controllers\web;

use App\AcademicLevel;
use App\Deadline;
use App\Fare;
use App\Http\Controllers\Controller;
use App\Mail\QueryAdminMail;
use App\Mail\QueryMail;
use App\PaperType;
use App\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function index(){

        $paper_types=PaperType::orderBy('id', 'ASC')->get();
        $academic_levels=AcademicLevel::orderBy('id','ASC')->get();
        $deadlines=Deadline::orderBy('id','ASC')->get();
        return view('pages.home',compact('paper_types','academic_levels','deadlines'));
    }

    public function about(){

        // dd(addCurrency(4));
        $data = Fare::all();
        return view('pages.about', compact('data'));
    }
    public function queryStore( Request $request){
        // dd($request);
        $query =  Query::create($request->all());
        // return $query->deadlineName;
        // Send mail to user
       //Mail::to($query->email)->send(new QueryMail($query));
        // Send mail to admin
       //Mail::to(config('app.mail_address'))->send(new QueryAdminMail($query));
       return response()->json(['success' => "Thank you for showing your intrest, We've received your query successfully."]);


        // return redirect()->back()->withSuccess("Thank you for showing your intrest, We've receive your query successfully.");

    }
    public function getFare(Request $request)
    {
        return Fare::where(['academic_level_id' => $request->academic_level_id, 'deadline_id' => $request->deadline_id])->firstOrFail();

    }
    public function price(){

        return view('pages.pricing');
    }

}
