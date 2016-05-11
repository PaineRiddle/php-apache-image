<?php
/**
  * wechat php test
  */
$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

if(!empty($postStr)){
	$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
	$fromUsername = $postObj->FromUserName;
	$toUsername = $postObj->ToUserName;
	$keyword = trim($postObj->Content);
	$time = time();
	$textTpl = "<xml>
		    <ToUserName><![CDATA[%s]]></ToUserName>
		    <FromUserName><![CDATA[%s]]></FromUserName>
	            <CreateTime>%S</CreateTime>
	            <MsgType><![CDATA[%s]]></MsgType>
	            <Content><![CDATA[%s]]></Content>
		    </xml>"
	if(!empty($keyword)){
		$msgType = "text"; 
		$contentStr = "Welcome to wechat world!"; 
		$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
		echo $resultStr;
	}else{
		echo "input sometings...";
	}
}else{
	echo "wrong???";
}
?>
