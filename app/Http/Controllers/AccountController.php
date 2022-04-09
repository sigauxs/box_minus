<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Area;
use App\Models\CostCenter;
use App\Models\CostSubCenter;
use App\Models\Expense;
use App\Models\TypeBox;
use App\Models\TypeDocument;


class AccountController extends Controller
{

    public function index()
    {
        return view('accounts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all()->pluck('name','id');
        $typesBoxes =  TypeBox::all()->pluck('name','id');
        $costscenter = CostCenter::all()->pluck('name','id');
        $costsSubcenter = CostSubCenter::all()->pluck('name','id');
        $expenses = Expense::all()->pluck('name','id');
        $typedocuments= TypeDocument::all();
        return view('accounts.create',compact('typesBoxes','costscenter','costsSubcenter','areas','expenses','typedocuments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $account = $request->all();
        $account_object = (object)$account;
        $total = formater_value($account_object->total);
        $account_object->total = $total;
        $record = (array)$account_object;

        $account =  Account::create($record);

        return redirect()->route('accounts.show',$account);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {

        $account = Account::find($account->id);
        return  view('accounts.show',compact('account'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
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
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }

    public function formater_value(Account $account){

    }
}
