<?php

class SessionsController extends \BaseController {

    /**
     * Shows the login form.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('sessions.login');
    }

	/**
	 * Log in the user.
	 *
	 * @return Response
	 */
	public function store()
	{
        //Fer un login postizo, comprovar que els usuaris siguin iguals que els del login

        return Redirect::to('home');
	}


	/**
	 * Log out the user authenticated.
	 *
	 * @return Response
	 */
	public function logout()
	{
		//
	}
}
