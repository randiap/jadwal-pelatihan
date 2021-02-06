<div>
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <button wire:click="showModal()" class="bg-green-500 hover:bg-green-700 py-1 px-4 ml-4 rounded rounded-sm my-2 text-white"> 
                + Create Jadwal</button>
                @if($isOpen)
                    @include('livewire.create')
                @endif
                    <table class="table-fixed w-full">
                        <thead class="bg-blue-100">
                            <tr>
                                <th class="px-2 py-4">Nama Pelatihan</th>
                                <th class="px-2 py-4">Nama Materi</th>
                                <th class="px-2 py-4">Hari/Tanggal</th>
                                <th class="px-2 py-4">Jam Mengajar</th>
                                <th class="px-2 py-4">Nama Instruktur</th>
                                <th class="px-2 py-4">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach($posts as $post)
                            <tr>
                                <td>{{(( $post->pelatihan))}}</td>
                                <td>{{(( $post->materi))}}</td>
                                <td>{{(( $post->hari))}}</td>
                                <td>{{(( $post->jam))}}</td>
                                <td>{{(( $post->instruktur))}}</td>
                                <td>
                                    <button class="bg-yellow-300 py-1 px-4 rounded rounded-sm my-2 hover:bg-yellow-400">Edit</button>
                                    <button class="bg-red-500 py-1 px-4 rounded rounded-sm my-2 text-white hover:bg-red-700">Hapus</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
        </div>
</div>
