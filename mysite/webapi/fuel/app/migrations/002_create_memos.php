<?php

namespace Fuel\Migrations;

class Create_memos
{
	public function up()
	{
		\DBUtil::create_table('memos', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'memo' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('type' => 'timestamp'),
			'updated_at' => array('type' => 'timestamp'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('memos');
	}
}