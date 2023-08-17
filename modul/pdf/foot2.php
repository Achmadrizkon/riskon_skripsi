<?php 
$html .="
                                <table width='100%' align='right'>
                                
                                    <tr>
                                        <th width='60%'>&nbsp;</th>
                                        <th align='center'>&nbsp;</th>
                                    </tr>
                                    <tr>
                                        <th width='60%'>&nbsp;</th>
                                        <th align='center'>&nbsp;</th>
                                    </tr>
                                    <tr>
                                        <th width='60%'>&nbsp;</th>
                                        <th align='center'>&nbsp;</th>
                                    </tr>
                                    <tr>
                                        <th width='60%'>&nbsp;</th>
                                        <th align='center'>Banjarbaru, ".tgl(date('Y-m-d'))."</th>
                                    </tr>
                                    <tr>
                                        <th width='60%'>&nbsp;</th>
                                        <th align='center'>Mengetahui,</th>
                                    </tr>
                                    <tr>
                                        <th width='60%'>&nbsp;</th>
                                        <th align='center'>KETUA</th>
                                    </tr>
                                    <tr>
                                        <th width='60%'>&nbsp;</th>
                                        <th align='center'></th>
                                    </tr>
                                    <tr>
                                        <th width='60%'>&nbsp;</th>
                                        <th align='center'></th>
                                    </tr>
                                    <tr>
                                        <th width='60%'>&nbsp;</th>
                                        <th align='center'></th>
                                    </tr>
                                    <tr>
                                        <th width='60%'>&nbsp;</th>
                                        <th align='center'></th>
                                    </tr>

                                    <tr>
                                        <th width='60%'>&nbsp;</th>
                                        <th align='center'><b>".$setting['nama_ketua']."</b></th>
                                    </tr>";
if ($setting['nip_ketua'] == NULL) {
    
} else {
$html .= "<tr>
    <th width='60%'>&nbsp;</th>
    <th align='center'><b>".$setting['nip_ketua']."</b></th>
</tr>";
}

$dompdf->loadhtml($html);

$dompdf->setPaper('A3', 'landscape');
$dompdf->render();
$dompdf->stream($title, array("Attachment" => 0));
 ?>