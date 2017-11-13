<?php

/**
 * The role switching controller. Stores the role in our session, and return
 * to whatever page we were on when a role is switched, for testing different
 * roles on different pages.
 */
class Roles extends Application
{

	/**
	 * Stores the newly selected role in session.
	 */
	public function actor($role = ROLE_GUEST)
	{
	    $this->session->set_userdata('userrole',$role);
	    redirect($_SERVER['HTTP_REFERER']); // back where we came from
	}
}
