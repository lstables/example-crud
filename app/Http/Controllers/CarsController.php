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

    /**
     * Show create form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store new record
     *
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

    /**
     * Show Edit Form
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $car = $this->car->find($id);
        return view('cars.edit', compact('car'));
    }

    /**
     * Update Record
     *
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->car->updateCar($id, $request);
        alert()->success('Edited', 'Car successfully edited');
        return redirect('/admin/cars');
    }

    /**
     * Destroy Record
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $this->car->removeCar($id);
        alert()->info('Car Removed', 'Car successfully deleted');
        return redirect('/admin/cars');
    }

}
