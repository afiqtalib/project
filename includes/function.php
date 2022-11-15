<?php 
    function totalcuti($selected_lv, $total, $tempcuti)
    {
        @include 'db_con.php';
        $sql = "SELECT * FROM cuti WHERE $selected_lv='Cuti Sakit' AND $tempcuti='5' AND admin_id='2' ";
        $result =mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($result)) {
            if (is_numeric($tempcuti['lv_duration'])){
                $total -= $tempcuti['lv_duration'];  
                return $total;
            }
           
        }
        // if ($selected_lv == 'Cuti Sakit') {
            // -- // same method
            // -- // $total = $total - $cuti;
        // }
    }
?>

