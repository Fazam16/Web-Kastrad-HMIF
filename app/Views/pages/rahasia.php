<?= $this->extend('template/template'); ?>

<?= $this->section('content'); ?>

<table class="table table-dark table-striped">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Kelas</th>
        <th>Angkatan</th>
        <th>Email</th>
        <th>No. WA</th>
        <th>Aspirasi</th>
        <th>tanggal</th>
    </tr>

    <?php 
        $nomor = 1;
        foreach($mahasiswa as $data) {       
    ?>
    <tr>
        <td> <?= $nomor++; ?></td>
        <td> <?= $data['nama']; ?> </td>
        <td> <?= $data['nim']; ?> </td>
        <td> <?= $data['kelas']; ?> </td>
        <td> <?= $data['angkatan']; ?> </td>
        <td> <?= $data['email']; ?> </td>
        <td> <?= $data['nomor']; ?> </td>
        <td> <?= $data['aspirasi']; ?> </td>
        <td> <?= $data['tanggal']; ?> </td>
    </tr>
    <?php 
        }
    ?>
</table>
<?= $this->endSection(); ?>