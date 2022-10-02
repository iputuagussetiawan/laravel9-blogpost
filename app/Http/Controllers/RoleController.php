<?php

namespace App\Http\Controllers;

use App\DataTables\RoleDataTable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Column;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RoleDataTable $dataTable)
    {
        //
        // if ($request->user()->hasRole('it')) {
        //     return 'role';
        // }
        // abort(403);

        //$this->authorize('read role');
        // if (!Gate::allows('read role')) {
        //     abort(403, 'unauthorized');
        // }

        //$data['users'] = User::with(relations: 'role')->get();
        return view('configuration.roles');


        // $query = User::orderBy('name', 'DESC');
        // return datatables::of($query)
        //     ->addIndexColumn()
        //     ->addColumn('opsi', function ($data) {
        //         return '<span>Edit</span> | <span>Delete</span>';
        //     })
        //     ->rawColumns(['opsi'])
        //     ->make(true);

        //return $dataTable->render('configuration.roles');

        //$data['users']=User::all()


        //return $dataTable->render('configuration.roles');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $this->authorize('create role');
        return 'create role';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function table()
    {

        $query = DB::table('users');

        //return DataTables::of($query)->toJson();


        $query = User::orderBy('name', 'DESC');
        return datatables::of($query)
            ->addIndexColumn()
            ->addColumn('opsi', function ($data) {
                return '<span>Edit</span> | <span>Delete</span>';
            })
            ->rawColumns(['opsi'])
            ->make(true);
    }
}
