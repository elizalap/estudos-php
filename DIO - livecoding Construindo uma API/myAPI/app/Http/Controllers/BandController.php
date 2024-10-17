<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandController extends Controller
{
    public function getAll()
    {

        $bands = $this->getBands();
        return response()->json($bands);
    }

    public function getById($id)
    {
        $band = null;

        foreach ($this->getBands() as $_band) {
            if ($_band['id'] == $id) {
                $bands[] = $_band;
            }
        }

        return $band ? response()->json($band) : abort(404);
    }

    public function getBandsByGender($gender)
    {
        $bands = [];

        foreach ($this->getBands() as $_band) {
            if ($_band['gender'] == $gender) {
                $bands[] = $_band;
            }
        }

        dd($bands);
        return response()->json($bands);
    }

    public function store(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required'
        ]);

        return response()->json($request->all());
    }

    protected function getBands()
    {
        return [
            [
                'id' => 1, 'name' => 'dream teather', 'gender' => 'progressivo'
            ],
            [
                'id' => 2, 'name' => 'megadeth', 'gender' => 'trash metal'
            ],
            [
                'id' => 3, 'name' => 'dio', 'gender' => 'heavy metal'
            ]
        ];
    }
}
