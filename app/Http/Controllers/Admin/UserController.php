<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.pages.user.index');
    }

    public function lists(Request $request)
    {
        $columns = ['id', 'name', 'email', 'role_id'];
        if ($request->wantsJson()) {
            $data = User::query()->with(['role'])->latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a class="btn btn-primary btn-sm" href="' . route('admin.user.edit', $row->id) . '"><i class="bi bi-pen"></i></a>';
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.user.create', ['roles' => Role::get(),]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'role_id' => ['required'],
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required', 'min:8'],
        ]);

        $created = User::create([
            'role_id' => $request->role_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        if ($created) {
            return redirect()->route('admin.user.index')->with('success', 'Data Berhasil Disimpan.');
        }

        return redirect()->route('admin.user.index')->with('error', 'Data Gagal Disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'user' => User::find($id),
            'roles' => Role::get(),
        ];
        return view('admin.pages.user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'role_id' => 'required',
            'name' => 'required',
            'email' => 'required',
        ]);

        $created = User::find($id);
        if ($request->password) {
            $validated['password'] = Hash::make($request->password);
        }
        $created->update($validated);

        if ($created) {
            return redirect()->route('admin.user.index')->with('success', 'Data Berhasil Disimpan');
        }
        return redirect()->route('admin.user.index')->with('error', 'Data Gagal Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.user.index');
    }
}
