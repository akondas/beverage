<?php
namespace Caffeinated\Beverage\Repositories;

interface RepositoryInterface
{
	/*
	|--------------------------------------------------------------------------
	| Common CRUD methods
	|--------------------------------------------------------------------------
	|
	*/

	public function delete($id);
	public function find($id);
	public function getAll($orderBy = array('id', 'asc'));
	public function getAllPaginated($orderBy = array('id', 'asc'), $perPage = 25);
	public function store($request);
	public function update($id, $request);
	public function with($relationships);

	/*
	|--------------------------------------------------------------------------
	| Additional Candy Methods
	|--------------------------------------------------------------------------
	|
	*/

	public function dropdown($name, $value);
}
