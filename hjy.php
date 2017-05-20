<?php
$urls = array(
    'http://http://www.huajiayi.top/%E7%AC%AC%E4%B8%80%E7%AF%87%E5%8D%9A%E5%AE%A2.html#more',
);
$api = 'http://data.zz.baidu.com/urls?site=www.huajiayi.top&token=N3W6zFA5HrMj7cHy&type=original';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;
?>