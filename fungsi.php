<?php

function answer($kode){
    if($kode=='m1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m2-a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m6'>Tidak</a>";
    }
    if($kode=='m2-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m3-a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=mild1'>Tidak</a>";
    }
    if($kode=='m3-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m10'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=mild3'>Tidak</a>";
    }
    if($kode=='m10'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=mild2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=md1'>Tidak</a>";
    }
    if($kode=='m6'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m4-a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m7'>Tidak</a>";
    }
    if($kode=='m4-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m2-b'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=none2'>Tidak</a>";
    }
    if($kode=='m2-b'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=mild4'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m3-b'>Tidak</a>";
    }    
    if($kode=='m3-b'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m8'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=md2'>Tidak</a>";
    }
    if($kode=='m8'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=mild5'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=md4'>Tidak</a>";
    }
    if($kode=='m7'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m2-c'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=none1'>Tidak</a>";
    }
    if($kode=='m2-c'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s1'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m3-c'>Tidak</a>";
    }
    if($kode=='m3-c'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m9'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=md3'>Tidak</a>";
    }
    if($kode=='m9'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m4-b'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=md5'>Tidak</a>";
    }
    if($kode=='m4-b'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=mild6'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=md6'>Tidak</a>";
    }
}

function kesimpulan($diagnosa){
    include 'koneksi.php';
    $sql = "SELECT * from tb_kesimpulan WHERE solusi='$diagnosa' AND status='setuju'";
    $data = mysqli_query($connect,$sql);
    while ($row = mysqli_fetch_assoc($data)) {
        echo '<p>-'.$row['fakta'].'</p>';
    }  
}

function solusi($kode){    
    if ($kode=='mild1') {
        $diagnosa = "mild1";
        kesimpulan($diagnosa);
    }
    if ($kode=='mild2') {
        $diagnosa = "mild2";
        kesimpulan($diagnosa);
    }
    if ($kode=='mild3') {
        $diagnosa = "mild3";
        kesimpulan($diagnosa);
    }
    if ($kode=='mild4') {
        $diagnosa = "mild4";
        kesimpulan($diagnosa);
    }
    if ($kode=='mild5') {
        $diagnosa = "mild5";
        kesimpulan($diagnosa);
    }
    if ($kode=='mild6') {
        $diagnosa = "mild6";
        kesimpulan($diagnosa);
    }
    if ($kode=='md1') {
        $diagnosa = "md1";
        kesimpulan($diagnosa);
    }
    if ($kode=='md2') {
        $diagnosa = "md2";
        kesimpulan($diagnosa);
    }
    if ($kode=='md3') {
        $diagnosa = "md3";
        kesimpulan($diagnosa);
    }
    if ($kode=='md4') {
        $diagnosa = "md4";
        kesimpulan($diagnosa);
    }
    if ($kode=='md5') {
        $diagnosa = "md5";
        kesimpulan($diagnosa);
    }
    if ($kode=='md6') {
        $diagnosa = "md6";
        kesimpulan($diagnosa);
    }
    if ($kode=='none1') {
        $diagnosa = "none1";
        kesimpulan($diagnosa);
    }
    if ($kode=='none2') {
        $diagnosa = "none2";
        kesimpulan($diagnosa);
    }
   
}


?>