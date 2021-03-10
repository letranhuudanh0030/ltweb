<?php

class Model extends DB
{
    // Ten table
	var $table = '';
	
	// Key chinh cua table
	var $key = 'id';
	
	// Order mac dinh (VD: $order = array('id', 'desc))
	var $order = '';
	
	// Cac field select mac dinh khi get_list (VD: $select = 'id, name')
	var $select = '';

	function get($select, $condition)
    {
        $query = $this->select($select, $this->table, $condition);
        // pre($query);
		return mysqli_fetch_all($query, MYSQLI_ASSOC);
        // return $query;
    }
    
    function get_list()
    {
        $query = $this->select('*', $this->table);
        // pre($query);
		return mysqli_fetch_all($query, MYSQLI_ASSOC);
        // return $query;
    }

	function get_list_publish()
	{
		$query = $this->select("*", $this->table, [
			'publish' => 1
		]);
		return mysqli_fetch_all($query, MYSQLI_ASSOC);
		// return $query;
	}

	function get_list_highlight()
	{
		$query = $this->select("*", $this->table, [
			'publish' => 1,
			'highlight' => 1
		]);
		return mysqli_fetch_all($query, MYSQLI_ASSOC);
		// return $query;
	}

	function get_list_publish_by_order($condition = ['publish' => 1] ,$sort = ['sort_order' => "ASC"])
	{
		$query = $this->select("*", $this->table, $condition , $sort);
		return mysqli_fetch_all($query, MYSQLI_ASSOC);
	}

	function get_info($select = '*', $condition)
	{
		$query = $this->select($select, $this->table, $condition);
		return $query->fetch_assoc();
	}

	function store($data = array())
	{
        // pre($this->insert($this->table, $data));
		if($this->insert($this->table, $data))
		{
		    return TRUE;
		}else{
		    return FALSE;
		}
	}

	function update($data = array(), $condition = array())
	{
		$query = $this->updateWhere($this->table, $data, $condition);
		return $query;
	}

	function destroy($id)
	{
		if($this->delete($this->table, $id)){
			return TRUE;
		} else {
			return FALSE;
		}

	}

}
