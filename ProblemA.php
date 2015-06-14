<?php

$c = 0;
$f = (int)trim(fgets(STDIN));
$t = 1;
while($t <= $f)
{
	$arr = [];
	$q = trim(fgets(STDIN));
	$l = explode(' ', $q);
	$n = $l[0];

	$arr[1] = $n;

	for($j = 2; $j <= $l[1]; $j++)
	{
		$total = $n * $j;
		$temp = 0;
		for($k = 1; $k < $j; $k++)
		{
			//echo $temp . "\n";
		}
		$leftover = $total - $temp;
		//echo $leftover."\n";i
		if($leftover < 0)
		{
			continue;
		}
		$arr[$k] = (int) ($leftover / $j);
		if($leftover % $j)
		{
			$arr[$k] += 1;//$leftover % $j;
		}
	}

	$total = 0;

	foreach($arr as $a)
	{
		$total += $a;
	}

	echo "Case #$t: ". $total."\n";
	$t++;
}
?>