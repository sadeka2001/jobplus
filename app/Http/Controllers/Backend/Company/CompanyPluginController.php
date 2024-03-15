<?php

namespace App\Http\Controllers\Backend\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plugin;

class CompanyPluginController extends Controller
{
    public function index()
    {
        $data['plugins'] = Plugin::get();
        return view('backend.company.plugins.index', $data);
    }

    public function create()
    {
        return view('backend.company.plugins.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'url' => 'required',
            ]);
            $plugin = Plugin::create($request->all());
            return redirect()->route('c-plugins.index');

        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function show(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        try {
            $plugin = Plugin::find($id);
            if ($plugin->status == 'active') {
                $plugin->status = 'inactive';
            } else {
                $plugin->status = 'active';
            }
            $plugin->save();
            return redirect()->route('c-plugins.index');

        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function destroy(string $id)
    {
        try {
            $plugin = Plugin::find($id);
            $plugin->delete();
            return redirect()->route('c-plugins.index')
                ->with('success', 'Plugin deleted successfully');
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()

            ], 500);
        }
    }
}
