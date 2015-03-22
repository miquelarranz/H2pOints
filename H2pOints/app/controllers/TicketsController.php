<?php

class TicketsController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @param $id
     * @return Response
     */
	public function index($id)
	{
        return View::make('tickets.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('tickets.show');
	}

}
