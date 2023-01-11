@extends('app')
@section('main')
    <div class="flex flex-col h-screen justify-center items-center ">
        <form action="/login" method="post">
            @csrf
            <input name="username" type="text" placeholder="Masukan username"
                class="border border-blue-500 p-2 rounded-lg focus:border-blue-600 outline-none mb-3">
            <button class="px-3 py-2 bg-blue-500 rounded-lg text-white">Login</button>
        </form>
    </div>
@endsection
