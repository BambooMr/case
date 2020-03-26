<?php
/*
WGS-84：GPS坐标系
GCJ-02：火星坐标系，国测局02年发布的坐标体系，高德，腾讯等使用。
BD-09：百度坐标系，百度自研，百度地图使用。
*/

include_once './Gps.php';

$gps = new Gps();

//WGS-84 to GCJ-02
$wgs_position = ['lat' => '22.994301', 'lng' => '113.702473'];
$gcj_result = $gps->gcj_encrypt($wgs_position['lat'], $wgs_position['lng']);
var_Dump($gcj_result);
