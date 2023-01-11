<form action="/">
    <div class="flex rounded-md overflow-hidden w-full">
        <input name="search" type="text"
            class="w-full rounded-md rounded-r-none  focus:outline-blue-600 border-blue-500 border p-2"
            placeholder="cari kontak" @if (request('search')) value="{{ request('search') }}" @endif />
        <button type="submit" class="bg-indigo-600 text-white px-9 text-lg font-semibold py-2 rounded-r-md">Cari</button>
    </div>
</form>
