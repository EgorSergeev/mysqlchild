<HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<meta name="Author" content="СергеевГеоргийГеоргиевич">
<META NAME="ROBOTS" CONTENT="ALL">
<METANAME="Keywords" CONTENT="лабораторная работа, MySQL, соединение с базой данных">
<META NAME="Description" CONTENT="Лабораторнаяработа №1. Соединение с базой данных">
</head>
<title>Лабораторная работа №1. Соединение с базой данных</title>
<BODY>
<?
/* Переменные для соединения с базой данных */
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "lab1";
/* Таблица MySQL, в которой хранятся данные */
$userstable = "phonelib";
/* создатьсоединение */
mysql_connect($hostname,$username,$password) OR DIE("Немогусоздатьсоединение ");
/* выбрать базу данных. Если произойдет ошибка - вывести ее */
mysql_select_db($dbName) or die(mysql_error());
/* составить запрос для выборки информации */
$query = "SELECT * FROM $userstable";
/* Выполнитьзапрос. */
$result=mysql_query($query) or die(mysql_error());
echo "<TABLE BORDER=1>";
echo"<TR><TH>Идентификатор</TH><TH>Ф.И.О.</TH><TH>Дата рождения</TH></TR>";
/* Выбрать очередную запись из таблицы. */
while($row=mysql_fetch_array($result))// берем
//результаты из каждой строки
{
/* Вывести ее в виде HTML*/
echo "<tr><td>".$row['id']."</td><td>".$row['fio']."</td><td>".$row['bdate']."</td></tr>";
};
echo "</TABLE>";
/* Закрытьсоединение */
mysql_close();
?>
</BODY>
</HTML>
