// === 1. Ubah Teks ===
function ubahTeks() {
    document.getElementById("judul").innerHTML = "Teks Berubah!";
}

// === 2. Ubah warna box ===
function ubahWarna() {
    document.getElementById("kotak").style.backgroundColor = "orange";
}

// === 3. Alert ===
function tampilAlert() {
    alert("Halo! Ini alert dari JavaScript.");
}

// === 4. Tampilkan nama ===
function tampilNama() {
    let nama = document.getElementById("namaInput").value;
    document.getElementById("hasilNama").innerHTML = 
        (nama === "") ? "Nama belum diisi!" : "Halo, " + nama + "!";
}

// === 5. Ganti gambar ===
function gantiGambar() {
    document.getElementById("foto").src = "https://picsum.photos/200";
}

// === 6. Kalkulator ===
function hitungJumlah() {
    let a = Number(document.getElementById("angka1").value);
    let b = Number(document.getElementById("angka2").value);
    document.getElementById("hasilJumlah").innerHTML = "Hasil: " + (a + b);
}

// === 7. Contoh Array ===
function contohArray() {
    let buah = ["Apel", "Jeruk", "Pisang"];
    document.getElementById("hasilArray").innerHTML = buah.join(", ");
}

// === 8. Contoh Loop ===
function contohLoop() {
    let teks = "";
    for (let i = 1; i <= 5; i++) {
        teks += "Perulangan ke-" + i + "<br>";
    }
    document.getElementById("hasilLoop").innerHTML = teks;
}

// === 9. Contoh IF ===
function cekUmur() {
    let umur = Number(document.getElementById("umurInput").value);
    let pesan = (umur >= 18) ? "Anda dewasa." : "Anda masih anak-anak.";
    document.getElementById("hasilUmur").innerHTML = pesan;
}

// === 10. Switch Case ===
function cekHari() {
    let hari = Number(document.getElementById("hariInput").value);
    let namaHari;

    switch (hari) {
        case 1: namaHari = "Senin"; break;
        case 2: namaHari = "Selasa"; break;
        case 3: namaHari = "Rabu"; break;
        case 4: namaHari = "Kamis"; break;
        case 5: namaHari = "Jumat"; break;
        case 6: namaHari = "Sabtu"; break;
        case 7: namaHari = "Minggu"; break;
        default: namaHari = "Hari tidak valid!";
    }

    document.getElementById("hasilHari").innerHTML = namaHari;
}

// === 11. Tambah elemen DOM ===
function tambahElemen() {
    let p = document.createElement("p");
    p.innerHTML = "Paragraf baru ditambahkan!";
    document.getElementById("areaTambah").appendChild(p);
}

// === 12. Ubah style teks ===
function ubahStyle() {
    let teks = document.getElementById("teksStyle");
    teks.style.color = "red";
    teks.style.fontSize = "20px";
    teks.style.fontWeight = "bold";
}

// === 13. Event Hover ===
function hoverMasuk() {
    document.getElementById("hoverBox").style.backgroundColor = "green";
}
function hoverKeluar() {
    document.getElementById("hoverBox").style.backgroundColor = "skyblue";
}