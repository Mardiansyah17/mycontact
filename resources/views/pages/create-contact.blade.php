@extends('app')

@section('main')
    <div class="block p-6 rounded-lg shadow-lg bg-white w-2/5">
        <form action="{{ route('contact.store') }}" method="post">
            @csrf
            <div class="">
                <div class="form-group mb-6">
                    @include('components.input', ['placeholder' => 'Nama lengkap', 'name' => 'name'])
                    @error('name')
                        <span class="text-red-500 ml-3">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-6">
                    @include('components.input', [
                        'placeholder' => 'Nomor telpon',
                        'name' => 'number_phone',
                    ])
                    @error('number_phone')
                        <span class="text-red-500 ml-3">{{ $message }}</span>
                    @enderror
                </div>
                {{-- <div class="form-group mb-6">
                    <select name="category_id" id=""
                        class="form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                        <option value="" selected disabled>Pilih opsi</option>
                        <option value="1">Favorit</option>
                    </select>
                    @error('category_id')
                        <span class="text-red-500 ml-3">{{ $message }}</span>
                    @enderror
                </div> --}}

            </div>



            <button type="submit"
                class="
        w-full
        px-6
        py-2.5
        bg-blue-600
        text-white
        font-medium
        text-xs
        leading-tight
        uppercase
        rounded
        shadow-md
        hover:bg-blue-700 hover:shadow-lg
        focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
        active:bg-blue-800 active:shadow-lg
        transition
        duration-150
        ease-in-out">Simpan</button>
        </form>
    </div>
@endsection
