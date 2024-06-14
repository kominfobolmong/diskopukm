@extends('frontend.detail.app', ['menu' => 'Data Koperasi', 'breadcrumb' => 'koperasi'])

@section('content')

<div class="row gy-4 mb-5">
    <div class="col text-center">
        @foreach ($kecamatan as $item)
        <button type="button" class="btn btn-outline-secondary">{{ $item->nama }}</button>
        @endforeach
    </div>
</div>

<div class="row gy-4 mt-5">

    <div class="col">

          <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                      <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nomor</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Tahun Berdiri</th>
                          <th scope="col">Kecamatan</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">Wilayah</th>
                          <th scope="col">Sertifikat</th>
                          <th scope="col">Status</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nomor }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->tahun_berdiri }}</td>
                        <td>{{ $item->kecamatan->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->kode }}</td>
                        <td>
                            @if ($item->sertifikat === 'Y')
                            <span class="badge bg-success">Sudah Bersertifikat</span>
                            @else
                            <span class="badge bg-warning">Belum Bersertifikat</span>
                            @endif
                        </td>
                        <td>
                            @if ($item->status === 'Y')
                            <span class="badge bg-success">Aktif</span>
                            @else
                            <span class="badge bg-danger">Tidak Aktif</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
  </div>

@endsection
