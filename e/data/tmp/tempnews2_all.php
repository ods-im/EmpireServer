<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?=$grpagetitle?> - Powered by EmpireCMS</title>
<meta name="Keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<link href="/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/skin/default/js/tabs.js"></script>
</head>
<body class="showpage">
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
<a onclick="window.external.addFavorite(location.href,document.title)" href="#ecms">�����ղ�</a> | <a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('/')" href="#ecms">��Ϊ��ҳ</a> | <a href="/e/member/cp/">��Ա����</a> | <a href="/e/DoInfo/">��ҪͶ��</a> | <a href="/e/web/?type=rss2&classid=<?=$ecms_gr[classid]?>" target="_blank">RSS<img src="/skin/default/images/rss.gif" border="0" hspace="2" /></a>
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
		<td class="main"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
				<tr>
					<td>����ǰ��λ�ã�<?=$grurl?></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><table width="100%" border="0" cellpadding="3" cellspacing="2" bgcolor="#FFFFFF">
							<tbody>
								<tr>
									<td width="78" align="center" nowrap="nowrap" bgcolor="#E1EFFB"><b>������ƣ�</b></td>
									<td colspan="2" bgcolor="#E1EFFB"><b><?=$ecms_gr[title]?></b></td>
								</tr>
								<tr>
									<td align="center"><strong>�ļ����ͣ�</strong></td>
									<td width="296"><?=$ecms_gr[filetype]?></td>
									<td width="180" rowspan="9" align="center"><a href="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" target="_blank"><img src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" border="0" width="128" /></a></td>
								</tr>
								<tr>
									<td align="center" bgcolor="#F4F9FD"><strong>�������ԣ�</strong></td>
									<td bgcolor="#F4F9FD"><?=$ecms_gr[language]?></td>
								</tr>
								<tr>
									<td align="center"><strong>������ͣ�</strong></td>
									<td><?=$ecms_gr[softtype]?></td>
								</tr>
								<tr>
									<td align="center" bgcolor="#F4F9FD"><strong>���л�����</strong></td>
									<td bgcolor="#F4F9FD"><?=$ecms_gr[softfj]?></td>
								</tr>
								<tr>
									<td align="center"><strong>��Ȩ��ʽ��</strong></td>
									<td><?=$ecms_gr[softsq]?></td>
								</tr>
								<tr>
									<td align="center" bgcolor="#F4F9FD"><strong>�����С��</strong></td>
									<td bgcolor="#F4F9FD"><?=$ecms_gr[filesize]?></td>
								</tr>
								<tr>
									<td align="center"><strong>����ȼ���</strong></td>
									<td><img src="/e/data/images/<?=$ecms_gr[star]?>star.gif" border="0" /></td>
								</tr>
								<tr>
									<td align="center" bgcolor="#F4F9FD"><strong>�����½��</strong></td>
									<td bgcolor="#F4F9FD"><?=$ecms_gr[username]?></td>
								</tr>
								<tr>
									<td align="center"><strong>�� �� ��</strong></td>
									<td><?=$ecms_gr[softwriter]?></td>
								</tr>
								<tr>
									<td align="center" bgcolor="#F4F9FD"><strong>�ٷ���ַ��</strong></td>
									<td colspan="2" bgcolor="#F4F9FD"><a href='<?=$ecms_gr[homepage]?>' target="_blank">�ٷ�վ</a></td>
								</tr>
								<tr>
									<td align="center"><strong>������ʾ��</strong></td>
									<td colspan="2"><a href='<?=$ecms_gr[demo]?>' target="_blank">��ʾ</a></td>
								</tr>
								<tr>
									<td align="center" bgcolor="#F4F9FD"><strong>����ʱ�䣺</strong></td>
									<td colspan="2" bgcolor="#F4F9FD"><?=date('Y-m-d',$ecms_gr[newstime])?></td>
								</tr>
								<tr>
									<td align="center"><strong>�����飺</strong></td>
									<td 
            colspan="2"> <?=nl2br($ecms_gr[softsay])?></td>
								</tr>
								<tr>
									<td width="78" align="center" nowrap="nowrap" bgcolor="#F4F9FD"><b><font color="#008E00">���ص�ַ��</font></b></td>
									<td colspan="2" bgcolor="#F4F9FD"> <?=ReturnDownSoftHtml($ecms_gr)?></td>
								</tr>
								<tr>
									<td align="center" nowrap="nowrap"><strong>���ذ�����</strong></td>
									<td colspan="2"><img src="/e/data/images/gonggao.gif" border="0" /><a href="/e/pl/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>">��������</a> <img src="/e/data/images/gonggao.gif" border="0" /><a href="/e/member/fava/add/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>">�����ղؼ�</a> <img src="/e/data/images/gonggao.gif" border="0" /><a href="/e/public/report/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>" target="_blank">���󱨸�</a></td>
								</tr>
								<tr>
									<td width="78" align="center" valign="top" nowrap="nowrap" bgcolor="#F4F9FD"><b><font color="#008E0">��������</font></b></td>
									<td colspan="2" bgcolor="#F4F9FD"><?=GetKeyboard($ecms_gr[keyboard],$ecms_gr[keyid],$ecms_gr[classid],$ecms_gr[id],$class_r[$ecms_gr[classid]][link_num])?></td>
								</tr>
								<tr>
									<td align="center" valign="center" nowrap="nowrap"><strong>����˵����</strong></td>
									<td colspan="2">���Ƽ�ʹ�����ʿ쳵���ر�վ�����ʹ�� WinRAR v3.10 ���ϰ汾��ѹ��վ�����<br />
										��������������ǲ������ص������������,лл����!!<br />
										�����ر�վ��Դ������������ݲ����������һ��ʱ�����ԣ�<br />
										���������ʲô���⣬�뵽<a href="http://www.phome.net" target="_blank">��վ��̳</a>ȥ��Ѱ�����ǽ��������ṩ����
										�����õ���Դ��<br />
										����վ�ṩ��һЩ��ҵ����ǹ�ѧϰ�о�֮�ã���������ҵ��;���빺�����档 </td>
								</tr>
							</tbody>
						</table>
						</td>
				</tr>
			</table>
			<script>
		  function CheckPl(obj)
		  {
		  if(obj.saytext.value=="")
		  {
		  alert("��ûʲô��Ҫ˵��");
		  obj.saytext.focus();
		  return false;
		  }
		  return true;
		  }
		  </script><form action="/e/pl/doaction.php" method="post" name="saypl" id="saypl" onsubmit="return CheckPl(document.saypl)">
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="plpost">

