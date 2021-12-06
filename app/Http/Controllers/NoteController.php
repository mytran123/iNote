<?php
namespace App\Http\Controllers;
use App\Models\Note;
use Illuminate\Http\Request;
class NoteController extends Controller
{
    //
    public function index()
    {
        $data['notes'] = Note::orderBy('id', 'desc')->paginate(5);
        return view('backend.note.list', $data);
    }
    public function store(Request $request)
    {
        $note = Note::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'name' => $request->name,
                'category' => $request->category,
                'description' => $request->description,
                'image' => $request->image,
            ]);
        return response()->json(['success' => true]);
    }
    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        $note = Note::where($where)->first();
        return response()->json($note);
    }
    public function destroy(Request $request)
    {
        $note = Note::where('id', $request->id)->delete();
        return response()->json(['success' => true]);
    }
}
