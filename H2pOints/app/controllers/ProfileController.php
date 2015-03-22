<?php

class ProfileController extends \BaseController {

	/**
	 * Display the specified resource.
	 *
	 * @return Response
	 */
	public function show()
    {
        return View::make('profile.show');
	}

}
