<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CategoriesController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(Categories::all())
                ->addColumn('action', function ($p) {
                    $btn = '<div class="dropdown">
                    <button class="btn btn-xs " data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-ellipsis-v"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item editBtn" href="#" data-id="' . $p->id . '">Edit</a></li>
                      <li><a class="dropdown-item deleteBtn" href="#" data-id="' . $p->id . '">Delete</a></li>
                    </ul>
                  </div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('services.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Categories::updateOrCreate(['id' => $request->id], [
            'name' => $request->name,
            'description' => $request->description
        ]);

        return response()->json(['success' => true, 'message' => 'New category has been saved']);
    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $category = Categories::find($id);
        return response()->json($category);
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        Categories::find($id)->delete();

        return response()->json(['success' => true, 'message' => 'Category deleted successfully.']);
    }
}
