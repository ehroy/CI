<?php
echo'<table border="1">
<tr>
    <td>Status</td>
    <td>Pengiriman</td>
</tr>';
foreach($konten as $koko){
    $result = json_encode($koko->scanstatus);
    $result1 = json_encode($koko->desc);
    $split = str_replace("\"","",$result);
    $split1 = str_replace("\\u3010","",$result1);
    $ksk = array($split1);
    echo'<tr>';
    echo   '<td>'.$split.'</td>';
    // echo '</tr>';
    // echo'<tr>';
    echo   '<td>'.$ksk.'</td>';
    echo '</tr>';
}

echo'</table>';