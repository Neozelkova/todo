<?php

class TodoListController extends \BaseController {

	public function __construct()
	{
		$this->beforeFilter('csrf', array('on' => 'post'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$todo_lists = TodoList::all();
		return View::make('todos.index')->with('todo_lists', $todo_lists);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('todos.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// define rules
		$rules = array(
				'title' => array('required', 'unique:todo_lists,name')
			);
		// pass input to validator
		$validator = Validator::make(Input::all(), $rules);

		// test if input is valid
		if($validator->fails()){

			return Redirect::route('todos.create')->withErrors($validator)->withInput();
		}


		$name = Input::get('title');
		$list = new TodoList();
		$list->name = $name;
		$list->save();

		return Redirect::route('todos.index')->withMessage('List was created!');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$list = TodoList::findOrFail($id);

		return View::make('todos.show')->withList($list);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
