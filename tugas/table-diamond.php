<!DOCTYPE html>
<html>
<head>
	<title>Looping Table</title>
</head>
<body>
	<?php $i = 5; ?>
	<table border="1">
		<?php for($j=0; $j<$i; $j++): ?>
		<tr>
			<?php for($k=0; $k<$i; $k++): ?>
				<?php if($j>=$k): ?>
					<td>*</td>
				<?php else: ?>
					<td></td>
				<?php endif; ?>	
			<?php endfor; ?>
		</tr>
		<?php endfor; ?>
	</table>
<br>
	<?php $i=5 ?>
	<table border="1">
		<?php for ($j=0; $j < $i; $j++) { 
			echo "<tr>";
			for ($k=0; $k < $i; $k++) { 
				if ($j>=$k) {
					echo "<td>*</td>";
				}else{
					echo "<td></td>";
				}
			}
		} ?>
	</table>
</body>
</html>

<pre><?php

$n = $i = 7;

while ($i--)
    echo str_repeat(' ', $i).str_repeat($i.' ', $n - $i)."\n";




?></pre>
<?php 
function create_pyramid($limit) {
    for($row = 1; $row < $limit; $row ++) {
        $stars = str_repeat('*', ($row - 1) * 2 + 1);
        $space = str_repeat(' ', $limit - $row);
        echo $space . $stars . '<br/>';
    }
}
echo "<pre>" ;
create_pyramid(10);
?>

<?php
echo "<pre>";
for ($i=1; $i < 5 ; $i++) {
  $spasi = str_repeat(" ",7-$i);
  $bintang = str_repeat($i,($i-1)*2+1);
  echo $spasi.$bintang."<br>";
}
  for ($j=3; $j > 0 ; $j--) {
    $spasi1 = str_repeat(" ",7-$j);
    $bintang2 = str_repeat($j,($j-1)*2+1);
    echo $spasi1.$bintang2."<br>";
}
echo "</pre>";
 ?>
 	<?php $nilai=7; ?>
 <table border="2">
 	<?php for ($i=1; $i < $nilai; $i++) { 
 	echo "<tr>";
 		$spas = str_repeat(" ", $nilai-$i);
 		$bin = str_repeat($i, ($i-1)*2+1);
 		echo "<td>".$spas."</td><td>".$bin."</td></tr>";
 	}
 	echo "<tr>";
 	for ($j=$nilai-2; $j > 0 ; $j--) { 
 		$spas1 = str_repeat(" ", $nilai-$j);
 		$bin1 = str_repeat($j,($j-1)*2+1);
 		echo "<td>".$spas1."</td><td>".$bin1."</td></tr>";
 	}
 	 ?>
 </table>