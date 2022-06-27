<html>
<head>
<meta charset="utf-8">
<title>hash加密</title>
</head>
<body>
<h1>HASH加密</h1>
<form>
 请输入明文:<input type="text" name="id" size='50'/>
 <input type="submit" /> 
</form>
<?php
$ccode=$_GET['id'];

for($i=1;$i<=1;$i++)
{
echo '<font color="red">明文:</font>  '."$ccode"."<br>" ;
echo '<font color="red">MD5:</font>  '.md5($ccode)."<br>";
echo '<font color="red">MD5_Middle:</font>  '.substr(md5($ccode),8,16)."<br>";
echo '<font color="red">MD5(MD5($)):</font>  '.md5(md5($ccode))."<br>";
echo '<font color="red">MD5(MD5(MD5($))):</font>  '.md5(md5(md5($ccode)))."<br>";
echo '<font color="red">SHA-1:</font>  '.sha1($ccode)."<br>";
echo '';
}
?>
</body>
</html>
