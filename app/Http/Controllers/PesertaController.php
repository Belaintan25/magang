<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use PDF;
use DataTables;


class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_old()
    {
        $pesertas = Peserta::latest()->paginate(5);
        return view('peserta.index', compact('pesertas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            // $data = Peserta::select('*');
            $query_data = new Peserta();

            if ($request->sSearch) {
                $search_value = '%' . $request->sSearch . '%';
                $query_data = $query_data->where(function ($query) use ($search_value) {
                    $query->where('nama', 'like', $search_value)
                        ->orWhere('nik', 'like', $search_value)
                        ->orWhere('jurusan', 'like', $search_value);
                });
            }

            $data = $query_data->orderBy('nama', 'asc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    //$btn = '<a href="javascript:void(0)" cl ass="edit btn btn-primary btn-sm">View</a>';
                    $btn = '
    <form action="' . route('pesertas.destroy', $row->id) . '"
    method="POST">
    <a class="btn btn-info" href="' . route('pesertas.show', $row->id) . '">Show</a>
    <a class="btn btn-primary" href="' . route('pesertas.edit', $row->id) . '">Edit</a>
    ' . csrf_field() . method_field('DELETE') . '
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('peserta.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peserta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'asal_kampus' => 'required',
            'jurusan' => 'required',
            'id_divisi' => 'required',
            'alasan_ditolak' => 'required',
            'status' => 'required',
            'khs' =>  'required|file|mimes:pdf|max:2048',
            'foto' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'surat_pengantar' =>  'required|file|mimes:pdf|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('khs')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['khs'] = "$profileImage";
        }
        if ($image = $request->file('foto')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        }
        if ($image = $request->file('surat_pengantar')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['surat_pengantar'] = "$profileImage";
        }

        Peserta::create($input);
        Peserta::create($request->all());

        return redirect()->route('pesertas.index')
            ->with('success', 'Peserta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show(Peserta $peserta)
    {
        //
        return view('peserta.show', compact('peserta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit(Peserta $peserta)
    {
        //
        return view('peserta.edit', compact('peserta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peserta $peserta)
    {
        //
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'asal_kampus' => 'required',
            'jurusan' => 'required',
            'id_divisi' => 'required',
            'alasan_ditolak' => 'required',
            'status' => 'required',
            'khs' =>  'required|file|mimes:pdf|max:2048',
            'foto' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'surat_pengantar' =>  'required|file|mimes:pdf|max:2048',
        ]);
        $input = $request->all();

        if ($image = $request->file('khs')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['khs'] = "$profileImage";
        } else {
            unset($input['khs']);
        }


        if ($image = $request->file('foto')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        } else {
            unset($input['foto']);
        }

        if ($image = $request->file('surat_pengantar')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['surat_pengantar'] = "$profileImage";
        } else {
            unset($input['khs']);
        }
        $peserta->update($input);
        $peserta->update($request->all());

        return redirect()->route('peserta.index')
            ->with('success', 'Peserta updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peserta $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peserta $peserta)
    {
        //
        $peserta->delete();

        return redirect()->route('pesertas.index')
            ->with('success', 'Peserta deleted successfully');
    }
    function exportPdf()
    {
        $pesertas = Peserta::all();
        $pdf = PDF::loadview('peserta.exportpdf', ['pesertas' => $pesertas])->setPaper('a4', 'landscape');;
        return $pdf->download('LaporanDataPeserta.pdf');
    }
}
