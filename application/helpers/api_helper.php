<?php
	function api($url){	//通过URL获取API里的数据{{{
		@$api_data = json_decode(file_get_contents($url), true);
		return $api_data;
	}	//}}}

	function opt($url_with_get, $post){	//{{{
		$user_agent = "op";
		$content_type = "application/x-www-form-urlencoded";
		$content = http_build_query($post);
		$content_length = strlen($content);
		$context = array(
						'http' => array(
										'method' => 'POST',
										'user_agent' => $user_agent,
										'header' => 'Content-Type: ' . $content_type . "\r\n" .
										'Content-Length: ' . $content_length,
										'content' => $content,
										),
						);
		$context_id = stream_context_create($context);
		echo file_get_contents($url_with_get, false, $context_id);
	}	//}}}
