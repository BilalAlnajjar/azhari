<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StageRequest;
use App\Models\Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        return Blog::with('images')
        $stages = Stage::latest()->paginate(15);

        return view('admin.stages.index', [
            'stages' => $stages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stages.create', [
            'stage' => new Stage(),
            'title' => 'Create Stage'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StageRequest $request)
    {

        try {

            if ($request->hasFile('path_image')) {
                $file = $request->file('path_image');

                $image_path = $file->store('/stages', [
                    'disk' => 'uploads'
                ]);

                $request->merge([
                    'image' => $image_path,
                ]);
            }
            $stage = Stage::create($request->only(['name', 'main_stage', 'image']));
            return redirect()->route('stages.index')->with(['success' => 'Create Stage success']);

        } catch (\Exception $e) {
            return redirect()->route('stages.index')->with(['error' => 'Something error try again']);
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

        $stage = Stage::find($id);
        $title = "Edit Stage";
        if (is_null($stage)) {
            return redirect()->route('stages.index')->with('error', 'Stage does not exist');
        }
        return view('admin.stages.edit', [
            'stage' => $stage,
            'title' => $title
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StageRequest $request, $id)
    {
        $stage = Stage::whereId($id)->first();
        if (is_null($stage)) {
            return redirect()->route('stages.index')->with('error', 'Stage does not exist');
        }
        try {
            if ($request->hasFile('path_image')) {
                $file = $request->file('image');
                Storage::disk('uploads')->delete($stage->image);

                $image_path = $file->store('/stages', [
                    'disk' => 'uploads'
                ]);

                $request->merge([
                    'image' => $image_path,
                ]);
            }

            $stage->update($request->only(['name', 'image', 'main_stage']));
            return redirect()->route('stages.index')->with('success', 'Updated successful');
        } catch (\Exception $exception) {
            return redirect()->route('stages.index')->with(['error' => 'Something error try again']);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stage = Stage::find($id);

        Storage::disk('uploads')->delete($stage->image);

        Stage::destroy($id);
        return redirect(route('stages.index'))
            ->with('success', 'Stage deleted');
    }

}
