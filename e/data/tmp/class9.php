<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������Ϣ - Powered by EmpireCMS</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/skin/default/js/tabs.js"></script>
</head>
<body class="channle">
<!-- ҳͷ -->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="top">
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="63%"> 
<!-- ��¼ -->
<script>
document.write('<script src="/e/member/login/loginjs.php?t='+Math.random()+'"><'+'/script>');
</script>
</td>
<td align="right">
<a onclick="window.external.addFavorite(location.href,document.title)" href="#ecms">�����ղ�</a> | <a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('/')" href="#ecms">��Ϊ��ҳ</a> | <a href="/e/member/cp/">��Ա����</a> | <a href="/e/DoInfo/">��ҪͶ��</a> | <a href="/e/web/?type=rss2&classid=9" target="_blank">RSS<img src="/skin/default/images/rss.gif" border="0" hspace="2" /></a>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="10">
<tr valign="middle">
<td width="240" align="center"><a href="/"><img src="/skin/default/images/logo.gif" width="200" height="65" border="0" /></a></td>
<td align="center"><a href="http://www.phome.net/OpenSource/" target="_blank"><img src="/skin/default/images/opensource.gif" width="100%" height="70" border="0" /></a></td>
</tr>
</table>
<!-- ����tabѡ� -->
<table width="920" border="0" align="center" cellpadding="0" cellspacing="0" class="nav">
  <tr> 
    <td class="nav_global"><ul>
        <li class="curr" id="tabnav_btn_0" onmouseover="tabit(this)"><a href="/">��ҳ</a></li>
        <? @sys_ShowClassByTemp('0',12,0,0);?> </ul></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td class="news_list"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
<tr>
<td>����ǰ��λ�ã�<a href="/">��ҳ</a>&nbsp;>&nbsp;<a href="/info/">������Ϣ</a></td>
</tr>
</table>
<? @sys_ForSonclassData('selfinfo',5,38,0,0,7,0,0);?></td>
<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>������Ϣ����</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><form action="/e/search/index.php" method="post" name="searchform" id="searchform">
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="6">
<input type="hidden" name="tbname" value="info">
<input type="hidden" name="tempid" value="1">
<tr>
<td><input name="keyboard" type="text" class="inputText" id="keyboard" size="18" />
<select name="show">
<option value="title,smalltext,myarea" selected="selected">����</option>
<option value="title">��Ϣ����</option>
<option value="smalltext">��Ϣ����</option>
<option value="myarea">���ڵ�</option>
</select></td>
</tr>
<tr>
<td><select name="classid">
<option value='9'>���з���</option>
<option value='10'>|-������Ϣ</option>
<option value='11' >&nbsp;&nbsp;|-��������</option>
<option value='12' >&nbsp;&nbsp;|-���ݳ���</option>
<option value='13' >&nbsp;&nbsp;|-������</option>
<option value='14' >&nbsp;&nbsp;|-���ݳ���</option>
<option value='15' >&nbsp;&nbsp;|-�칫�÷�</option>
<option value='16' >&nbsp;&nbsp;|-��������</option>
<option value='17'>|-�����г�</option>
<option value='18' >&nbsp;&nbsp;|-�������</option>
<option value='19' >&nbsp;&nbsp;|-��������</option>
<option value='20' >&nbsp;&nbsp;|-ͨѶ��Ʒ</option>
<option value='21' >&nbsp;&nbsp;|-�Ӽ���Ʒ</option>
<option value='22'>|-ͬ������</option>
<option value='23' >&nbsp;&nbsp;|-��������</option>
<option value='24' >&nbsp;&nbsp;|-�������</option>
<option value='25' >&nbsp;&nbsp;|-���λ</option>
<option value='26' >&nbsp;&nbsp;|-�����ʾ</option>
<option value='27'>|-��ְ��Ƹ</option>
<option value='28' >&nbsp;&nbsp;|-���̼���</option>
<option value='29' >&nbsp;&nbsp;|-������</option>
<option value='30' >&nbsp;&nbsp;|-������ҵ</option>
<option value='31' >&nbsp;&nbsp;|-��Ӫ����</option>
</select>
<input name="Submit2" type="image" value="����" src="/skin/default/images/search.gif" />��
[<a href="/e/DoInfo/ChangeClass.php?mid=8" target="_blank">������Ϣ</a>]</td>
</tr>
</table>
</form></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>��������</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
	<tr>
		<td width="33%"><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=������">������</a></td>
		<td width="33%"><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=������">������</a></td>
		<td width="33%"><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=ͨ����">ͨ����</a></td>
	</tr>
	<tr>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=������">������</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=������">������</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=������">������</a></td>
	</tr>
	<tr>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" /><a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=������">&nbsp;������</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=������">������</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=��ƽ��">��ƽ��</a></td>
	</tr>
	<tr>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=��̨��">��̨��</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=ʯ��ɽ��">ʯ��ɽ��</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=����">����</a></td>
	</tr>
