<?php

namespace App\Cars;

use App\Cars;

class CreateNewCar
{
    /**
     * Find given car by ID
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return Cars::find($id);
    }

    /**
     * Create a new car record
     *
     * @param $request
     * @return static
     */
    public function createNew($request)
    {
        return Cars::create($request->all());
    }

    /**
     * Update car for given ID
     *
     * @param $id
     * @param $request
     * @return mixed
     */
    public function updateCar($id, $request)
    {
        $car = Cars::find($id);
        $car->car_name = $request->input('car_name');
        $car->type = $request->input('type');
        $car->model = $request->input('model');
        $car->make = $request->input('make');
        $car->update();

        return $car;
    }

    /**
     * Remove a car
     *
     * @param $id
     * @return mixed
     */
    public function removeCar($id)
    {
        return Cars::find($id)->delete();
    }
}