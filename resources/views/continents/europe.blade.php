<x-app-layout>

    <div class="py-12">
        @foreach($destinations as $destination)

            <div class="border-2 m-6 flex w-2/3 bg-cyan p-2 rounded-lg h-32 text-white">
                <div class="container">
                    <h1 class="font-bold mt-6 text-3xl ml-4">{{ $destination->name }}</h1>
                </div>

                <div class="">
                    <img src="{{ $destination->imgUrl }}" alt="" class="w-72">
                </div>

                <div class="inline-grid grid-cols-2 gap-2 gap-x-8 px-12">
                    @foreach($destination->packages as $package)
                        <a href="{{ route('packages.show', $package->id) }}" class="inline w-64">Show {{ $package->start_date }}</a>
                    @endforeach
                </div>

            </div>
        @endforeach
    </div>
</x-app-layout>

