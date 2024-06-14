@extends('frontend.detail.app', ['menu' => 'Data Ukm', 'breadcrumb' => 'UKM'])

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
                          <th scope="col">UKM</th>
                          <th scope="col">Nama</th>
                          <th scope="col">NIB</th>
                          <th scope="col">Kecamatan</th>
                          <th scope="col">Desa/Kelurahan</th>
                          <th scope="col">Jenis Usaha</th>
                          <th scope="col">Tahun</th>
                          <th scope="col">Detail</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_perusahaan }}</td>
                        <td>{{ $item->nama_pemilik }}</td>
                        <td>{{ $item->nib }}</td>
                        <td>{{ $item->desa->kecamatan->nama }}</td>
                        <td>{{ $item->desa->nama }}</td>
                        <td>{{ $item->jenis_usaha }}</td>
                        <td>{{ $item->tahun }}</td>
                        <td>
                            <a href="{{ route('ukm', $item->id) }}" class="btn btn-secondary">
                                <i class="bi bi-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
  </div>

@endsection
