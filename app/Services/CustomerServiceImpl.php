<?php


namespace App\Services;


interface CustomerServiceImpl
{
    public function getAll();

    public function finById($id);

    public function create($request);

    public function update($request, $id);

    public function destroy($id);

}
