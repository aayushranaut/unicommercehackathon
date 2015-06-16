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
	$temp = $arr[1];

	for($j = 2; $j <= $l[1]; $j++)
	{
		$total = $n * $j;

		$leftover = $total - $temp;

		if($leftover < 0)
		{
			continue;
		}
		$arr[$j] = (int) ($leftover / $j);
		if($leftover % $j)
		{
			$arr[$j] += 1;
		}
		$temp += $arr[$j] * $j;
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