@extends('layouts.admin')

@section('title')
Data Donasi
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Data Donasi
    </h2>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }} </li>
            @endforeach
          </ul>
        </div>
        @endif
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-4 py-3">Foto</th>
              <th class="px-4 py-3">Tanggal</th>
              <th class="px-4 py-3">Pembayaran</th>
              <th class="px-4 py-3">Harapan</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = $data->firstItem() ?>
            @foreach ($data as $item)
            <tr class="text-gray-700 dark:text-gray-400">
              <td>{{ $i }}</td>
              <td>{{ $item->created_at}}</td>
              <td>{{ $item->pembayaran}}</td>
              <td>{{ $item->harapan}}</td>
            </tr>
            <?php $i++ ?>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
</main>
@endsection