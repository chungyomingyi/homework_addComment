<?php

$obj = new CTest();
$obj->firstName = "Jeremy";
$name = $obj->firstName;
echo "<hr>";
echo $name;


class CTest {

	private $_dataBag = array();
	//__set()方法用來設定私有屬性 
	public function __set($varName, $varValue)
	{
		echo "__set<br>";
		echo $varName, ": ", $varValue, "<br>";
		$this->_dataBag[$varName] = $varValue;
	}
	//__get()方法用來取得私有屬性
	public function __get($varName)
	{
		echo "__get<br>";
		echo $varName, "<br>";
		return $this->_dataBag[$varName];
	}
		
}
//執行結果如下：

//__set
//firstName: Jeremy
// __get
// firstName
//------------------分隔線--------------------
//Jeremy
?>
