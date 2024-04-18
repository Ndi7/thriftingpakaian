<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
@extends('layout.navbar')

@section ('title', 'checkout')
@section('content')

<div class="container flex bg-gray-400 mx-auto px-5 my-10 justify-center">
    <div class="w-2/3">
    <h2 class="font-bold text-xl">Checkout</h2><br>
    <div>
        <h2 class="font-bold">Informasi Kontak</h2>
        <p>Kami akan menggunakan email ini untuk mengirimkan rincian dan pembaruan <br> mengenai pesanan Anda.</p>
    </div>
    <form name="form">
    <div class="input-control">        
        <label for="email"></label>
        <input class="w-2/3 h-10 p-2 border-t border-b border-black rounded-lg" type="email" id="email" name="email" placeholder="Alamat Email" required><br>
        <input type="checkbox" id="subscribe" name="subscribe" value="yes">
        <label for="subscribe">Saya ingin menerima informasi terbaru mengenai produk dan promosi.</label><br><br>
        <div class="error"></div>
    </div>
    <div>
        <h2 class="font-bold">Alamat Pengiriman</h2>
        <p>Masukkan alamat penerima pesanan.</p>
    </div>
    <div class="input-control">
        <label for="namadepan"></label>
        <input class=" w-1/3 h-10 p-2 border-t border-b border-black rounded-lg" type="text" id="namadepan" name="namadepan" placeholder="Nama Depan" required>
        <label for="namabelakang">&nbsp;</label>
        <input class="w-1/3 h-10 p-2 border-t border-b border-black rounded-lg" type="text" id="namabelakang" name="namabelakang" placeholder="Nama Belakang" required>
        <div class="error"></div>
    </div><br>
    <div class="input-control">
        <label for="alamat"></label>
        <input class="w-2/3 h-10 p-2 border-t border-b border-black rounded-lg" type="text" id="alamat" name="alamat" placeholder="Alamat" required>
        <div class="error"></div>
    </div><br>
    <div class="input-control">
        <label for="opsional"></label>
        <input class="w-2/3 h-10 p-2 border-t border-b border-black rounded-lg" type="text" id="opsional" name="opsional" placeholder="Apartement, kamar, dll. (opsional)">
        <div class="error"></div>
    </div><br>
    <div class="input-control">
    <label for="provinsi"></label>
        <select class="w-1/3 h-10 p-2 border-t border-b border-black rounded-lg" name="provinsi" id="provinsi" required>
        <option value="provinsi">Provinsi</option>
        <option value="bali">Bali</option>
        <option value="bangka-belitung">Bangka Belitung</option>
        <option value="banten">Banten</option>
        <option value="bengkulu">Bengkulu</option>
        <option value="yogyakarta">DI Yogyakarta</option>
        <option value="dki-jakarta">DKI Jakarta</option>
        <option value="gorontalo">Gorontalo</option>
        <option value="jambi">Jambi</option>
        <option value="jabar">Jawa Barat</option>
        <option value="jateng">Jawa Tengah</option>
        <option value="jatim">Jawa Timur</option>
        <option value="kalbar">kalimantan Barat</option>
        <option value="kalsel">kalimantan Selatan</option>
        <option value="kalteng">kalimantan Tengah</option>
        <option value="kaltim">kalimantan Timur</option>
        <option value="kalut">kalimantan Utara</option>
        <option value="kepri">Kepulauan Riau</option>
        <option value="lampung">Lampung</option>
        <option value="maluku">Maluku</option>
        <option value="maluku-utara">Maluku Utara</option>
        <option value="NAD">Nanggroe Aceh Darussalam</option>
        <option value="NTB">Nusa Tenggara Barat</option>
        <option value="NTT">Nusa Tenggara Timur</option>
        <option value="papua">Papua</option>
        <option value="pabar">Papua Barat</option>
        <option value="papua-tengah">Papua Tengah</option>
        <option value="papegu">Papua Pegunungan</option>
        <option value="pasel">Papua Selatan</option>
        <option value="pabada">Papua Barat Daya</option>
        <option value="riau">Riau</option>
        <option value="sulbar">Sulawesi Barat</option>
        <option value="sulsel">Sulawesi Selatan</option>
        <option value="sulteng">Sulawesi Tengah</option>
        <option value="sultengg">Sulawesi Tenggara</option>
        <option value="sulut">Sulawesi Utara</option>
        <option value="sumbar">Sumatera Barat</option>
        <option value="sumsel">Sumatera Selatan</option>
        <option value="sumut">Sumatera Utara</option>
        </select>
        <label for="kota">&nbsp;</label>
        <input class="w-1/3 h-10 p-2 border-t border-b border-black rounded-lg" type="text" id="kota" name="kota" placeholder="Kota" required>
        <div class="error"></div>
    </div><br>
    <div class="input-control">
    <label for="kodepos"></label>
        <input class="w-1/3 h-10 p-2 border-t border-b border-black rounded-lg" type="text" id="kodepos" name="kodepos" placeholder="Kode Pos" required>
        <label for="notelp">&nbsp;</label>
        <input class="w-1/3 h-10 p-2 border-t border-b border-black rounded-lg" type="text" id="notelp" name="notelp" placeholder="Nomor Telephone" required>
        <div class="error"></div>
    </div>
    <div>
        <input type="checkbox" id="subscribe" name="subscribe" value="yes">
        <label for="subscribe">Gunakan alamat yang sama untuk penagihan.</label>
    </div><br>
    <div>
        <h2 class="font-bold">Opsi Pengiriman</h2>
    </div>
    <div>
    <label for="opsiPengiriman"></label>
    <select class="w-3/5 border-t border-b border-black rounded-lg" id="opsiPengiriman" name="opsiPengiriman" required>
        <option value="">Pilih Jasa Pengiriman</option>
        <option value="reguler">Pengiriman Reguler (Estimasi tiba: 3-5 hari kerja)</option>
        <option value="ekspres">Pengiriman Ekspres (Estimasi tiba: 1-2 hari kerja)</option>
        <option value="kargo">Pengiriman Kargo (Estimasi tiba: 5-7 hari kerja)</option>
    </select>
    </div><br>
    <div>
        <h2 class="font-bold">Opsi Pembayaran</h2>
    </div>
    <div>
    <label for="opsiPembayaran"></label>
    <select class="w-3/5 border-t border-b border-black rounded-lg" id="opsiPembayaran" name="opsiPembayaran" required>
        <option value="">Pilih Metode Pembayaran</option>
        <option value="transfer">Transfer Bank</option>
        <option value="COD">Cash on Delivery</option>
    </select>
    </div><br>
    <div>
        <h2>Tambahkan catatan ke pesanan:</h2>
        <textarea class="p-2 border-t border-b border-black rounded-lg" id="catatanPesanan" name="catatanPesanan" rows="4" cols="50" placeholder="Catatan tentang pesanan anda"></textarea>
    </div><br>
    <div>
        <h2>Dengan melanjutkan pembelian, artinya Anda menyetujui Syarat dan <br> Ketentuan dan Kebijakan Privasi kami.</h2>
    </div><br>
        <div class="flex h-10 mt-7 gap-10 text-xl">
    <a href="keranjang" class="tombol-kembali">← Kembali ke Keranjang</a>
    <a href="checkoutberhasil" class="tombol-lanjutkan rounded-lg bg-fuchsia-400">Lakukan Pemesanan</a>
    </div>
