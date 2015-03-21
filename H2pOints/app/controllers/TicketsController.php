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
        View::make('tickets.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        View::make('tickets.show');
	}

}
