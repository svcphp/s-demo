<?php

class gateway_aa_bb_Cc
{
	static function test($data)
	{
		$r = s::call('demo.nameservice.name.setName', ['name' => 'Tom']);
		$r = s::call('demo.nameservice.name.getName', []);
		return s::ok(['name' => $r['data']['name']]);
	}
}