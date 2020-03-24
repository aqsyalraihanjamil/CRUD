<?php
//memasukkan file config.php
include('connect.php');
include('navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Buku</title>
    <!-- CSS online dari bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="tampilbuku.css">
	<script>
        $(document).ready(function(){
            $("#myModal").on("show.bs.modal", function(event){
                // Get the button that triggered the modal
                var button = $(event.relatedTarget);

                // Extract value from the custom data-* attribute
                var titleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
    </script>
    <style>
        .bs-example{
            margin: 20px;
        }
        body{
          background-color: #616161;
        }
        .dark{
          color : #222831;
        }
        .thed{
          background-color: #414141;
          color: #FFFFFF;
        }
        .white{
          color: #FFFFFF;
        }
    </style>
</head>
<body>

	<div class="container" style="margin-top:20px; color : #FFFFFF;">
		<h2>Daftar Buku</h2>
		<hr>
		<table class="table table-striped table-hover table-sm table-bordered">
			<thead class="thed">
				<tr class="white">
					<th>No.</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Telp</th>
          <th>Level</th>
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel t_buku urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM t_anggota ORDER BY id_anggota DESC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						?>
						<tr>
              <td class="white"><?php echo $no; ?> </td>
              <td class="white"><?php echo $data['nama']; ?></td>
							<td class="white"><?php echo $data['kelas']; ?></td>
							<td class="white"><?php echo $data['telp']; ?></td>
							<td class="white"><?php echo $data['id_level']; ?></td>
						</tr>
						<?php
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  </head>
  <body>
</html>
