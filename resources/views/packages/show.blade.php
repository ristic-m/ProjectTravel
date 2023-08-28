<x-app-layout>

    <div class="py-12 bg-sky">
        <h1 class="text-center font-bold text-4xl">{{ $packages->name }}</h1>
        <p class="py-4 px-28">{{ $packages->description }}</p>
        <p class="py-4 px-28">Price: ${{ $packages->price }}</p>
        <p class="px-28">Beginning of trip: {{ $packages->start_date }}</p>
        <p class="px-28">End of trip: {{ $packages->end_date }}</p>

        @if(auth()->user()->role->role == 'moderator')
            <div class="flex px-28">
                <a href="{{ route('packages.edit', $packages->id) }} " class="bg-orange py-2 px-6 m-2 rounded-lg inline">Update</a>
                <form action="{{route('packages.destroy', $packages->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('delete')

                    <button type="submit" onclick="return confirm('Are you sure?');" class="bg-red py-2 px-6 m-2 rounded-lg inline">Delete</button>
                </form>
            </div>
        @endif

    </div>
</x-app-layout>
