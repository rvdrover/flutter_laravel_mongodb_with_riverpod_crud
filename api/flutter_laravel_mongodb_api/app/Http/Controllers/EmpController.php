<?php

namespace App\Http\Controllers;

use App\Models\Emp;
use Illuminate\Http\Request;

class EmpController extends Controller
{
    public function index()
    {
        $emp = Emp::all()->toJson(JSON_PRETTY_PRINT);

        return response($emp);
    }
    public function show($id)
    {
        $emp = Emp::find($id);
        return response($emp);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $emp =  Emp::create($input)->toJson(JSON_PRETTY_PRINT);
        return response($emp);
    }

    public function update(Request $request, $id)
    {
        $emp = Emp::find($id);
        $input = $request->all();
        $emp->update($input);
        return response($emp->toJson(JSON_PRETTY_PRINT));
    }

    public function destroy($id)
    {
        $emp = Emp::find($id);
        $emp->delete();
        return response($emp);
    }
}
