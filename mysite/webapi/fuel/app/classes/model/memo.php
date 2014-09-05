<?php

class Model_Memo extends \Model_Crud
{
	protected static $_properties = array(
		'id',
		'memo',
		'created_at',
		'updated_at',
	);

	protected static $_created_at = 'created_at';

	protected static $_updated_at = 'updated_at';

	protected static $_mysql_timestamp = true;

	protected static $_table_name = 'memos';

}
