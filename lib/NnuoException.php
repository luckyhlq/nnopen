<?php
/**
 * 
 * 诺诺开放平台异常类
 * @author liqiao
 *
 */

namespace Nnuo\Open;

class NnuoException extends \Exception {
	public function errorMessage()
	{
		return $this->getMessage();
	}
}
