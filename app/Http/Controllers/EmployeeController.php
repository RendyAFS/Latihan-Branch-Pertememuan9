<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\Position;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(string $id)
    {

    }

    public function edit(string $id)
    {

    }

    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // ELOQUENT
    Employee::find($id)->delete();

    return redirect()->route('employees.index');
    }

}
