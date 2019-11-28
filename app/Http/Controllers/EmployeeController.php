<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Illuminate\Support\Facades\Redirect;

class EmployeeController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function index()
    {
        return Employee::all();
        return view('index')->with('employees', $employees);
    }

    public function add(){
        
    }

    public function list(){
        return view('view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
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
            'nome' => 'required',
            'idade' => 'required',
            'funcao' => 'required'
        ]);
/*
        $employee = new Employee;
        $employee->nome = $request->input('nome');
        $employee->idade = $request->input('idade');
        $employee->funcao = $request->input('funcao');*/
        $data = $request->all();
        $employee = Employee::create($data);
        $employee->save();

        return response()->json($employee);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee){
		return response()->json($employee);
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('update');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        public function update(Request $request, $id){
            $employee = Employee::findOrFail($id);
            $employee->nome = $request->nome;
            $employee->idade = $request->idade;
            $employee->funcao = $request->funcao;

            $employee->save();

            return $employee;
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
    }

    /*public function update(Employee $employee, Request $request){
            $data = $request->all();
            $employee = $employee->update($data);
            return response()->json($employee);
    }*/


   /* public function destroy(Employee $employee)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        $employee->delete();
        return response()->json(['success']);
    }*/
}
