<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

</head>
<body>
<div class="container">
	<div class="row" style="display: flex; justify-content: center;">
		<div class="col-xs-12 col-lg-5" style="background-color: #000000">
			<form action="action.php" method="post">
				<?php 
					session_start();
					if(isset($_SESSION["msg"])){
					$succes = $_SESSION["msg"];
					}
					// remove all session variables
					 session_unset(); 
					// destroy the session 
					 session_destroy();
				?>
				<?php if(isset($succes)){ 
				  echo"<div class='form-group'>
				    <label style='color: #ffffff'>".$succes."</label>
				  </div>";
				}
			  	?>
			  <div class="form-group">
			    <label style="color: #ffffff">Website Games: </label>
			    <select name="websitegames" class="form-control">
					<option value="-- Pilih Games --">-- Pilih Games --</option><option value="SBOBET(SPORTSBOOK &amp; CASINO)">SBOBET(SPORTSBOOK &amp; CASINO)</option>
					<option value="MAXBET(SPORTSBOOK &amp; CASINO)">MAXBET(SPORTSBOOK &amp; CASINO)</option>
					<option value="MR8ASIA (SPORTSBOOK &amp; CASINO)">MR8ASIA (SPORTSBOOK &amp; CASINO)</option><option value="IDN POKER (POKER, CAPSA, QQ)">IDN POKER (POKER, CAPSA, QQ)</option>
					<option value="POKERKING88 (POKER, CAPSA, QQ)">POKERKING88 (POKER, CAPSA, QQ)</option>
					<option value="JOKER123(Mesin Slot, Live Casino)">JOKER123(Mesin Slot, Live Casino)</option>
					<option value="Klik 4D(Togel SGP, HK, KL)">Klik 4D(Togel SGP, HK, KL)</option>
					<option value="Senggol4D(Togel SGP, HK45, ISIN LIVE)">Senggol4D(Togel SGP, HK45, ISIN LIVE)</option>
					<option value="CLUB388 (SPORTSBOOK, Slot, Sabung Ayam &amp; CASINO)">CLUB388 (SPORTSBOOK, Slot, Sabung Ayam &amp; CASINO)</option>
					<option value="Bonus Deposit! (Sportbook MR8 Asia)">Bonus Deposit! (Sportbook MR8 Asia)</option>
				</select>
			  </div>
			  <div class="form-group">
			    <label style="color: #ffffff">ID Games:</label>
			    <input type="text" class="form-control" placeholder="ID Games" name="idgames" aria-describedby="sizing-addon2" required>
			  </div>
			  <div class="form-group">
			    <label style="color: #ffffff">Jumlah Rupiah: </label>
	  			<input type="text" class="form-control" name="jml_rupiah" placeholder="Jumlah Rupiah" aria-describedby="sizing-addon2" id="rupiah" required>
			  </div>
			  <div class="form-group">
			    <label style="color: #ffffff">Nama Bank:</label>
			  	<select name="nama_bank" class="form-control">
					<option value="BCA">BCA</option>
					<option value="Mandiri">Mandiri</option>
					<option value="BNI">BNI</option>
					<option value="BRI">BRI</option>
					<option value="DANAMON">DANAMON</option>
					<option value="PANIN">PANIN</option>
					<option value="PERMATA">PERMATA</option>
					<option value="CIMB">CIMB</option>
					<option value="OCBC NISP">OCBC NISP</option>
				</select>
			  </div>
			  <div class="form-group">
			    <label style="color: #ffffff">Nama Rekening: </label>
	  			<input type="text" class="form-control" name="nama_rekening" placeholder="Nama Rekening" aria-describedby="sizing-addon2" required>
			  </div>
			  <div class="form-group">
			    <label style="color: #ffffff">Nomor Rekening: </label>
	  			<input type="text" class="form-control" name="no_rekening" placeholder="Nomor Rekening" aria-describedby="sizing-addon2" required>
			  </div>
			  <div class="form-group">
			    <label style="color: #ffffff">Nomor Handphone:</label>
	  			<input type="text" class="form-control" name="no_hp" placeholder="Nomor Handphone" aria-describedby="sizing-addon2" required>
			  </div>
			  <div class="form-group">
			    <label style="color: #ffffff">PIN BBM:</label>
	  			<input type="text" class="form-control" name="pin_bb" placeholder="PIN BBM" aria-describedby="sizing-addon2" required>
			  </div>
			  <div class="form-group">
			    <label style="color: #ffffff">Email:</label>
				<input type="text" class="form-control" name="email" placeholder="Email" aria-describedby="basic-addon2" required>
			  </div>
			  <div class="form-group">

			  	<div class="row">
			  		<div class="col-xs-12 col-lg-5">
				    	<img src="captcha.php" alt="Captcha Image">
				    </div>
				    <div class="col-xs-12 col-lg-7">
						<input type="text" class="form-control" name="captcha" placeholder="Ketik ulang kode disamping" aria-describedby="basic-addon2" required>
					</div>
				</div>
			  </div>
			  <button type="submit" value="Deposit Sekarang" class="btn btn-info">Deposit Sekarang</button>
			</form>
		</div>
	</div>
</div>
</body>
<script type="text/javascript">
	
	var rupiah = document.getElementById('rupiah');
	rupiah.addEventListener('keyup', function(e){
		// tambahkan 'Rp.' pada saat form di ketik
		// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
		rupiah.value = formatRupiah(this.value, 'Rp. ');
	});

	/* Fungsi formatRupiah */
	function formatRupiah(angka, prefix){
		var number_string = angka.replace(/[^,\d]/g, '').toString(),
		split   		= number_string.split(','),
		sisa     		= split[0].length % 3,
		rupiah     		= split[0].substr(0, sisa),
		ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

		// tambahkan titik jika yang di input sudah menjadi angka ribuan
		if(ribuan){
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}

		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}
</script>
</html>