// 1. Alert sederhana
function halo() {
    alert("Halo! Ini adalah alert dari JavaScript.");
}

// 2. Mengubah isi teks HTML
function ubahTeks() {
    document.getElementById("teks").innerText = "Teksnya sudah berubah!";
}

// 3. Mengambil input dari user dan menampilkan di halaman
function sapa() {
    let nama = document.getElementById("namaInput").value; // ambil value input
    document.getElementById("hasilSapa").innerText = "Halo, " + nama + "!";
}

// 4. Console.log (untuk debugging)
console.log("JavaScript berhasil dijalankan!");

// 5. Variabel dasar
let umur = 17;
let sekolah = "SMK MVP ARS";
console.log("Umur:", umur);
console.log("Sekolah:", sekolah);

// 6. Kondisi IF ELSE
if (umur >= 17) {
    console.log("Kamu sudah cukup umur.");
} else {
    console.log("Kamu belum cukup umur.");
}

// 7. Loop dasar
for (let i = 1; i <= 3; i++) {
    console.log("Perulangan ke-" + i);
}
