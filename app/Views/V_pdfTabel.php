</br>
<h1 style="text-align: center;">LIST DATA MAHASISWA</h1>
<table id="example" class="table table-striped table-bordered" style="width:100%" table border="2">
        <thead>
            <tr>
                <th>NIK</th>
                <th>Keluarga</th>
                <th>no_hp</th>
                <th>Tanggal Pembayaran</th>
                <th>Jenis Zakat</th>
                <th>Keterangan</th>
                <th>Nominal</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($hasil as $row) {
        ?>
        <tr>
            <td><?php echo $row->nik; ?></td>
            <td><?php echo $row->keluarga; ?></td>
            <td><?php echo $row->no_hp; ?></td>
            <td><?php echo $row->tgl; ?></td>
            <td><?php echo $row->jenis_zakat; ?></td>
            <td><?php echo $row->jumlah_jiwa; ?></td>
            <td><?php echo $row->nominal; ?></td>
            <td><?php echo $row->keterangan; ?></td>
        </tr>
        <?php
            }
        ?>
</tbody>
</table>