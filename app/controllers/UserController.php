<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /user
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('new');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /user/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$all = 	Request::all();
		$rules = array(
			'email' => 'required|unique:users',
		);
		$vali = Validator::make($all, $rules);
		if ($vali->fails()) {
			$messages = $vali->messages();
			return Redirect::to('register')-> with('msg',$messages ->first('email'));
		} else {
		User::create([
			'username' => Request::get('name'),
			'email' => Request::get('email'),
			'password' => Hash::make(Request::get('password')),
		]);
			return Redirect::to('register')-> with('msg', Lang::get('messages.register.sucess'));
		}
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /user
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}
	
	public function login()
	{
		$results = Auth::attempt([
			'email' => Request::get('email'),
			'password' => Request::get('password'),
		]);
		Log::info(Auth::user());
		if ($results){
			return Redirect::to('/post') -> with('msg', Lang::get('messages.login.sucess'));
		} else {
			return Redirect::to('/') -> with('msg', Lang::get('messages.login.error'));
		}
	}

	/**
	 * Display the specified resource.
	 * GET /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /user/{id}/edit
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
	 * PUT /user/{id}
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
	 * DELETE /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
		return Redirect::to('/');
	}

}