<?php
// print_r($konten);
echo '<table border="1">
<tr>
    <td>Nim<td>
    <td>Nama<td>
    <td>Prodi<td>
    <td>Kelas<td>
</tr>';
foreach($konten as $rows => $row){
    echo "<tr>";
    foreach($row as $col => $cell){
        echo '<td>' .$cell. '</td>';
    }
    echo "</tr>";
}
echo '</table>';
?>