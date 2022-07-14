<?php
include('config.php');
$db = new Database();
$id_mhs = $_GET['id'];
if (!is_null($id_mhs)) {
    $data_mhs = $db->get_by_id($id_mhs);
} else {
    header('location:tampil_data.php');
}

?>
<form action="proses_mhs.php?action=update" method="POST">
    <input type="hidden" name="id" value="<?php echo $data_mhs['id']; ?>" />
    <fieldset>
        <p>
            <label for="nim">NIM : </label>
            <input type="text" name="NIM" placeholder="NIM" value="<?php echo $data_mhs['NIM']; ?>">
        </p>
        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="namaMhs" placeholder="Nama Mahasiswa" value="<?php echo $data_mhs['namaMhs']; ?>">
        </p>
        <p>
            <label for="angkatan">Angkatan : </label>
            <input type="text" name="angkatan" placeholder="Angkatan" value="<?php echo $data_mhs['angkatan']; ?>">
        </p>
        <p>
            <label for="kode_prodi">Kode Prodi : </label>
            <input type="text" name="kode_prodi" placeholder="Kode Prodi" value="<?php echo $data_mhs['kode_prodi']; ?>">
        </p>

        <p>
            <input type="submit" value="Simpan Data" name="simpan">
        </p>
    </fieldset>
</form>