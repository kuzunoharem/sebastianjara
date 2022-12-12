<!DOCTYPE html>
<head>
<title>!Tarea de Administracion de Servicios web </title>
</head> 
<body 
bgcolor="orange"
text="black">
<center>

<?phpclass MyClass {
	public static $str = "<h3>Mi nombre es Sebastian Jara";
	public static $SJ = "Administracion de servicios web <br>";
}
echo Myclass::$str."<br>";
echo Myclass::$SJ;"<br>";
echo "Fecha actual: " .date("d/m/Y") . "<br>";
date_default_timezone_set("America/Santiago");
echo "hora actual: " .date("G:i:s");
?>
</center>
</body>
</html>