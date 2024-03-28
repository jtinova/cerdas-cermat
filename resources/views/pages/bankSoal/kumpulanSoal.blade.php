@extends('component.main')

@section('content')
    <div class="pagetitle">
        <h1>Paket Soal</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Ujian</li>
                <li class="breadcrumb-item"><a href="/pakets">Paket Soal</a></li>
                <li class="breadcrumb-item active">Soal</li>
            </ol>
        </nav>

        <section class="section">
            @foreach ($daftarSoals as $daftarSoal)
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Soal Nomor {{ $loop->iteration }}
                                </h5>

                                <form action="/pakets/soal/{{ $daftarSoal->id }}/save" method="post" enctype="multipart/form-data" class="row g-3">
                                    @csrf
                                    <input type="hidden" name="idSoal" value="{{ $daftarSoal->id }}">
                                    <div class="col-12">
                                        <textarea name="namaSoal" class="form-control" id="namaSoal" placeholder="Masukkan Nama Soal">{{ optional($daftarSoal)->pertanyaan }}</textarea>
                                        <span>Masukkan gambar yang dibutuhkan</span>
                                        <br class="m-3">
                                        <input class="m-3" type="file" name="imageSoal" id="imageSoal"
                                            accept="image/*">
                                        <div id="imagePreview">
                                            @if ($daftarSoal && $daftarSoal->gambar_pertanyaan)
                                                <img src="{{ asset('storage/soal/' . $daftarSoal->gambar_pertanyaan) }}"
                                                    alt="Gambar Pertanyaan" style="max-width: 300px;">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="namaSoal" class="form-label">Pilihan Jawaban</label>
                                        @if ($daftarSoal && is_array($daftarSoal->opsi_jawaban) && count($daftarSoal->opsi_jawaban) > 0)
                                            @foreach ($daftarSoal->opsi_jawaban as $key => $opsi)
                                                <div class="form-check mb-3">
                                                    <input type="radio" class="form-check-input" type="radio"
                                                        id="option{{ $key }}" name="pilihanJawaban"
                                                        value="{{ $key + 1 }}"
                                                        {{ $daftarSoal->jawaban == $key + 1 ? 'checked' : '' }} />

                                                    <span class="ml-2" for="option{{ $key }}">
                                                        @php
                                                            $abjad = ['A', 'B', 'C', 'D', 'E'];
                                                            echo $abjad[$key];
                                                        @endphp.
                                                        <input type="file" name="jawabanImage[]"
                                                            id="jawabanImage{{ $key }}" accept="image/*"
                                                            class="mb-2"></br>
                                                        <input type="text" name="jawaban[]"
                                                            id="jawaban{{ $key }}" class="form-check-label"
                                                            value="{{ $opsi }}" required>
                                                    </span>
                                                    <br class="m-3">
                                                    <!-- Image preview for answer choice -->
                                                    <div id="jawabanImagePreview{{ $key }}" class="mb-6 mt-3">
                                                        @if ($daftarSoal->gambar_opsi_jawaban)
                                                            @php
                                                                $gambarOpsiJawaban = json_decode(
                                                                    $daftarSoal->gambar_opsi_jawaban,
                                                                    true,
                                                                );
                                                            @endphp

                                                            @if (isset($gambarOpsiJawaban[$key]))
                                                                <img src="{{ asset('storage/jawaban/' . $gambarOpsiJawaban[$key]) }}"
                                                                    alt="Gambar Opsi Jawaban" style="max-width: 150px;">
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            @for ($key = 0; $key < 5; $key++)
                                                <div class="form-check mb-3">
                                                    <input type="radio" value="{{ $key + 1 }}"
                                                        id="option{{ $key }}" name="pilihanJawaban"
                                                        class="form-check-input">
                                                    <input type="radio" class="form-check-input"
                                                        value="{{ $key + 1 }}" id="option{{ $key }}"
                                                        name="pilihanJawaban" />
                                                    <span class="ml-2" for="option{{ $key }}">
                                                        @php
                                                            $abjad = ['A', 'B', 'C', 'D', 'E'];
                                                            echo $abjad[$key];
                                                        @endphp
                                                        <input type="file" name="jawabanImage[]"
                                                            id="jawabanImage{{ $key }}" accept="image/*">
                                                        <input type="text" name="jawaban[]"
                                                            id="jawaban{{ $key }}" class="form-check-label"
                                                            value="" required>
                                                    </span>
                                                    <!-- Image preview for answer choice -->
                                                    <div id="jawabanImagePreview{{ $key }}" class="mb-6 mt-3">
                                                    </div>

                                                </div>
                                            @endfor
                                        @endif
                                    </div>
                                    <p class="card-text flex">
                                        <button type="submit" class="btn btn-primary">Simpan & Lanjutkan</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Image preview for question
        $("#imageSoal").change(function() {
            readURL(this, "#imagePreview");
        });

        // Image preview for answer choices
        $('input[name^="jawabanImage"]').change(function() {
            var index = $(this).attr('id').replace('jawabanImage', '');
            readURL(this, "#jawabanImagePreview" + index);
        });

        // Function to read and display image preview
        function readURL(input, previewId) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var img = new Image();
                    img.src = e.target.result;
                    img.onload = function() {
                        var maxWidth = 500; // Set your maximum width
                        var maxHeight = 500; // Set your maximum height
                        var width = img.width;
                        var height = img.height;

                        // Calculate new width and height while maintaining aspect ratio
                        if (width > maxWidth || height > maxHeight) {
                            var ratio = Math.min(maxWidth / width, maxHeight / height);
                            width = width * ratio;
                            height = height * ratio;
                        }

                        $(previewId).html('<img src="' + e.target.result +
                            '" width="' + width + '" height="' + height + '" />');
                    };
                };
                reader.readAsDataURL(input.files[0]);
            }

        }
    });

</script>
