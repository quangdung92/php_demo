<?php

class OauthController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /oauth
	 *
	 * @return Response
	 */
	public function index()
	{
		$tw = OAuth::consumer( 'Twitter' );
		$reqToken = $tw->requestRequestToken();
		$url = $tw->getAuthorizationUri(array('oauth_token' => $reqToken->getRequestToken()));
		return Redirect::to( (string)$url );
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /oauth/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /oauth
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /oauth/{id}
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
	 * GET /oauth/{id}/edit
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
	 * PUT /oauth/{id}
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
	 * DELETE /oauth/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}