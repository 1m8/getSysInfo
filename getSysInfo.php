<?php 
// +----------------------------------------------------------------------
// | description: 根据微信浏览器 useragent 获取手机型号，系统
// +----------------------------------------------------------------------
// | author: lidl
// +----------------------------------------------------------------------
// | date: 2017年12月21日
// +----------------------------------------------------------------------
// | Author: lidl <lidalin.se@gmail.com><http://1m85.com>
// +----------------------------------------------------------------------

class getSysInfo{
	
	private $useragent;
	
	public function __construct(){
		
		$this->useragent 	=  $_SERVER['HTTP_USER_AGENT'];
		//$this->useragent 	=  'Mozilla/5.0 (Linux; Android 6.0.1; SM-A8000 Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/53.0.2785.49 Mobile MQQBrowser/6.2 TBS/043305 Safari/537.36 MicroMessenger/6.3.31.940 NetType/WIFI Language/zh_CN';
	
	}
	
	
	public function getSys()
	{
		$arr = $this->preg();			
		
		switch (trim($arr[0]))
		{
			case 'iPhone':
				return $arr[0];
				break;
			case 'Linux':
				return $arr[1];
				break;
			default:
				return 'Unknow';
				break;
				
		}
		
	}
	
	
	public function getBrand()
	{
		$arr = $this->preg();
		
		switch (trim($arr[0]))
		{
			case 'iPhone':
				return $arr[1];
				break;
			case 'Linux':
				return $arr[2];
				break;
			default:
				return 'Unknow';
				break;
				
		}
		
	}
	
	/**
	 * 匹配括号内的内容
	 * 
	 * @return array $result 返回字符串结果，或者 0
	 * 
	 */
	private function preg()
	{
		$result = preg_match('/(?<=\().*?(?=\))/', $this->useragent, $matches);
		return explode(";", $matches[0]);
		
	}
	
	
}





?>


