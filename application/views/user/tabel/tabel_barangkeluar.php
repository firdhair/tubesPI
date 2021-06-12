<br><br><br><br><br>
<br>
    <div class="container text-center" style="margin: 2em auto;">
    <h2 class="tex-center">Tabel Permintaan Barang</h2>
    <table class="table table-bordered table-striped" style="margin: 2em auto;" id="tabel_barangmasuk">
    <thead>
      <tr>
        <th>No</th>
        <th>ID_Transaksi</th>
        <th>Tanggal Masuk/th>
        <th>Tanggal Permintaan</th>
        <th>Lokasi</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Satuan</th>
        <th>Jumlah</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php if(is_array($list_data)){ ?>
        <?php $no = 1;?>
        <?php foreach($list_data as $dd): ?>
          <td><?=$no?></td>
          <td><?=$dd->id_transaksi?></td>
          <td><?=$dd->tanggal_masuk?></td>
          <td><?=$dd->tanggal_keluar?></td>
          <td><?=$dd->lokasi?></td>
          <td><?=$dd->kode_barang?></td>
          <td><?=$dd->nama_barang?></td>
          <td><?=$dd->satuan?></td>
          <td><?=$dd->jumlah?></td>
          <td><label class="label label-success"><?=($dd->status==0) ? 'Waiting' : 'Done'?></label></td>
          
      </tr>
    <?php $no++; ?>
    <?php endforeach;?>
    <?php }else { ?>
          <td colspan="7" align="center"><strong>Data Kosong</strong></td>
    <?php } ?>
    </tbody>
  </table>
  </div>
  <br><br>



<script type="text/javascript">
  $(document).ready(function(){
    $('#tabel_barangkeluar').DataTable();
  });
</script>
