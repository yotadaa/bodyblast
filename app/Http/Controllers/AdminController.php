<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //

    public function storeClass(Request $request)
    {

        if (!auth()->check() || (auth()->check() && auth()->user()->role != 0)) {
            return  redirect()->route('class');
        }
        $request->validate([
            'timestart' => 'required|string', // Adjust the format as needed
            'timeend' => 'required|string', // Adjust the format as needed
            'timeday' => 'required|string', // Assuming timeday is a date
            'timedesc' => 'required|string|max:255', // Adjust max length as needed
        ]);

        DB::table("schedules")->insert([
            "start" => $request->timestart,
            "end" => $request->timeend,
            "description" => $request->timedesc,
            "hari" => $request->timeday,
        ]);

        $request->session()->flash('message', "success adding schedules");
        return redirect()->route('class-add');
    }

    public function updateClass(Request $request, $id)
    {
        if (!auth()->check() || (auth()->check() && auth()->user()->role != 0)) {
            return redirect()->route('class'); // Adjust this route name as needed
        }

        // Validate the input
        $request->validate([
            'timestart' => 'required|string', // Adjust the format as needed
            'timeend' => 'required|string', // Adjust the format as needed
            'timeday' => 'required|string', // Assuming timeday is a day of the week
            'timedesc' => 'required|string|max:255', // Adjust max length as needed
        ]);
        // Update the data in the schedules table
        DB::table('schedules')
            ->where('id', $id)
            ->update([
                'start' => $request->timestart,
                'end' => $request->timeend,
                'description' => $request->timedesc,
                'hari' => $request->timeday,
            ]);

        // Flash a success message to the session
        $request->session()->flash('message', 'Success updating schedule');

        // Redirect to the appropriate route
        return redirect()->route('class'); // Adjust this route name as needed
    }

    public function deleteClass(Request $request, $id)
    {

        if (!auth()->check() || (auth()->check() && auth()->user()->role != 0)) {
            return  redirect()->route('class');
        }
        DB::table('schedules')->where('id', $id)->delete();

        $request->session()->flash('message', "success removing schedules");
        return redirect()->route('class');

    }

    public function testimonialDelete(Request $request, $id)
    {

        if (!auth()->check() || (auth()->check() && auth()->user()->role != 0)) {
            return  redirect()->route('testimonial');
        }
        DB::table('testimonials')->where('id', $id)->delete();

        $request->session()->flash('message', "success removing testimonials");
        return redirect()->route('testimonial');

    }

    public function storeTestimonial(Request $request)
    {
        // Check if the user is authenticated and has the appropriate role
        if (!auth()->check() || (auth()->check() && auth()->user()->role != 0)) {
            return redirect()->route('testimonial'); // Adjust this route name as needed
        }

        // Validate the input
        $request->validate([
            'name' => 'required|string',
            'role' => 'required|string',
            'description' => 'required|string',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the image
        ]);
        $request->session()->flash('message', "Validating");
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images/', $imageName); // Store the image in the 'public/images' directory
            $request->session()->flash('message', "File");
            DB::table('testimonials')->insert([
                'name' => $request->name,
                'role' => $request->role,
                'message' => $request->description,
                'foto' => 'storage/images/'.$imageName
            ]);
            $request->session()->flash('message', "success adding testimonial");
            return redirect()->route('testimonial-add');
        }
        $request->session()->flash('message', "failed adding testimonial");
        return redirect()->route('testimonial-add');

    }
}
