<?php
$myFile = "http://webcel.online/Data.json";
$data = file_get_contents($myFile);
$characters = json_decode($data);
?>

<table>
	<tbody>
		<tr>
			<th>Name</th>
			<th>Race</th>
		</tr>
		<?php foreach ($characters as $character) : ?>
        <tr>
            <td> <?php echo $character->name; ?> </td>
            <td> <?php echo $character->race; ?> </td>
        </tr>
		<?php endforeach; ?>
	</tbody>
</table>
