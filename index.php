<HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<meta name="Author" content="������������������������">
<META NAME="ROBOTS" CONTENT="ALL">
<METANAME="Keywords" CONTENT="������������ ������, MySQL, ���������� � ����� ������">
<META NAME="Description" CONTENT="������������������ �1. ���������� � ����� ������">
</head>
<title>������������ ������ �1. ���������� � ����� ������</title>
<BODY>
<?
/* ���������� ��� ���������� � ����� ������ */
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "lab1";
/* ������� MySQL, � ������� �������� ������ */
$userstable = "phonelib";
/* ����������������� */
mysql_connect($hostname,$username,$password) OR DIE("����������������������� ");
/* ������� ���� ������. ���� ���������� ������ - ������� �� */
mysql_select_db($dbName) or die(mysql_error());
/* ��������� ������ ��� ������� ���������� */
$query = "SELECT * FROM $userstable";
/* ���������������. */
$result=mysql_query($query) or die(mysql_error());
echo "<TABLE BORDER=1>";
echo"<TR><TH>�������������</TH><TH>�.�.�.</TH><TH>���� ��������</TH></TR>";
/* ������� ��������� ������ �� �������. */
while($row=mysql_fetch_array($result))// �����
//���������� �� ������ ������
{
/* ������� �� � ���� HTML*/
echo "<tr><td>".$row['id']."</td><td>".$row['fio']."</td><td>".$row['bdate']."</td></tr>";
};
echo "</TABLE>";
/* ����������������� */
mysql_close();
?>
</BODY>
</HTML>
