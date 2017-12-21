### getSysInfo
> 根据微信访问者useragent获取手机型号，手机系统
> 只支持微信浏览器，其他浏览器未测试

***

### 匹配规律

meta9 : Mozilla/5.0 (Linux; Android 7.0; MHA-AL00 Build/HUAWEIMHA-AL00; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/53.0.2785.49 Mobile MQQBrowser/6.2 TBS/043307 Safari/537.36 MicroMessenger/6.5.8.1060 NetType/WIFI Language/zh_CN

GALAXY S5 ：Mozilla/5.0 (Linux; Android 5.0; SM-G9009W Build/LRX21T; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/53.0.2785.49 Mobile MQQBrowser/6.2 TBS/043305 Safari/537.36 MicroMessenger/6.3.27.880 NetType/WIFI Language/zh_CN

iPhone ：Mozilla/5.0 (iPhone; CPU iPhone OS 10_2_1 like Mac OS X) AppleWebKit/602.4.6 (KHTML, like Gecko) Mobile/14D27 MicroMessenger/6.5.9 NetType/WIFI Language/zh_CN

规律还是比较简单，第一对括号内的内容，第一个参数区分系统，android 第三个参数是型号，iphone第二个参数是型号。


推荐：http://www.fynas.com/ua/search?d=&b=%E5%BE%AE%E4%BF%A1&k=&page=3 useragent收集站，可以查看各种手机的useragent在各浏览器下的样式

***


### 正则匹配

正则匹配百看百忘，百用百看。用到正则的以下几点：
* 惰性匹配 只匹配第一个() 内的内容 (iPhone; CPU iPhone OS 10_2_1 like Mac OS X)
* 断言 只匹配括号内的内容 iPhone; CPU iPhone OS 10_2_1 like Mac OS X

正则：
~~~

(?<=\().*?(?=\))

~~~





