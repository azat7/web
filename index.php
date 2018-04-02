<html>
	<head>
		<title>OOP</title>
	</head>
	<body>
<?
class A{
	function test(){
		echo "test A";
	}
	function call(){$this->test();}
}
/**
* 
*/
class B extends A
{
	
	function test()
	{
		echo "test B<br>";
	}
}
$a = new A;
$b = new B;
$a->test();
$b->test();
$b->call();
?>
	</body>
</html>