<div class="flex flex-col w-full sm:w-4/5">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-white border-b">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                No
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Nama lengkap
                            </th>

                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Nomor hp
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Aksi
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Favorit
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr class="{{ $loop->iteration % 2 == 0 ? 'bg-white' : 'bg-gray-200' }} border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $loop->iteration }}</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $contact->name }}
                                </td>

                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $contact->number_phone }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex space-x-3">
                                    <a href="{{ route('contact.edit', $contact->id) }}"><i
                                            class="fa-solid fa-pen-to-square text-xl"></i></a>
                                    <form method="post" action="{{ route('contact.destroy', $contact->id) }}">
                                        @csrf
                                        @method('delete')
                                        <label for="delete-modal" class="cursor-pointer">
                                            <i class="fa-solid fa-trash text-xl "></i>
                                        </label>
                                        <input type="checkbox" id="delete-modal" class="modal-toggle" />
                                        <div class="modal">
                                            <div class="modal-box">
                                                <h3 class="font-bold text-lg">Konfirmasi hapus</h3>
                                                <p class="py-4">Yakin mau hapus {{ $contact->name }}
                                                </p>
                                                <div class="flex space-x-3 justify-end">
                                                    <div
                                                        class="modal-action px-3 py-2 bg-red-500 text-white cursor-pointer">
                                                        <label for="delete-modal">Batal</label>
                                                    </div>
                                                    <div
                                                        class="modal-action px-3 py-2 bg-blue-500 text-white cursor-pointer">
                                                        <button type="submit">
                                                            iya
                                                        </button>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>


                                    </form>
                                </td>
                                <td class="cursor-pointer text-center">
                                    @if ($contact->category_id == 1)
                                        <i class="fa-solid fa-star"></i>
                                    @else
                                        <i class="fa-regular fa-star "></i>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
