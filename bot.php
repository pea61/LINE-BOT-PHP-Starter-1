<?php
	 
	$strAccessToken = "IrN10smd9lGZGp0JtOOoBJpAvSvDPFVNnDbTdxVbnU2Xv9YNaABrfKI2LxXxRH59XxerqJx3otWj0OqohFtMLiwSJy6fEEYarDN9KVKol7CqHo1GzqPST1DJI4hvg04yIDQiNwa2M1UD8K4SRn4XawdB04t89/1O/w1cDnyilFU=";
	 
	$content = file_get_contents('php://input');
	$arrJson = json_decode($content, true);


	 
	$strUrl = "https://api.line.me/v2/bot/message/reply";
	 
	$arrHeader = array();
	$arrHeader[] = "Content-Type: application/json";
	$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
	 
	if($arrJson['events'][0]['message']['text'] == "Hi"){
	  $arrPostData = array();
	  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
	  $arrPostData['messages'][0]['type'] = "text";
	  $arrPostData['messages'][0]['text'] = "สวัสดี ID คุณคือ ".$arrJson['events'][0]['source']['userId'];
	}else if($arrJson['events'][0]['message']['text'] == "สวัสดี"){
	  $arrPostData = array();
	  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
	  $arrPostData['messages'][0]['type'] = "text";
	  $arrPostData['messages'][0]['text'] = "สวัสดีครับเจ้านาย มีอะไรให้รับใช้ครับ";
	}else if($arrJson['events'][0]['message']['text'] == "เปิดไฟ"){
	  $arrPostData = array();
	  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
	  $arrPostData['messages'][0]['type'] = "text";
	  $arrPostData['messages'][0]['text'] = "เปิดไฟแล้วครับ";
	}else if($arrJson['events'][0]['message']['text'] == "ปิดไฟ"){
	  $arrPostData = array();
	  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
	  $arrPostData['messages'][0]['type'] = "text";
	  $arrPostData['messages'][0]['text'] = "ปิดไฟแล้วครับ";
	}else{
	  $arrPostData = array();
	  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
	  $arrPostData['messages'][0]['type'] = "text";
	  $arrPostData['messages'][0]['text'] = "ผมไม่เข้าใจคำสั่งครับ";
	}
	 
	 
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$strUrl);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$result = curl_exec($ch);
	curl_close ($ch);



			   
	 
	/?php>