<script src="{{ asset('js/styles.js') }}"></script>
    </form>

</div>
<div class="mt-7">
<details>
  <summary>Ringkasan Pesanan</summary><br>
  1. <img class="w-12 h-12" src="{{ asset('images/kaos2.jpg') }}" alt=""><br>
                            <div class="mx-1 -mt-5 ">
                                <h2 class="text-base font-bold">Kaos Oversize Harley Davidson</h2>
                                <h4 class="text-xs">Deskripsi singkat</h4>
                                <h3 class="text-sm my-1">Rp. 75000</h3>
                            </div><br>
  2. <img class="w-10 h-10" src="{{ asset('images/kaos3.jpg') }}" alt=""><br>
                            <div class="mx-1 -mt-5">
                                <h2 class="text-base font-bold">T-Shirt Polo</h2>
                                <h4 class="text-xs">Deskripsi singkat</h4>
                                <h3 class="text-sm my-1">Rp. 55000</h3>
                            </div>
</details><br>
<button class="underline " onclick="tampilkanKotakKupon()">Tambah Kupon</button>

<div id="kotakKupon" style="display: none;">
  <form>
    <label for="kodeKupon"></label><br>
    <input class="p-2 border-t border-b border-black rounded-lg" type="text" id="kodeKupon" name="kodeKupon" placeholder="Masukkan Kode"><br>
    <input class="bg-violet-400 hover:bg-blue-700 text-black py-2 px-4 rounded" type="submit" value="Submit">
  </form>
</div>

<script>
  function tampilkanKotakKupon() {
    document.getElementById("kotakKupon").style.display = "block";
    const button = document.querySelector(".underline");
    button.classList.add("animate-fade-out");
  }
</script>
<div><br>
<table>
    <tr>
        <td>Subtotal Pemesanan</td>
        <td>&nbsp;</td>
        <td>Rp130.000</td>
    </tr>
    <tr>
        <td>Subtotal Pengiriman</td>
        <td>&nbsp;</td>
        <td>Rp20.000</td>
    </tr>
    <tr>
        <td>Kupon Diskon</td>
        <td>&nbsp;-</td>
        <td>Rp10.000</td>
    </tr>
    <tr>
        <th>Total Pembayaran</th>
        <td>&nbsp;</td>
        <td>Rp140.000</td>
    </tr>
</table>
</div>
</div>
</div>
@endsection
