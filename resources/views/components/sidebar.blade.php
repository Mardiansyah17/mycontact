<div id="Main"
    class="xl:rounded-r transform h-screen  xl:translate-x-0  ease-in-out transition duration-500 flex justify-start items-start   basis-1/4 sm:w-64 bg-gray-900 flex-col">


    <div class="text-white mt-10 w-full px-3">


        <a href="/"
            class="{{ request()->routeIs('all') ? 'bg-blue-500 ' : '' }} text-slate-50 mb-4 pl-3 w-full block py-3 rounded-lg">
            Semua
        </a>
        <a href="/favorit"
            class="{{ request()->routeIs('fav') ? 'bg-blue-500' : '' }} mb-4 pl-3 w-full block py-3 rounded-lg">
            Favorit
        </a>
        {{-- <a href="/blokir"
            class="{{ request()->routeIs('blok') ? 'bg-blue-500' : '' }} mb-4 pl-3 w-full block py-3 rounded-lg">
            Blokir
        </a> --}}
        <a href="{{ route('contact.create') }}"
            class="{{ request()->routeIs('contact.create') ? 'bg-blue-500' : '' }} text-slate-50 mb-4 pl-3 w-full block py-3 rounded-lg">
            Tambah kontak
        </a>
    </div>

    <div class="h-full flex justify-end flex-col w-full pb-3">
        <div class="flex text-white justify-between items-center w-full px-5 mt-5 ">
            <p class="">{{ Auth()->user()->username }}</p>
            <form method="post" action="/logout">
                @csrf
                <button type="submit"> <i class="fa-solid fa-right-from-bracket"></i></button>
            </form>



        </div>
    </div>
</div>
