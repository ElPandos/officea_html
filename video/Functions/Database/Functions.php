<?php	

	include 'Functions/Database/Connect.php';
	
	function mysql_ask($table, $query)
	{ 
		return mysql_fetch_array(mysql_query($query));
	}
	
	function mysql_delete($table, $key)
	{
		$sql = "DELETE FROM " . $table . " WHERE username = '" . $key . "'";   
		return mysql_query($sql);
	}
	
	function mysql_insert($table, $inserts)
	{
		$values = array_map('mysql_real_escape_string', array_values($inserts));
		$keys = array_keys($inserts);
        
		return mysql_query('INSERT INTO `'.$table.'` (`'.implode('`,`', $keys).'`) VALUES (\''.implode('\',\'', $values).'\')');
	}
	
?>