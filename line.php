<?php
$s1Err = $s2Err = "";


if (empty($_POST["s1"])) {
    $s1Err = "Sequence 1 is required";
    header("Location:index_dotplot.php?error1=$s1Err");
}
if (empty($_POST["s2"])) {
    $s2Err = "Sequence 2 is required";
    header("Location:index_dotplot.php?error2=$s2Err");
}

if (strpos($_POST["s1"], ' ') !== false){
  $s1Err = "Sequence 1 has space";
  header("Location:index_dotplot.php?error1=$s1Err");
}

if (strpos($_POST["s2"], ' ') !== false){
  $s2Err = "Sequence 2 has space";
  header("Location:index_dotplot.php?error2=$s2Err");
}

$canvas = imagecreatetruecolor(420, 420);

// Allocate colors
$pink = imagecolorallocate($canvas, 255, 15, 080);
$color = imagecolorallocate($canvas, 105, 125, 080);
$white = imagecolorallocate($canvas, 255, 255, 255);
$green = imagecolorallocate($canvas, 110, 270, 28);
$color = imagecolorallocate($canvas, 100, 35, 228);
$color1= imagecolorallocate($canvas, 10, 135, 228);
ImageFill($canvas, 0, 0, $white);
$x1=60;
$y1=40;
$x2=75;
$y2=55;

$x=20;

$a="-".$_POST['s1'];
$b="-".$_POST['s2'];

//for($r1=0;$r1<strlen($a);$r1++)
{
//for($r2=0;$r2<strlen($b);$r2++)
{
 $value=array(
	array("0","0","0","0","0","0","0","0","0","0","0","0","0","0"),
                  array("0","0","0","0","0","0","0","0","0","0","0","0","0","0"),
                  array("0","0","0","0","0","0","0","0","0","0","0","0","0","0"),
	array("0","0","0","0","0","0","0","0","0","0","0","0","0","0"),
	array("0","0","0","0","0","0","0","0","0","0","0","0","0","0"),
	array("0","0","0","0","0","0","0","0","0","0","0","0","0","0"),
	array("0","0","0","0","0","0","0","0","0","0","0","0","0","0"),
	array("0","0","0","0","0","0","0","0","0","0","0","0","0","0"),
	array("0","0","0","0","0","0","0","0","0","0","0","0","0","0"),
	array("0","0","0","0","0","0","0","0","0","0","0","0","0","0"),
	array("0","0","0","0","0","0","0","0","0","0","0","0","0","0"),
	array("0","0","0","0","0","0","0","0","0","0","0","0","0","0")
);


}
}


$z1=82;
$z2=23;
for($k=1;$k<strlen($b);$k++)
{
	imagestring($canvas, 5,$z1, $z2, strtoupper($b[$k]), $green);
	$z1=$z1+17;
	//$z2=$z2+10;
}
$z1=45;
$z2=60;

for($k=1;$k<strlen($a);$k++)
{
	imagestring($canvas, 5,$z1, $z2, strtoupper($a[$k]), $green);
	$z2=$z2+16;

}


$pi=0;
$pj=0;

$xx1=60;
$xx2=75;
$yy1=40;
$yy2=55;

$k=17;


for($i=0;$i<strlen($a);$i++)
{
for($j=0;$j<strlen($b);$j++)
{
imagerectangle($canvas, $x1, $y1, $x2, $y2, $pink);
$x1=$x1+17;
$x2=$x2+17;

$si=$i;
$sj=$j;


if($a[$i]==$b[$j] && $a[$i]!= '-')
{
imagefilledellipse ($canvas , $x1-10 , $y1+8 , 5 , 5 , $green);
$value[$i][$j]=(string)($x1-10)."-".(string)($y1+8);


	if( ($i>=2) && $i-1==$pi  && $j-1==$pj )
	{
		//imageline($canvas,$v1, $v2,$x1-10, $y1+8, $color);


	}

//if($j==$pi)
{
$v1=$x1-10;
$v2=$y1+8 ;
$pi=$i;
$pj=$j;
}

}//end of if

}
$y1=$yy1+$k;
$y2=$yy2+$k;
$x1=$xx1;
$x2=$xx2;
$k=$k+17;

}

$h=50;
for($r1=0;$r1<strlen($a);$r1++)
{
for($r2=0;$r2<strlen($b);$r2++)
{
	if($value[$r1][$r2]!="0" && $value[$r1+1][$r2+1]!="0" )
	{

		$c1=explode("-", $value[$r1][$r2]);
		$c2=explode("-", $value[$r1+1][$r2+1]);
		//$a=(int)$c1[0];
		//$b=(int)$c1[1];
		//$c=(int)$c2[0];
		//$d=(int)$c2[1];
		//imagefilledellipse ($canvas , $a , $b , 5 , 5 , $color);
		//imageline($canvas,$a,$b,$c,$d, $color);
		imageline($canvas,$c1[0],$c1[1],$c2[0],$c2[1], $color);

	}
else
{
//imageline($canvas,50,50+$h,100,150, $color);
//$h=$h+20;
}

}
}

//begin

for($r1=strlen($a);$r1>0;$r1--)
{
for($r2=strlen($b);$r2>0;$r2--)
{
	if($value[$r1][$r2]!="0" && $value[$r1-1][$r2+1]!="0" )
	{

		$c1=explode("-", $value[$r1][$r2]);
		$c2=explode("-", $value[$r1-1][$r2+1]);

		imageline($canvas,$c1[0],$c1[1],$c2[0],$c2[1], $color);

	}

}
}

//end

//below

for($r1=strlen($a);$r1>0;$r1--)
{
for($r2=strlen($b);$r2>0;$r2--)
{
	if($value[$r1][$r2]!="0" && $value[$r1-1][$r2]!="0" )
	{

		$c1=explode("-", $value[$r1][$r2]);
		$c2=explode("-", $value[$r1-1][$r2]);

		imageline($canvas,$c1[0],$c1[1],$c2[0],$c2[1], $color);

	}

}
}


//end below

//stright

for($r1=strlen($a);$r1>0;$r1--)
{
for($r2=strlen($b);$r2>0;$r2--)
{
	if($value[$r1][$r2]!="0" && $value[$r1][$r2+1]!="0" )
	{

		$c1=explode("-", $value[$r1][$r2]);
		$c2=explode("-", $value[$r1][$r2+1]);

		imageline($canvas,$c1[0],$c1[1],$c2[0],$c2[1], $color);

	}

}
}

//end stright





header('Content-Type: image/jpeg');

imagejpeg($canvas);
imagedestroy($canvas);



?>
<html>
<body>

</body>
</html>
