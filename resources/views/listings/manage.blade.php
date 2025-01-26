<x-layout>
    <div class="navbar bg-primary text-white p-3 d-flex justify-content-between align-items-center">
        {{-- <h5 class="mb-0"></h5> --}}
        <div class="text-white py-2 px-2 rounded hover:bg-red-400 transition duration-300">
            <a href="{{route('dashboard')}}" class="inline-block text-black ml-2 mb-2"><i class="fa-solid fa-arrow-left"></i>
                Back
            </a>           
        </div>
    </div>
    <x-card class="p-10">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Manage Gigs
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless($listings->isEmpty())
                @foreach($listings as $listing)
                
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="">
                            {{$listing->title}}
                        </a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="{{route('listing.edit', ["listing" => $listing->id])}}" class="text-blue-400 px-6 py-2 rounded-xl"><i class="fa-solid fa-pen-to-square"></i>
                            Edit
                        </a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">

                        <form method="POST" action="{{ route('listing.destroy', ["id" => $listing->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
                        </form>

                    </td>
                </tr>
                @endforeach

                @else
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center">No listings Found</p>
                    </td>
                </tr>
                @endunless
            </tbody>
        </table>
    </x-card>
    <div class="m-5 space-y-8">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-red-400">
            <a href="{{route('dashboard')}}" class="text-black ml-4"> Back </a>
        </button>
    </div>
</x-layout>