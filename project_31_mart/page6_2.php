<?php
	include_once('includes/header.php');
	session_start();
	?>
<?php
$user=$_SESSION['user'];
$score_lvl2=$_SESSION['score2'];
$true=4;
/*$a=10;
$b=20;
$c=30;
$d=40;
if ($score_lvl2 == 0) {
	$score_lvl2_new=0;
}elseif ($score_lvl2 == $a) {
	$score_lvl2_new=1;
}elseif ($score_lvl2 == $b) {
	$score_lvl2_new=2;
}elseif ($score_lvl2 == $c) {
	$score_lvl2_new=3;
}*/

if ($_GET['how_many'] == $true) {
	$score_lvl2+=1;
	
	
	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>
		<p>Браво <b>$user</b> верен отговор, резултатът ти от  2-ро ниво с верни отговори е<p><b>$score_lvl2 / 4</b>!!!</p></p>
		<p><a href='create_score2.php'>ДА</a>
		<a href='index.php'>НЕ</a></p>
		<p><a href='read_score2.php'>Виж таблицата с резултати за 2-ро ниво<a></p>
		<p><a href='read_all.php'>Виж таблицата с всички резултати</a></p>
		</div>
		</div>";
}else{
	echo $score_lvl2;
	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>
		<p>Съжалявам , <b>$user</b> грешен отговор и резултатът ти  от 2-ро ниво с верни отговори е <p>имаш <b>$score_lvl2 / 4</b> верни отоговора!!!</p></p>
		<p>Да запиша ли резултата ти в таблицата с резултати за 2-ро нива ? </p>
		<p><a href='create_score2.php'>ДА</a>
		<a href='index.php'>НЕ</a></p>
		<p><a href='read_score2.php'>Виж таблицата с резултати за 2-ро ниво<a></p>
		<p><a href='read_all.php'>Виж таблицата с всички резултати</a></p>
		</div>
		</div>";

}
$_SESSION['score2']=$score_lvl2;

























?>
<?php
	include_once('includes/footer.php');
	?>	