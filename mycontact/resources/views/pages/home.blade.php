@extends('app')

@section('main')
    @if (Session::has('sukses-simpan'))
        @include('components.modal', ['message' => Session::get('sukses-simpan')])
    @endif
    @if (Session::has('sukses-edit'))
        @include('components.modal', ['message' => Session::get('sukses-edit')])
    @endif
    @include('components.header', ['tes' => 'mantap'])

    @if (count($contacts))
        @include('components.table', ['contacts' => $contacts])
    @else
        <h1 class="text-lg font-semibold">Kontak masih kosong</h1>
    @endif
@endsection
