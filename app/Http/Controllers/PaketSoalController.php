<?php

namespace App\Http\Controllers;

use App\Models\PaketSoal;
use App\Models\DaftarSoal;
use Illuminate\Http\Request;

class PaketSoalController extends Controller
{
    public function index()
    {
        $dataPakets = PaketSoal::all();

        return view('pages.bankSoal.index', compact('dataPakets'));
    }

    public function create()
    {
        return view('pages.bankSoal.createPaket');
    }

    public function store(Request $request)
    {
        PaketSoal::create([
            'jenis_paket' => $request->paket
        ]);
        return redirect('/pakets');
    }

    public function edit($id)
    {
        $paketSoal = PaketSoal::findOrFail($id);
        return view('pages.bankSoal.updatePaket', compact('paketSoal'));
    }

    public function update(Request $request, $id)
    {
        $paketSoal = PaketSoal::findOrFail($id);
        $paketSoal->jenis_paket = $request->input('paket');
        $paketSoal->save();
        return redirect('/pakets');
    }


    public function soal($id)
    {
        $daftarPaket = PaketSoal::where('id', $id)->first();
        $daftarSoals = DaftarSoal::where('id_paket', $id)->get();
        return view('pages.bankSoal.showSoal', compact('daftarSoals', 'daftarPaket'));
    }

    public function showSoal($id)
    {
        $daftarSoal = DaftarSoal::where('id', $id)->first();
        return view('pages.bankSoal.updateSoal', compact('daftarSoal'));
    }

    public function updateSoal($id, Request $request)
    {
        $paketSoal = PaketSoal::with('daftarSoals')->findOrFail($id);

        $isAlready = array();

        foreach ($paketSoal->daftarSoals as $key => $value) {
            if ($value->nomor_soal == $request->currentSoal) {
                $isAlready = $value;
                break;
            }
        }

        if ($isAlready instanceof DaftarSoal) {
            $soal = DaftarSoal::findOrFail($isAlready['id']);
            $soal->pertanyaan = $request->namaSoal;

            if ($request->hasFile('imageSoal')) {
                $tujuan_upload = 'storage/soal';
                $file = $request->file('imageSoal');
                $filegambar = time() . "_" . $file->getClientOriginalName();
                $soal->gambar_pertanyaan = $filegambar;
                $file->move($tujuan_upload, $filegambar);
            }

            $soal->opsi_jawaban = $request->jawaban;

            $gambarOpsiJawaban = [null, null, null, null, null];
            if ($request->hasFile('jawabanImage')) {
                foreach ($request->file('jawabanImage') as $key => $file) {
                    $tujuan_upload = 'storage/jawaban';
                    $filegambar = time() . "_" . $file->getClientOriginalName();
                    $file->move($tujuan_upload, $filegambar);
                    $gambarOpsiJawaban[$key] = $filegambar;
                }
            } elseif ($isAlready && $isAlready->gambar_opsi_jawaban) {
                $gambarOpsiJawaban = json_decode($isAlready->gambar_opsi_jawaban, true);
            }

            $soal->gambar_opsi_jawaban = $gambarOpsiJawaban ? json_encode($gambarOpsiJawaban) : null;
            $soal->jawaban = $request->pilihanJawaban;
            $soal->save();
        } else {
            $buatSoal = new DaftarSoal;
            $buatSoal->nomor_soal = $request->currentSoal;
            $buatSoal->pertanyaan = $request->namaSoal;

            if ($request->hasFile('imageSoal')) {
                $tujuan_upload = 'storage/soal';
                $file = $request->file('imageSoal');
                $filegambar = time() . "_" . $file->getClientOriginalName();
                $buatSoal->gambar_pertanyaan = $filegambar;
                $file->move($tujuan_upload, $filegambar);
            }

            $buatSoal->opsi_jawaban = $request->jawaban;

            $gambarOpsiJawaban = [null, null, null, null, null];
            if ($request->hasFile('jawabanImage')) {
                foreach ($request->file('jawabanImage') as $key => $file) {
                    $tujuan_upload = 'storage/jawaban';
                    $filegambar = time() . "_" . $file->getClientOriginalName();
                    $file->move($tujuan_upload, $filegambar);
                    $gambarOpsiJawaban[] = $filegambar;
                }
                $buatSoal->gambar_opsi_jawaban = json_encode($gambarOpsiJawaban);
            } else {
                $buatSoal->gambar_opsi_jawaban = json_encode([]);
            }

            $buatSoal->jawaban = $request->pilihanJawaban;
            $buatSoal->id_paket = $id;
            $buatSoal->save();
        }

        return redirect('/pakets/' . $request->idPaket);
    }

    public function destroy(PaketSoal $id)
    {
        $id->delete();
        return redirect()->back();
    }

    public function destroySoal(DaftarSoal $id)
    {
        $daftarSoal = DaftarSoal::where('id', $id)->first();
        $id->delete();
        return redirect()->back();
    }
}