</table></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>���ർ��</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><table width="100%" border="0" cellpadding="4" cellspacing="0">
  <tr>
    <td bgcolor="#EEF1F4">&nbsp;<img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo/?classid=10"><strong>������Ϣ</strong></a></td>
  </tr> 
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/e/action/ListInfo/?classid=11">��������</a></td>
    <td width="33%"><a href="/e/action/ListInfo/?classid=12">���ݳ���</a></td>
  		<td width="33%"><a href="/e/action/ListInfo/?classid=15">�칫�÷�</a></td>
  </tr>
  <tr>
    <td><a href="/e/action/ListInfo/?classid=13">������</a></td>
    <td><a href="/e/action/ListInfo/?classid=14">���ݳ���</a></td>
  		<td><a href="/e/action/ListInfo/?classid=16">��������</a></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="4" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo/?classid=17"><strong>�����г�</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/e/action/ListInfo/?classid=18">�������</a></td>
    <td width="33%"><a href="/e/action/ListInfo/?classid=19">��������</a></td>
  		<td width="33%"><a href="/e/action/ListInfo/?classid=21">�Ӽ���Ʒ</a></td>
  </tr>
  <tr>
    <td><a href="/e/action/ListInfo/?classid=20">ͨѶ��Ʒ</a></td>
    <td><a href="/e/action/ListInfo/?classid=21"></a></td>
  		<td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo/?classid=22"><strong>ͬ������</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/e/action/ListInfo/?classid=23">��������</a></td>
    <td width="33%"><a href="/e/action/ListInfo/?classid=24">�������</a></td>
  		<td width="33%"><a href="/e/action/ListInfo/?classid=26">�����ʾ</a></td>
  </tr>
  <tr>
    <td><a href="/e/action/ListInfo/?classid=25">���λ</a></td>
    <td>&nbsp;</td>
  		<td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo/?classid=27"><strong>��ְ��Ƹ</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/e/action/ListInfo/?classid=28">���̼���</a></td>
    <td width="33%"><a href="/e/action/ListInfo/?classid=29">������</a></td>
  		<td width="33%"><a href="/e/action/ListInfo/?classid=31">��Ӫ����</a></td>
  </tr>
  <tr>
    <td><a href="/e/action/ListInfo/?classid=30">������ҵ</a></td>
    <td><a href="/e/action/ListInfo/?classid=31"></a></td>
  		<td>&nbsp;</td>
  </tr>
</table></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>���ŵ��</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ol class="rank">
<? @sys_GetEcmsInfo('selfinfo',10,40,0,1,10,0);?> 
</ol></td>
</tr>
</table></td>
</tr>
</table>
<!-- ҳ�� -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td align="center" class="search">
<form action="/e/search/index.php" method="post" name="searchform" id="searchform">
<table border="0" cellspacing="6" cellpadding="0">
<tr>
<td><strong>վ��������</strong>
<input name="keyboard" type="text" size="32" id="keyboard" class="inputText" />
<input type="hidden" name="show" value="title" />
<input type="hidden" name="tempid" value="1" />
<select name="tbname">
<option value="news">����</option>
<option value="download">����</option>
<option value="photo">ͼ��</option>
<option value="flash">FLASH</option>
<option value="movie">��Ӱ</option>
<option value="shop">��Ʒ</option>
<option value="article">����</option>
<option value="info">������Ϣ</option>
</select>
</td>
<td><input type="image" class="inputSub" src="/skin/default/images/search.gif" />
</td>
<td><a href="/search/" target="_blank">�߼�����</a></td>
</tr>
</table>
</form>
</td>
</tr>
<tr>
<td>
	<table width="100%" border="0" cellpadding="0" cellspacing="4" class="copyright">
        <tr> 
          <td align="center"><a href="/">��վ��ҳ</a> | <a href="#">��������</a> 
            | <a href="#">��������</a> | <a href="#">������</a> | <a href="#">��ϵ����</a> 
            | <a href="#">��վ��ͼ</a> | <a href="#">��������</a> | <a href="/e/wap/" target="_blank">WAP</a></td>
        </tr>
        <tr> 
          <td align="center">Powered by <strong><a href="http://www.phome.net" target="_blank">EmpireCMS</a></strong> 
            <strong><font color="#FF9900">7.5</font></strong>&nbsp; &copy; 2002-2018 
            <a href="http://www.digod.com" target="_blank">EmpireSoft Inc.</a></td>
        </tr>
	</table>
</td>
</tr>
</table>
</body>
</html>