<br><br><br>
<div class="container text-center" style="margin: 2em auto;">
  <h2 class="tex-center">Tabel Kegiatan Masuk</h2>
  <table class="table table-bordered table-striped" style="margin: 2em auto;" id="data_kegiatanmasuk">
    <thead>
      <tr>
        <th>No</th>
        <th>ID_Kegiatan</th>
        <th>Nama Kegiatan</th>
        <th style="padding-inline-start: 30px; padding-inline-end: 30px;">PIC</th>
        <th>Tanggal Mulai</th>
        <th>Tanggal Selesai</th>
        <th>Jumlah Peserta</th>
        <th>Absensi</th>
        <th>Jenis Kegiatan</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php if (is_array($list_data)) { ?>
          <?php $no = 1; ?>
          <?php foreach ($list_data as $dd) : ?>
            <td><?= $no ?></td>
            <td><?= $dd->id_transaksi ?></td>
            <td><?= $dd->kode_barang ?></td>
            <td><?= $dd->satuan ?></td>
            <td><?= $dd->tanggal ?></td>
            <td><?= $dd->tanggal_selesai ?></td>
            <td><?= $dd->jumlah ?></td>
            <td><?= $dd->nama_barang ?></td>
            <td><?= $dd->jenis_kegiatan ?></td>
            <td><?= $dd->lokasi ?></td>
      </tr>
      <?php $no++; ?>
    <?php endforeach; ?>
  <?php } else { ?>
    <td colspan="7" align="center"><strong>Data Kosong</strong></td>
  <?php } ?>
    </tbody>
  </table>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#data_kegiatanmasuk').DataTable();
  });
</script>