$(document).ready(function () {
	$("#dana_masuk").DataTable({
		stateSave: true,
	});

	$("#dana_keluar").DataTable({
		stateSave: true,
	});

	$("#pembayaran_uas").DataTable({
		stateSave: true,
		columnDefs: [
			{
				targets: 0,
				orderable: false,
			},
		],
	});

	$("#dana_keluar_uas").DataTable({
		stateSave: true,
	});

	$("#pelunasan_un").DataTable({
		stateSave: true,
		columnDefs: [
			{
				targets: 0,
				orderable: false,
			},
		],
	});

	$("#dana_keluar_un").DataTable({
		stateSave: true,
	});

	$("#hutang").DataTable({
		stateSave: true,
	});

	$("#sisa_dana").DataTable({
		stateSave: true,
	});

	var url = $(location).attr("href");
	var pisah = url.split("/");
	var segment = pisah[4];

	if (segment == "dana_masuk" || segment == "dana_keluar") {
		$(".denda_infaq").removeClass("collapsed");
	}
	if (segment == "pembayaran_uas" || segment == "dana_keluar_uas") {
		$(".uas").removeClass("collapsed");
	}
	if (segment == "pelunasan_un" || segment == "dana_keluar_un") {
		$(".un").removeClass("collapsed");
	}
	if (segment == "pengaturan" || segment == "ketentuan_pembayaran") {
		$(".pengaturan").removeClass("collapsed");
	}

	$("#check-all").click(function () {
		// Ketika user men-cek checkbox all
		if ($(this).is(":checked"))
			// Jika checkbox all diceklis
			$(".check-item").prop("checked", true);
		// ceklis semua checkbox siswa dengan class "check-item"
		// Jika checkbox all tidak diceklis
		else $(".check-item").prop("checked", false); // un-ceklis semua checkbox siswa dengan class "check-item"
	});

	$("#btn-delete").click(function () {
		// Ketika user mengklik tombol delete
		var confirm = window.confirm(
			"Apakah Anda yakin ingin menghapus data-data ini?"
		); // Buat sebuah alert konfirmasi

		if (confirm)
			// Jika user mengklik tombol "Ok"
			$("#form-delete").submit(); // Submit form
	});

	// Cetak
	$("#cetakHome").click(function () {
		loadCetakHome();
	});

	$("#cetakDanaMasuk").click(function () {
		loadCetakDanaMasuk();
	});

	$("#cetakDanaKeluar").click(function () {
		loadCetakDanaKeluar();
	});

	$("#cetakPembayaranUas").click(function () {
		loadCetakPembayaranUas();
	});

	$("#cetakDanaKeluarUas").click(function () {
		loadCetakDanaKeluarUas();
	});

	$("#cetakPelunasanUn").click(function () {
		loadCetakPelunasanUn();
	});

	$("#cetakDanaKeluarUn").click(function () {
		loadCetakDanaKeluarUn();
	});

	function loadCetakHome() {
		$("<iframe id='printabel'>")
			.hide()
			.attr("src", "home/cetak")
			.appendTo("body");
	}

	function loadCetakDanaMasuk() {
		$("<iframe id='printabel'>")
			.hide()
			.attr("src", "dana_masuk/cetak")
			.appendTo("body");
	}

	function loadCetakDanaKeluar() {
		$("<iframe id='printabel'>")
			.hide()
			.attr("src", "dana_keluar/cetak")
			.appendTo("body");
	}

	function loadCetakPembayaranUas() {
		$("<iframe id='printabel'>")
			.hide()
			.attr("src", "pembayaran_uas/cetak")
			.appendTo("body");
	}

	function loadCetakDanaKeluarUas() {
		$("<iframe id='printabel'>")
			.hide()
			.attr("src", "dana_keluar_uas/cetak")
			.appendTo("body");
	}

	function loadCetakPelunasanUn() {
		$("<iframe id='printabel'>")
			.hide()
			.attr("src", "pelunasan_un/cetak")
			.appendTo("body");
	}

	function loadCetakDanaKeluarUn() {
		$("<iframe id='printabel'>")
			.hide()
			.attr("src", "dana_keluar_un/cetak")
			.appendTo("body");
	}
});
