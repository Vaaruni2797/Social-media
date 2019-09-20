<?php
class Friends
{
	static public function renderFriendship($user_one,$user_two,$type){
		if(!empty($user_one) && !empty($user_two))
		{
			global $db;
			switch($type)
			{
				case 'isThereRequestPending':
				$query= $db->prepare(SELECT * FROM friends WHERE user_one ='".$user_one."' AND user_two ='".$user_two"' AND friendship_official='0' OR user_one ='".$user_two."' AND user_two ='".$user_one"' AND friendship_official='0' );
				$query->execute();
				return $query->rowCount();
				break;
				case'isThereFriendship':
					$query= $db->prepare(SELECT * FROM friends WHERE user_one ='".$user_one."' AND user_two ='".$user_two"' AND friendship_official='1' OR user_one ='".$user_two."' AND user_two ='".$user_one"' AND friendship_official='1' );
				$query->execute();
				return $query->rowCount();
				break;

			}
		}
	}
}