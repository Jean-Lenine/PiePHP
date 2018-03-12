<?php
namespace Model;
use Core\Entity;
class UserModel extends Entity{
	public function checkAuth()
	{
		$reponse = $this->bdd->prepare("SELECT password FROM ".$this->table);
		if($reponse->execute(array($this->mail)))
		{
			while ($row = $reponse->fetch()) {				
				if($this->password == $row['password'])
					return true;
			}
		}
		return false;
	}
}
?>