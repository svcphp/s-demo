<?php


class cc
{
	static function test($data)
	{
		$r = s::call('demo.nameservice.name.setName', ['name' => 'Tom']);
		$r = s::call('demo.nameservice.name.getName', []);
		$s = new Service();
//		echo json_encode($s->fixSensitive(s::ok(['name' => $r['data']['name'], 'phone' => '13938383939', 'firstUser' => ['id' => 0, 'phone' => '13938383939', 'parents' => [['id' => 1, 'phone' => '13938383939'], ['id' => 2, 'phone' => '13938383939']]], 'users' => [['id' => 1, 'phone' => '13938383939'], ['id' => 2, 'phone' => '13938383939']], 'allUsers' => [[['id' => 1, 'phone' => '13938383939'], ['id' => 2, 'phone' => '13938383939']], [['id' => 11, 'phone' => '13938383939'], ['id' => 12, 'phone' => '13938383939']]]])), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
		return s::ok(['name' => $r['data']['name']]);
	}
}
