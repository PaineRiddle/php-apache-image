<?php
/**
  * wechat php test
  */

//define your token
define("TOKEN", "weixin");
//$wechatObj = new wechatCallbackapiTest();
//$wechatObj->valid();
set_time_limit(0);
$i=0;
$con = mysql_connect("10.10.26.58:3306","uoQqLyRr7lktUgwM","pSocJ34VnBzQOFgHW");
if(!$con){
	echo "connect Faile";	
}else{
	mysql_select_db("iwA4hU7YxaQfjb6n", $con);
	//mysql_query("UPDATE `mydb` SET `ID`=1,`NUM`=2,`KEY`=3,`TRUE`=1 WHERE `ID`=1");
	}
	//mysql_close($con);
while($i<30){
	$result = mysql_query("SELECT * FROM mydb WHERE ID=1");
	$row = mysql_fetch_array($result);
	if($row['TRUE']==1) {
		echo "ZY";
		exit;
	}
	sleep(1);
	$i++;
}
echo "But how does it work????";

class wechatCallbackapiTest
{
	public function valid()
    {
        $echoStr = $_GET["echostr"];

        //valid signature , option
        if($this->checkSignature()){
        	echo $echoStr;
        	exit;
        }
    }

    public function responseMsg()
    {
		//get post data, May be due to the different environments
		$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

      	//extract post data
		if (!empty($postStr)){
                
              	$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
                $fromUsername = $postObj->FromUserName;
                $toUsername = $postObj->ToUserName;
                $keyword = trim($postObj->Content);
                $time = time();
                $textTpl = "<xml>
				<ToUserName><![CDATA[%s]]></ToUserName>
				<FromUserName><![CDATA[%s]]></FromUserName>
				<CreateTime>%s</CreateTime>
				<MsgType><![CDATA[%s]]></MsgType>
				<Content><![CDATA[%s]]></Content>
				<FuncFlag>0</FuncFlag>
			    </xml>";             
		if(!empty( $keyword )){
              		$msgType = "text";
                	$contentStr = "Welcome to wechat world!";
                	$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                	echo $resultStr;
                }else{
                	echo "Input something...";
                }

        }else {
        	echo "no posted\n";
        }
    }
		
	private function checkSignature()
	{
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];	
        		
		$token = TOKEN;
		$tmpArr = array($token, $timestamp, $nonce);
		sort($tmpArr);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		
		if( $tmpStr == $signature ){
			return true;
		}else{
			return false;
		}
	}
}

?>
