<html>
<head>
    <title>Form Input Data Siswa</title>
    <style type="text/css" media="screen">
        table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
        input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}
    </style>
</head>
<body>
<div>
<form action="proses2.php" method="POST" name="form-input-data">
    <table align="center">
        <tr height="46">
                <td width="10%"> </td>
                <td width="25%"> </td>
                <td width="65%"><font size="2">Form Input Data Mahasiswa</font></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Nama</td>
            <td><input type="text" name="id_mahasiswa" size="45" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>NIS</td>
            <td><input type="text" name="nis" size="45" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Kelas</td>
            <td><input type="text" name="kelas" size="45" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal_lahir" size="45" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempat_lahir" size="45" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Alamat</td>
            <td><input type="text" name="alamat" size="45" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Jenis Kelamin</td>
            <td><input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
                <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan</td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Agama</td>
            <td><select name="agama" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Khonghucu">Khonghucu</option>    
            </select></td>
        </tr>
    </table>
</form>
</div>
</body>
</html>