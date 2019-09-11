<?php
$f=$_GET["txtn"];
$an=$_GET["txtn3"];
$c=$_GET["txtn1"];
$al=$_GET["txtn2"];



?>
<table width="<?php echo $an;?>" height="<?php echo $al; ?>">

<?php
for($i=0 ; $i<=$f ;$i++)
{
	?>
	<tr>
		<?php

		for ($j=0 ; $j<=$c ; $j++)
		{
			if($i==0)
			{
				if($j==0)
				{
					?>
					<th>X</th>
					<?php
				}
				else
				{
					?>
					<th><?php echo $j; ?></th>
					<?php
				}
			}
			else
			{
				if($j==0)
				{?>
					<th><?php echo $i; ?></th>
				<?php}
				else{
					?>
					<td><?php echo $i*$j; ?></td>
					<?php}
				?>
			<?php
			}
			?>
		<?php	
		}
		?>
	</tr>
<?php
}
?>
</table>
