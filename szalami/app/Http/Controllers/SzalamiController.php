<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Szalami;
class SzalamiController extends Controller
{
    public function index()
    {
        $szalamik = Szalami::all();
        return view ('szalamik.index')->with('szalamik', $szalamik);
    }
    
    public function create()
    {
        return view('szalamik.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Szalami::create($input);
        return redirect('szalami')->with('flash_message', 'Student Addedd!');  
    }
    
    public function show($id)
    {
        $szalami = Szalami::find($id);
        return view('szalamik.show')->with('szalamik', $szalami);
    }
    
    public function edit($id)
    {
        $szalami = Szalami::find($id);
        return view('szalamik.edit')->with('szalamik', $szalami);
    }
  
    public function update(Request $request, $id)
    {
        $szalami = Szalami::find($id);
        $input = $request->all();
        $szalami->update($input);
        return redirect('szalami')->with('flash_message', 'student Updated!');  
    }
  
    public function destroy($id)
    {
        Szalami::destroy($id);
        return redirect('szalami')->with('flash_message', 'Student deleted!');  
    }
    
}
