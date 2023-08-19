@extends('index')


@section('body')
    <div class="row justify-content-center align-items-center mt-5">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h2 class="fw-bold text-center">REGISTRASI BEASISWA</h2>
                </div>

                <form action="{{ route('daftar') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Masukkan Nama</label>
                            <input type="text" name="nama" id="nama"
                                class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">


                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Masukkan Email</label>
                            <input type="email" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">


                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label for="telepon" class="form-label">Masukkan Nomor Telepon</label>
                            <input type="telepon" name="telepon" id="telepon"
                                class="form-control @error('telepon') is-invalid @enderror" value="{{ old('telepon') }}">

                            @error('telepon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label for="semester" class="form-label">Semester Saat ini</label>
                            <select class="form-select @error('semester') is-invalid @enderror"
                                aria-label="Default select example" name="semester">
                                <option selected>Pilih</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>

                            @error('semester')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        <div class="mb-3">
                            <label for="ipk" class="form-label">IPK Terakhir</label>
                            <input type="ipk" name="ipk" id="ipk" class="form-control"
                                value="{{ $randomNumber }}" readonly>
                        </div>


                        <div class="mb-3">
                            <label for="beasiswa" class="form-label">Pilihan Beasiswa</label>
                            <select class="form-select" aria-label="Default select example" name="beasiswa"
                                @if ($randomNumber === 2.9) aria-label="Disabled select example" disabled @endif>
                                <option selected>Pilihan Beasiswa
                                </option>
                                <option selected>Indonesia Maju
                                </option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="berkas" class="form-label">Upload Berkas</label>
                            <input type="file" name="berkas" id="berkas"
                                class="form-control @error('berkas') is-invalid @enderror"
                                accept="application/pdf,image/jpg,application/zip"
                                @if ($randomNumber === 2.9) aria-label="Disabled select example" disabled @endif>


                            @error('berkas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                    </div>

                    <div class="card-footer">
                        @if ($randomNumber === 2.9)
                            <button class="btn btn-secondary w-100 fw-bold" disable readonly
                                id="nonSubmitButton">Kirim</button>
                        @else
                            <button class="btn btn-success w-100 fw-bold">Kirim</button>
                        @endif



                    </div>
                </form>
            </div>
        </div>
    </div>

    @if ($randomNumber === 2.9)
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var nonSubmitButton = document.getElementById('nonSubmitButton');
                nonSubmitButton.addEventListener('click', function(event) {
                    event.preventDefault();
                    alert("IPK tidak memenuhi, Minimal 3,4");
                });
            });
        </script>
    @endif
@endsection
