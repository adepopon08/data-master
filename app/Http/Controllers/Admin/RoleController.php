<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RoleController extends Controller
{
    public function index()
    {

        return view('admin.pages.role.index');
    }

    public function lists(Request $request)
    {
        $columns = ['id', 'role'];
        if ($request->wantsJson()) {
            $data = Role::query()->latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a class="btn btn-primary btn-sm" href="' . route('admin.roles.edit', $row->id) . '"><i class="bi bi-pen"></i></a>';
                    $actionBtn .= ' <a role="button"
                    onclick="showConfirmDialog(`Yakin anda akan menghapus data ini?`, () => destroy(`' . $row->id . '`))"
                    class="confirm-delete btn btn-danger btn-sm">
                    <i class="bi bi-trash"></i>
                </a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    public function create()
    {
        return view('admin.pages.role.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'role' => 'required'
        ]);

        $created = Role::create($validated);
        if ($created) {
            return redirect()->route('admin.roles.index')->with('success', 'Data berhasil disimpan.');
        }
        return redirect()->route('admin.roles.index')->with('error', 'Data gagal disimpan.');
    }

    public function edit($id)
    {
        $data = [
            'role' => Role::find($id)
        ];
        return view('admin.pages.role.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'role' => 'required'
        ]);

        $created = Role::find($id);
        $created->update($validated);
        if ($created) {
            return redirect()->route('admin.roles.index')->with('success', 'Data berhasil disimpan.');
        }
        return redirect()->route('admin.roles.index')->with('error', 'Data gagal disimpan.');
    }

    public function destroy($id)
    {
        $model = Role::find($id)->delete();
        if ($model) {
            return redirect()->route('admin.roles.index')->with('success', 'Data berhasil dihapus.');
        }
        return redirect()->route('admin.roles.index')->with('error', 'Data gagal dihapus.');
    }
}
