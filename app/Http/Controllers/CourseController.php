<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the courses.
     */
    public function index()
    {
        $courses = Course::all(); // Fetch all courses from the database
        return view('courses.index', compact('courses')); // Pass the data to the view
    }

    /**
     * Show the form for creating a new course.
     */
    public function create()
    {
        return view('courses.create'); // Show the form for creating a course
    }

    /**
     * Store a newly created course in storage.
     */
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'file_url' => 'nullable|file',
        ]);

        // Handle file upload if any
        $fileUrl = null;
        if ($request->hasFile('file_url')) {
            $fileUrl = $request->file('file_url')->store('uploads', 'public');
        }

        // Create the course
        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'file_url' => $fileUrl,
        ]);

        return redirect()->route('courses.index')->with('success', 'Course created successfully!');
    }

    /**
     * Display the specified course.
     */
    public function show(Course $course)
    {
        return view('courses.show', compact('course')); // Show a single course
    }

    /**
     * Show the form for editing the specified course.
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course')); // Show the edit form
    }

    /**
     * Update the specified course in storage.
     */
    public function update(Request $request, Course $course)
    {
        // Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'file_url' => 'nullable|file',
        ]);

        // Handle file upload if any
        if ($request->hasFile('file_url')) {
            $fileUrl = $request->file('file_url')->store('uploads', 'public');
            $course->file_url = $fileUrl;
        }

        // Update the course
        $course->update([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
        ]);

        return redirect()->route('courses.index')->with('success', 'Course updated successfully!');
    }

    /**
     * Remove the specified course from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete(); // Delete the course

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully!');
    }
}