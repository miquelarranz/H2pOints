<?php

class EventsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('events.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        if ($id == 1)
        {
            return View::make('events.show');
        }
        else if ($id == 2)
        {
            return View::make('events.show2');
        }
        else if ($id == 3)
        {
            return View::make('events.show3');
        }

	}

}
