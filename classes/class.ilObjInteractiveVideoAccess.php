<?php
/* Copyright (c) 1998-2015 ILIAS open source, Extended GPL, see docs/LICENSE */

require_once 'Services/Repository/classes/class.ilObjectPluginAccess.php';

/**
 * Class ilObjInteractiveVideoAccess
 * @author Nadia Ahmad <nahmad@databay.de>
 */
class ilObjInteractiveVideoAccess extends ilObjectPluginAccess
{
	/**
	 * @param string $a_cmd
	 * @param string $a_permission
	 * @param int    $a_ref_id
	 * @param int    $a_obj_id
	 * @param string $a_user_id
	 * @return bool
	 */
	public function _checkAccess($a_cmd, $a_permission, $a_ref_id, $a_obj_id, $a_user_id = '')
	{
		/**
		 * @var $ilUser   ilObjUser
		 * @var $ilAccess ilAccessHandler
		 */
		global $ilUser, $ilAccess;

		if(!$a_user_id)
		{
			$a_user_id = $ilUser->getId();
		}

		return true;
	}
}