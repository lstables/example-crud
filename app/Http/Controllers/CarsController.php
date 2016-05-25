<?php

namespace App\Http\Controllers;

use App\Cars;
use Illuminate\Http\Request;
use App\Http\Requests;

class CarsController extends Controller
{
    /**
     * CarsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Cars index view, showing list
     * of all cars....
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        // Shows all cars and paginated by 5 results per page.
        $cars = Cars::paginate(5);
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }

}
