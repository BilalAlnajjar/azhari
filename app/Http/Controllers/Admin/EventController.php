<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        return Blog::with('images')
        $events = Event::latest()->paginate(15);

        return view('admin.events.index', [
            'events' => $events
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create', [
            'event' => new Event(),
            'title' => 'Create Event'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {

        try {
            if ($request->hasFile('path_image')) {
                $file = $request->file('path_image');

                $image_path = $file->store('/events', [
                    'disk' => 'uploads'
                ]);

                $request->merge([
                    'image' => $image_path,
                ]);
            }
            $event = Event::create($request->only(['title', 'details', 'brief_details', 'status', 'image']));
            return redirect()->route('events.index')->with(['success' => 'Create Event success']);

        } catch (\Exception $e) {
            return redirect()->route('events.index')->with(['error' => 'Something error try again']);
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

        $event = Event::find($id);
        $title = "Edit Event";
        if (is_null($event)) {
            return redirect()->route('events.index')->with('error', 'Event does not exist');
        }
        return view('admin.events.edit', [
            'event' => $event,
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
    public function update(EventRequest $request, $id)
    {
        $event = Event::whereId($id)->first();
        if (is_null($event)) {
            return redirect()->route('events.index')->with('error', 'Event does not exist');
        }
        try {
            if ($request->hasFile('path_image')) {
                $file = $request->file('image');
                Storage::disk('uploads')->delete($event->image);

                $image_path = $file->store('/events', [
                    'disk' => 'uploads'
                ]);

                $request->merge([
                    'image' => $image_path,
                ]);
            }

            $event->update($request->only(['title', 'details', 'brief_details', 'status', 'image']));
            return redirect()->route('events.index')->with('success', 'Updated successful');
        } catch (\Exception $exception) {
            return redirect()->route('events.index')->with(['error' => 'Something error try again']);

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
        $event = Event::find($id);

        Storage::disk('uploads')->delete($event->image);

        Event::destroy($id);
        return redirect(route('events.index'))
            ->with('success', 'Event deleted');
    }

}
