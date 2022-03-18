<?php
    $mahasiswa = [
        ["Jauhari", "213040060", "kasfjal@gmail.com", "Teknik Informatika"],
        ["abdul", "213030400", "dodoasf@fmail.com", "TIF"],
        ["daffa", "213040038", "daffa@gmail.com", "Teknik Informatika"]];

?>

<?php foreach($mahasiswa as $mhsw)

{ ?>
<ul>
    <li>Nama : <?php echo $mhsw [0] ?></li>
    <li>NPM : <?php echo $mhsw [1]?></li>
    <li>Email : <?php echo $mhsw [2]?></li>
    <li>Jurusan : <?php echo $mhsw [3]?></li>
</ul>

<?php } ?>