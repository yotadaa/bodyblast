<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //

    public function class() {
        if (!auth()->check()) {
            return redirect()->route('index');
        }

        $schedules = DB::table("schedules")->get();
        return view("layout.class", ["schedules" =>$schedules]);
    }

    public function classAdd() {
        if (!auth()->check()) {
            return redirect()->route('index');
        }

        if (auth()->check() && auth()->user()->role != 0) {
            return redirect()->route('class');

        }

        $schedules = DB::table("schedules")->get();
        return view("layout.class-add", ["schedules" =>$schedules]);
    }

    public function classEdit(Request $request,$id) {
        if (!auth()->check()) {
            return redirect()->route('index');
        }

        if (auth()->check() && auth()->user()->role != 0) {
            return redirect()->route('class');

        }

        $schedule = DB::table('schedules')->where('id', $id)->get();
        return view("layout.class-edit", ["schedule" =>$schedule[0]]);
    }

    public function about() {
        if (!auth()->check()) {
            return redirect()->route('index');
        }
        return view("layout.about");
    }

    public function team() {
        if (!auth()->check()) {
            return redirect()->route('index');
        }
        return view("layout.team");
    }

    public function testimonial() {
        if (!auth()->check()) {
            return redirect()->route('index');
        }

        $testi = DB::table("testimonials")->get();
        return view("layout.testimonial", ["testimonials" => $testi]);
    }

    public function testimonialAdd() {
        if (!auth()->check()) {
            return redirect()->route('index');
        }

        if (auth()->check() && auth()->user()->role != 0) {
            return redirect()->route('testimonial');

        }

        return view("layout.testimonial-add");
    }
    public function contact() {
        if (!auth()->check()) {
            return redirect()->route('index');
        }
        return view("layout.contact");
    }
}
