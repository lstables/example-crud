<?php

namespace App\Cars;

use App\Cars;

class CreateNewCar
{
    public function find($id)
    {
        return Cars::find($id);
    }

    public function createNew($request)
    {
        return Cars::create($request->all());
    }

    public function updateCar($id, $request)
    {

    }
}