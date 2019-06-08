<?php
namespace MikeLue\MikeLue;

use MikeLue\Common\Say;

/**
 * 测试composer
 */
class Lwk {

	public function __construct() {
		$this->say = new Say;
	}
	public function act() {
		$this->say->haha();
	}
}