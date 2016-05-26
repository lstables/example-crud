<?php

namespace App\Http\Controllers;

use App\Cars;
use App\Cars\CreateNewCar;
use Illuminate\Http\Request;
use App\Http\Requests;

class CarsController extends Controller
{
    /**
     * @var CreateNewCar
     */
    private $car;

    /**
     * CarsController constructor.
     */
    public function __construct(CreateNewCar $car)
    {
        $this->middleware('auth');
        $this->car = $car;
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

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @internal param $return
     */
    public function store(Request $request)
    {
        $this->car->createNew($request);
        alert()->success('Success', 'New car successfully created');
        return redirect('/admin/cars');
    }

    public function edit($id)
    {
        $car = $this->car->find($id);
        return view('cars.edit', compact('car'));
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }

}
