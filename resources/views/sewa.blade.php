<x-layout>
    <div class="container" id="sewa-content">
        <div class="container p-5" id="container-intro-sewa">
            <div class="container" id="intro-sewa">
                <div class="row justify-content-center">
                    <div class="d-flex col-md-3 justify-content-center align-items-center text-center mb-2 p-2 rounded-3"
                        id="textbox-sewa">
                        <h3 class="" id="heading-white">Reservasi Lapangan</h3>
                    </div>
                    <div class="col-md-7">
                        <p class="intro-white float-right">
                            1. Isi data diri anda pada formulir sewa lapangan<br>
                            2. Pilih lapangan mana yang akan anda sewa <br>
                            3. Pilih tanggal dan waktu sewa lapangan <br>
                            4. Klik Bayar untuk melanjutkan ke proses pembayaran <br>
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="container p-5" id="container-form-sewa">
            <form action="{{ route('store_pesanan') }}" method="POST" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="text" class="form-control rounded-pill" id="inputNama" name="nama" required>
                </div>
                <div class="col-md-6">
                    <label for="inputNomor" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control rounded-pill" id="inputNomor" name="noTelp" required>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control rounded-pill" id="inputEmail" name="email" required>
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Alamat</label>
                    <input type="text" class="form-control rounded-pill" id="inputAddress" name="alamat"
                        placeholder="Jl. Soekarno Hatta" required>
                </div>
                <div class="col-md-6">
                    <label for="inputLapangan" class="form-label">Lapangan yang Disewa</label>
                    <select id="inputLapangan" class="form-select rounded-pill" name="lapangan_id">
                        <option selected>Lapangan 1</option>
                        <option>Lapangan 2</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputDate" class="form-label">Tanggal Sewa</label>
                    <input type="date" class="form-control rounded-pill" id="inputtTanggal" name="tanggal" required>
                </div>
                <h3 id="headingcontact col-md-12">Jadwal Tersedia</h3>

                <div class="form-check col-3">
                    <input class="form-check-input" type="checkbox" value="8" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        08:00 - 09:00
                    </label>
                </div>
                <div class="form-check col-3">
                    <input class="form-check-input" type="checkbox" value="9" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        09:00 - 10:00
                    </label>
                </div>
                <div class="form-check col-3">
                    <input class="form-check-input" type="checkbox" value="10" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        10:00 - 11:00
                    </label>
                </div>
                <div class="form-check col-3">
                    <input class="form-check-input" type="checkbox" value="11" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        11:00 - 12:00
                    </label>
                </div>
                <div class="form-check col-3">
                    <input class="form-check-input" type="checkbox" value="12" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        12:00 - 13:00
                    </label>
                </div>
                <div class="form-check col-3">
                    <input class="form-check-input" type="checkbox" value="13" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        13:00 - 14:00
                    </label>
                </div>
                <div class="form-check col-3">
                    <input class="form-check-input" type="checkbox" value="14" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        14:00 - 15:00
                    </label>
                </div>
                <div class="form-check col-3">
                    <input class="form-check-input" type="checkbox" value="15" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        15:00 - 16:00
                    </label>
                </div>
                {{-- <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="16" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                16:00 - 17:00
            </label>
        </div> --}}
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-lg rounded-pill float-end"
                        id="buttonL">Bayar</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
