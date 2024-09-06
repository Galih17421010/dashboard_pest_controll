<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ServicesController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(Services::all())
                ->addColumn('action', function ($p) {
                    $btn = '<div class="dropdown">
                    <button class="btn btn-xs " data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-ellipsis-v"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item editBtnServices" href="#" data-id="' . $p->id . '">Edit</a></li>
                      <li><a class="dropdown-item deleteBtnServices" href="#" data-id="' . $p->id . '">Delete</a></li>
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
        Services::updateOrCreate(['id' => $request->idS], [
            'name' => $request->nameServices,
            'price' => $request->price,
            'categories' => $request->categories,
            'description' => $request->descriptionServices
        ]);

        return response()->json(['success' => true, 'message' => 'New services has been saved']);
    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $services = Services::find($id);
        return response()->json($services);
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy($id)
    {
        Services::find($id)->delete();

        return response()->json(['success' => true, 'message' => 'Services deleted successfully.']);
    }
}
