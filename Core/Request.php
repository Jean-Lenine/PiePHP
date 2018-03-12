<?php
namespace Core;
class Request {
	private $query = [];
	public function getQueryParams()
	{
		if($_POST)
		{
			foreach ($_POST as $key => $value) {
				$this->query[$key] = stripslashes($value);
				$this->query[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
				$this->query[$key] = trim($value);
			}
		}
		elseif($_GET)
		{
			foreach ($_GET as $key => $value) {
				$this->query[$key] = stripslashes($value);
				$this->query[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
				$this->query[$key] = trim($value);
			}
		}		
		return $this->query;
	}
}
?>