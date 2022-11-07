<?php 
    // buat tabel nilai random 1 - 1000
    // dengan for dan foreach
    
    $angka_mulai = 100;
    $angka_selesai = 900;

    $jumlah_data = 10;
?>

<table>
    <thead>
        <th>Nama</th>
        <th>Nilai #1</th>
        <th>Nilai #2</th>
        <th>Total</th>
        <th>Rata Rata</th>
        <th>Status</th>
    </thead>
    <tbody>
    </tbody>
    <?php
        for ($i=0; $i <$jumlah_data; $i++) {
            $nilai_1 = rand($angka_mulai, $angka_selesai);
            $nilai_2 = rand($angka_mulai, $angka_selesai);
            $total = $nilai_1 + $nilai_2;
            $rata = $total/2;
            
            if ($total > 1000) {
                $status = "Berhasil";
            }else {
                $status = "Gagal";
            }
    ?>
        <tr>
            <td>Siswa # <?php echo $i+1 ?></td>
            <td><?php echo $nilai_1 ?></td>
            <td><?php echo $nilai_2 ?></td>
            <td><?php echo $total ?></td>
            <td><?php echo $rata ?></td>
            <td><?php echo $status ?></td>
        </tr>
    <?php } ?>
</table>