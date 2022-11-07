<link rel="stylesheet" href="colors.css">
<?php 
    // buat tabel nilai random 1 - 1000
    // dengan for dan foreach
    
    $angka_min = 10;
    $angka_max = 99;

    $jumlah_data = 1000;

    // $listMapel = array("Matematika", "B Indonesia", "B Inggris", "Sejarah", "IPA", "IPS", "B Inggris", "Biologi", "Olahraga", "Budaya");
    // $totalArray = count($listMapel);
?>

<table>
    <thead>
        <th>Nama</th>
        <th>Matematika</th>
        <th>B Indonesia</th>
        <th>B Inggris</th>
        <th>Sejarah</th>
        <th>IPA</th>
        <th>IPS</th>
        <th>B Inggris</th>
        <th>Biologi</th>
        <th>Olahraga</th>
        <th>Budaya</th>
        <th>Total</th>
        <th>Rata Rata</th>
        <th>Status</th>
    </thead>
    <tbody>
    </tbody>
    <?php
        for ($i=0; $i <$jumlah_data; $i++) {
            //$listNilai = array($angka_min, $angka_max);
            //$totalArr = count($listNilai);
            $nilai_1 = rand($angka_min, $angka_max);
            $nilai_2 = rand($angka_min, $angka_max);
            $nilai_3 = rand($angka_min, $angka_max);
            $nilai_4 = rand($angka_min, $angka_max);
            $nilai_5 = rand($angka_min, $angka_max);
            $nilai_6 = rand($angka_min, $angka_max);
            $nilai_7 = rand($angka_min, $angka_max);
            $nilai_8 = rand($angka_min, $angka_max);
            $nilai_9 = rand($angka_min, $angka_max);
            $nilai_10 = rand($angka_min, $angka_max);
            $total = $nilai_1 + $nilai_2 + $nilai_3 + $nilai_4 + $nilai_5 + $nilai_6 + $nilai_7 + $nilai_8 + $nilai_9 + $nilai_10;
            $rata = $total/10;

            
            if ($rata > 70) {
                $status = "Berhasil";
            }else {
                $status = "Gagal";
            }
    ?>
        <tr>
            <td>Siswa # <?php echo $i+1 ?></td>
            <td><?php echo $nilai_1 ?></td>
            <td><?php echo $nilai_2 ?></td>
            <td><?php echo $nilai_3 ?></td>
            <td><?php echo $nilai_4 ?></td>
            <td><?php echo $nilai_5 ?></td>
            <td><?php echo $nilai_6 ?></td>
            <td><?php echo $nilai_7 ?></td>
            <td><?php echo $nilai_8 ?></td>
            <td><?php echo $nilai_9 ?></td>
            <td><?php echo $nilai_10 ?></td>
            <td><?php echo $total ?></td>
            <td><?php echo $rata ?></td>
            <?php
            if ($status == "Berhasil"){ ?>
            <td class="success"><?php echo $status ?></td>
            <?php }else { ?>
                <td class="fail"><?php echo $status ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>