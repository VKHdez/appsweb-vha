<html>
<head> <title> Recibir</title> </head>
<body>
	<h2> HISTOGRAMA DE VOTO </h2>
	<hr>
	<?PHP
	include "libchart/classes/libchart.php";
	$id = $_REQUEST['id'];
	$partido = $_REQUEST['partido'];

	//crear la conexion con la BD
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"votos");//base de datos votos
	mysqli_query($link,"insert into votaciones (persona,voto) values ('$id','$partido')");//almacenar el nombre y voto en la DB

	//Realizar la grafica
	$chart = new HorizontalBarChart(600,270);
	$dataset=new XYDataSet();

	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"votos");
	$result=mysqli_query($link,"select voto from votaciones");
	$c1=0;
	$c2=0;
	$c3=0;
	$c4=0;
	while($row = mysqli_fetch_array($result))
	{
		if($row['voto']=='pan')
			$c1=$c1+1;
		if($row['voto']=='pri')
			$c2=$c2+1;
		if($row['voto']=='morena')
			$c3=$c3+1;
		if($row['voto']=='prd')
			$c4=$c4+1;
	}
	$dataset->addPoint(new Point("PAN",$c1));
	$dataset->addPoint(new Point("PRI",$c2));
	$dataset->addPoint(new Point("MORENA",$c3));
	$dataset->addPoint(new Point("PRD",$c4));
 mysqli_free_result($result);
 mysqli_close($link);

$chart->setDataSet($dataset);
$chart->getPlot()->setGraphPadding(new Padding(5,30,20,240));
$chart->setTitle(" Elecciones ");
$chart->render("generated/grafica1.png");

	?>
<img src="generated/grafica1.png"/>
</body>
</html>
