<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
//λ��
$url="$spacename &gt; ����";
include("header.temp.php");
$viewuid=(int)getcvar('mluserid');
$adminmenu='';
if($viewuid==$userid)
{
	$adminmenu="<a href='../member/mspace/gbook.php' target='_blank'>��������</a>";
}
?>
<?=$spacegg?>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#96C8F1">
  <tr>
    <td height="24" background="template/default/images/bg_title_sider.gif">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>���԰�</td>
			<td align="right"><?=$adminmenu?></td>
		</tr>
	  </table>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"> 
	<?php
	while($r=$empire->fetch($sql))
	{
		$r['uname']=stripSlashes($r['uname']);
		if($r['uid'])
		{
			$r['uname']="<b><a href='../space/?userid=$r[uid]' target='_blank'>$r[uname]</a></b>";
		}
		//�����˵�
		$adminlink='';
		$ip='';
		if($adminmenu)
		{
			$ip=' IP: '.$r[ip];
			$adminlink="[<a href='#ecms' onclick=\"window.open('../member/mspace/ReGbook.php?gid=$r[gid]','','width=600,height=380,scrollbars=yes');\">�ظ�</a>]&nbsp;&nbsp;[<a href='../member/mspace/?enews=DelMemberGbook&gid=$r[gid]' onclick=\"return confirm('ȷ��Ҫɾ��?');\">ɾ��</a>]";
		}
		$gbuname=$r[uname]." ������".$r[addtime].$ip;
		//˽��
		if($r['isprivate'])
		{
			if($adminmenu||($r[uid]&&$viewuid==$r[uid]))
			{
				$r['gbtext']="<font color='blue'>[���Ļ�] ".$r['gbtext']."</font>";
			}
			else
			{
				$r['gbtext']='[���Ļ�����]';
			}
		}
	?>
		<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
        <tr> 
          <td height="23"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="76%"><?=$gbuname?></td>
                <td width="24%"><div align="right"><?=$adminlink?></div></td>
              </tr>
            </table></td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td height="25" style='word-break:break-all'>
		  	<?=nl2br(stripSlashes($r['gbtext']))?>
			<?
			if($r['retext'])
			{
			?>
			<table border=0 width='100%' cellspacing=1 cellpadding=10 bgcolor='#cccccc'>
            <tr> 
            <td width='100%' bgcolor='#FFFFFF' style='word-break:break-all'> 
             <?=nl2br(stripSlashes($r['retext']))?>
            </td>
            </tr>
            </table>
			<?
			}
			?>
		  </td>
        </tr>
      </table>
		<br>
	<?php
	}
	?>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
          <td height="25">&nbsp;<?=$returnpage?></td>
        </tr>
	</table>
	</td>
  </tr>
</table>
<br>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#96C8F1">
  <tr> 
    <td background="template/default/images/bg_title_sider.gif"><b>��������</b></td>
  </tr>
  <tr> 
    <td bgcolor="#FFFFFF">
      <table width="100%" border="0" cellspacing="1" cellpadding="3">
	  <form name="addgbook" method="post" action="../member/mspace/index.php">
	  <input type="hidden" name="userid" value="<?=$userid?>">
	  <input type="hidden" name="enews" value="AddMemberGbook">
        <tr> 
          <td width="16%">�ǳƣ�</td>
          <td width="84%"><input name="uname" type="text" id="uname" value="<?=RepPostStr(getcvar('mlusername'),1)?>">
              ˽��
              <input name="isprivate" type="checkbox" id="isprivate" value="1"></td>
        </tr>
        <tr> 
          <td valign="top">���ݣ�</td>
          <td><textarea name="gbtext" cols="60" rows="5" id="gbtext"></textarea></td>
        </tr>
        <tr> 
          <td>��֤�룺</td>
            <td> 
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="52"><input name="key" type="text" id="key" size="6" /></td>
                  <td id="spacegbshowkey"><a href="#EmpireCMS" onclick="edoshowkey('spacegbshowkey','spacegb','<?=$public_r['newsurl']?>');" title="�����ʾ��֤��">�����ʾ��֤��</a></td>
                </tr>
              </table></td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td><input type="submit" name="Submit" value="��������"></td>
        </tr>
		</form>
      </table></td>
  </tr>
</table>
<?php
include("footer.temp.php");
?>
