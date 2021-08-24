<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubjectRequest;
use App\Models\Stage;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        return Blog::with('images')
        $subjects = Subject::latest()->paginate(15);

        return view('admin.subjects.index', [
            'subjects' => $subjects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.subjects.create', [
            'subject' => new Subject(),
            'stages'=>Stage::all(),
            'title' => 'Create Subject',
            'stages_ids'=>collect([])
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubjectRequest $request)
    {
        try {
            if ($request->hasFile('pdf')) {
                $file = $request->file('pdf');

                $pdf_path = $file->store('/pdf', [
                    'disk' => 'uploads'
                ]);

                $request->merge([
                    'plane' => $pdf_path,
                ]);
            }
            if ($request->hasFile('path_image')) {
                $file = $request->file('path_image');

                $image_path = $file->store('/subjects', [
                    'disk' => 'uploads'
                ]);

                $request->merge([
                    'image' => $image_path,
                ]);
            }

            $subject = Subject::create($request->only(['name', 'plane', 'image']));
            $subject->stages()->attach($request->stages);
            return redirect()->route('subjects.index')->with(['success' => 'Create Subject success']);

        } catch (\Exception $e) {
            return redirect()->route('subjects.index')->with(['error' => 'Something error try again']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $subject = Subject::find($id);
        $title = "Edit Subject";
        if (is_null($subject)) {
            return redirect()->route('subjects.index')->with('error', 'Subject does not exist');
        }
        return view('admin.subjects.edit', [
            'subject' => $subject,
            'title' => $title,
            'stages'=>Stage::all(),
            'stages_ids'=>$subject->stages()->pluck('stages.id')

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubjectRequest $request, $id)
    {

        $subject = Subject::whereId($id)->first();
        if (is_null($subject)) {
            return redirect()->route('subjects.index')->with('error', 'Subject does not exist');
        }
//        try {
            if ($request->hasFile('path_image')) {
                $file = $request->file('image');
                Storage::disk('uploads')->delete($subject->image);

                $image_path = $file->store('/subjects', [
                    'disk' => 'uploads'
                ]);

                $request->merge([
                    'image' => $image_path,
                ]);
            }
            if ($request->hasFile('pdf')) {
                $file = $request->file('pdf');
                Storage::disk('uploads')->delete($subject->plane);

                $image_path = $file->store('/pdf', [
                    'disk' => 'uploads'
                ]);

                $request->merge([
                    'plane' => $image_path,
                ]);
            }

            $subject->update($request->only(['name', 'plane', 'image']));
            $subject->stages()->sync($request->post('stages'));
            return redirect()->route('subjects.index')->with('success', 'Updated successful');
//        } catch (\Exception $exception) {
            return redirect()->route('subjects.index')->with(['error' => 'Something error try again']);

//        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Subject::find($id);

        Storage::disk('uploads')->delete($subject->image);
        Storage::disk('uploads')->delete($subject->plane);

        Subject::destroy($id);
        return redirect(route('subjects.index'))
            ->with('success', 'Subject deleted');
    }

}
