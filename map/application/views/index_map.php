<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

li {
  float: left;
}

li a {
  display: block;
  padding: 8px;
  background-color: #dddddd;
}
</style>
</head>

<body>


<ul>
  <li><a href="<?php echo base_url(); ?>">Home</a></li>
  <li><a href="<?php echo base_url('leafletdrawinghasil'); ?>">Hasil GeoJSON-Mysql</a></li>
  
</ul>
<br>
<a href="<?php echo base_url('leafletdrawing'); ?>" class="button">Tambah Geojson</a>
<table border="1" cellspacing="1" cellpadding="1" width="99%">
  <tr>
    <td>GeoJson</td>
    <td>Action</td>
  </tr>
  <?php foreach ($tb_peta as $key) { ?>
  <tr>
    <td><?php echo $key->GeoJson ?></td>
    <td width="100px" align="center">
      <a href="leafletdrawingedit?Id=<?php echo $key->Id; ?>" class="button">Edit</a>
      <a href="leafletdrawingDelete?Id=<?php echo $key->Id; ?>" class="button">Delete</a>
    </td>
  </tr>
<?php } ?>
</table>
</body>
</html>