<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="title">
<tr>
<td><strong>��������</strong></td>
<td align="right"><a href="/e/pl/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>">����<span><script type="text/javascript" src="/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=2"></script></span>������</a></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="2">
<tr>
<td width="56%" align="left">�û���:
<input name="username" type="text" class="inputText" id="username" value="" size="16" /></td>
<td width="44%" align="left">����:
<input name="password" type="password" class="inputText" id="password" value="" size="16" /></td>
</tr>
<tr>
<td align="left">��֤��:
<input name="key" type="text" class="inputText" size="10" />
<img src="/e/ShowKey/?v=pl" align="absmiddle" name="plKeyImg" id="plKeyImg" onclick="plKeyImg.src='/e/ShowKey/?v=pl&t='+Math.random()" title="�������,���ˢ��" /> </td>
<td align="left"><input name="nomember" type="checkbox" id="nomember" value="1" checked="checked" />
��������</td>
</tr>
</table>
<textarea name="saytext" rows="6" id="saytext"></textarea><input name="imageField" type="image" src="/e/data/images/postpl.gif"/>
<input name="id" type="hidden" id="id" value="<?=$ecms_gr[id]?>" />
<input name="classid" type="hidden" id="classid" value="<?=$ecms_gr[classid]?>" />
<input name="enews" type="hidden" id="enews" value="AddPl" />
<input name="repid" type="hidden" id="repid" value="0" />
<input type="hidden" name="ecmsfrom" value="<?=$grtitleurl?>"></td>
</tr>
</table>
</td>
</tr>
</table></form></td>
		<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
				<tr>
					<td><strong>�Ƽ�����</strong></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><ul>
              <script src='/d/js/class/class<?=$ecms_gr[classid]?>_goodnews.js'></script></ul></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
				<tr>
					<td><strong>������</strong></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><ul>
              <script src='/d/js/class/class<?=$ecms_gr[classid]?>_newnews.js'></script></ul></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
				<tr>
					<td><strong>���ŵ��</strong></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><ul>
              <script src='/d/js/class/class<?=$ecms_gr[classid]?>_hotnews.js'></script></ul></td>
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
</table> <?='<script src="'.$public_r[newsurl].'e/public/onclick/?enews=donews&classid='.$ecms_gr[classid].'&id='.$ecms_gr[id].'"></script>'?>
</body>
</html>