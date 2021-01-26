<?php

class gateway_Cc
{
	static function test($data)
	{
		$r = s::call('nameservice.aa.Name.setName', ['name' => 'Tom']);
		$r = s::call('nameservice.aa.Name.getName', []);
		return s::ok(['name' => $r['data']['name']]);
	}
}
