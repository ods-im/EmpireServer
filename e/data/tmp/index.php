<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�۹���վ����ϵͳ - Powered by EmpireCMS</title>
<meta name="keywords" content="�۹���վ����ϵͳ,EmpireCMS" />
<meta name="description" content="�����۹������һ��רע��������������ĿƼ���˾������Ӫ��Ʒ���۹���վ����ϵͳ(EmpireCMS)����Ŀǰ����Ӧ�ó��߹㷺��CMS����ͨ��ʮ����Ĳ��ϴ��������ƣ�ʹϵͳ����ȫ���ȶ���ǿ�������һ��ĿǰEmpireCMS�����Ѿ��㷺Ӧ���ڹ����ϰ������վ�����ǹ�����ǧ��������Ⱥ����������ǧ��֪����վ���ϸ��⣬����Ϊ���ڳ��߰�ȫ�������ȶ��Ŀ�ԴCMSϵͳ��" />
<link href="/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/skin/default/js/tabs.js"></script>
</head>
<body class="homepage">
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
<a onclick="window.external.addFavorite(location.href,document.title)" href="#ecms">�����ղ�</a> | <a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('/')" href="#ecms">��Ϊ��ҳ</a> | <a href="/e/member/cp/">��Ա����</a> | <a href="/e/DoInfo/">��ҪͶ��</a> | <a href="/e/web/?type=rss2&classid=0" target="_blank">RSS<img src="/skin/default/images/rss.gif" border="0" hspace="2" /></a>
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
<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>������</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ul>
<? @sys_GetEcmsInfo(0,11,28,0,3,2,0);?>
</ul>
<? @sys_GetEcmsInfo(0,1,18,0,5,5,1);?></td>
</tr>
</table></td>
<td class="content"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
          <td> 
            <!-- ����ͼƬ������Ĭ��ģ�ʹ�����ͼƬ��ͷ����Ϣ -->
            <? @sys_FlashPixpic(0,3,450,250,0,0,13,3);?> </td>
</tr>
</table>
<!-- ͷ����Ϣ���� -->
<table width="100%" border="0" cellspacing="8" cellpadding="0" class="focus">
<tr>
<td><? @sys_GetEcmsInfo(0,1,50,0,13,8,0);?></td>
</tr>
<tr>
<td align="center"><? @sys_GetEcmsInfo(0,'1,2',28,0,13,4,0);?></td>
</tr>
</table></td>
<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>�Ƽ���Ѷ</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box no_doc">
<tr>
<td><ul>
<? @sys_GetEcmsInfo(0,5,28,0,5,3,0);?>
</ul></td>
</tr>
</table></td>
</tr>
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
    <td align="center" class="banner_ad"><a href="http://www.phome.net/ebak2008/" target="_blank" title="�����������"><img src="/skin/default/images/empirebak.gif" width="920" height="90" border="0" /></a></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td width="230" class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong><a href="/info/">������Ϣ</a></strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ul>
<? @sys_GetEcmsInfo('info',10,28,0,18,2,0);?>
</ul></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong><a href="/download/">���ظ���</a></strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box no_doc">
<tr>
<td><ul>
              <? @sys_GetEcmsInfo('download',4,26,0,18,9,0);?> 
            </ul></td>
</tr>
</table></td>
<td class="content"><!-- tabѡ���Ĭ��Ϊ����仯�������Ϊ�ƶ�����onmouseover��Ϊonclick -->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbtn1">
<tr>
<td class="tbtncon"><ul><li class="curr" id="tab1_btn_0" onmouseover="etabit(this)">����</li><li id="tab1_btn_1" onmouseover="etabit(this)">ͼƬ</li><li id="tab1_btn_2" onmouseover="etabit(this)">Ӱ��</li><li id="tab1_btn_3" onmouseover="etabit(this)">FLASH</li></ul></td>
</tr>
<tr>
<td class="picList"><div id="tab1_div_0"> <? @sys_GetClassNewsPic('news',3,6,128,90,1,20,20);?> 
            </div>
            <div id="tab1_div_1" style="display:none;"> <? @sys_GetClassNewsPic('photo',3,6,128,90,1,20,20);?> 
            </div>
            <div id="tab1_div_2" style="display:none;"> <? @sys_GetClassNewsPic('movie',3,6,128,90,1,20,20);?> 
            </div>
            <div id="tab1_div_3" style="display:none;"> <? @sys_GetClassNewsPic('flash',3,6,128,90,1,20,20);?> 
            </div></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>����ר��</strong></td>
</tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="box">
<tr valign="top">
<td width="50%"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="news_title">
<tr>
                <td><? @sys_GetEcmsInfo(34,1,20,0,2,8,0);?> </td>
</tr>
</table>
<ul>
              <? @sys_GetEcmsInfo(34,7,26,0,0,2,0);?> 
            </ul></td>
<td width="50%"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="news_title">
<tr>
                <td><? @sys_GetEcmsInfo(35,1,20,0,2,8,0);?></td>
</tr>
</table>
<ul>
              <? @sys_GetEcmsInfo(35,7,26,0,0,2,0);?> 
            </ul></td>
</tr>
</table></td>
<td width="240" class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>���ŵ��</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ol class="rank">
<? @sys_GetEcmsInfo(0,10,28,0,4,10,0);?> 
</ol></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>������������</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ul>
<? @sys_GetEcmsInfo(0,13,28,0,10,2,0);?> 
</ul></td>
</tr>
</table></td>
</tr>
</table>
<!-- �������� -->
<table width="100%" border="0" cellspacing="10" cellpadding="0" class="links">
<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#E9F2FB" class="title">
<tr>
<td><strong>��������</strong></td>
          <td align="right">&nbsp;</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0" class="box">
<tr>
          <td>
            <!-- �������� -->
            <? @sys_GetSitelink(9,18,2,0,1);?> 
            <hr width="100%" size="1" noshade="noshade" />
            <!-- logo���� -->
            <? @sys_GetSitelink(9,18,1,0,1);?></td>
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