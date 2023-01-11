<div class="flex justify-center mt-3">
    <div class="mb-3 ">
        <select
            class="
        block
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding bg-no-repeat
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            aria-label="Default select example" id="filter">
            @if ($filter === 'semua')
                <option value="semua" selected>Semua</option>
                <option value="1">Favorit</option>
                <option value="2">Blokir</option>
            @elseif ($filter === 'favorit')
                <option value="semua">Semua</option>
                <option value="1" selected>Favorit</option>
                <option value="2">Blokir</option>
            @else
                <option value="semua">Semua</option>
                <option value="1">Favorit</option>
                <option value="2" selected>Blokir</option>
            @endif
        </select>
    </div>
</div>
