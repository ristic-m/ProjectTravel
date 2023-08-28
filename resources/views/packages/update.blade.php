<x-app-layout>
    <div class="py-12 bg-sky">
        <form action="/packages/{{ $packages->id }}" method="POST" enctype="multipart/form-data" class="flex flex-col w-1/3 mx-auto">
            @csrf
            @method('put')


            <div class="relative group">
                <label for="destination_id" class="cursor-pointer group-hover:opacity-100">Destination ID</label>
                <div class="absolute top-full left-0 opacity-0 group-hover:opacity-100 bg-gray-800 text-white p-2 rounded transition duration-300">
                    <p>1 - Japan</p>
                    <p>2 - China</p>
                    <p>3 - Vietnam</p>
                    <p>4 - Portugal</p>
                    <p>5 - Spain</p>
                    <p>6 - Greece</p>
                    <p>7 - Zanzibar</p>
                    <p>8 - Mauritius</p>
                    <p>9 - Seychelles</p>
                    <p>10 - Peru</p>
                    <p>11 - Chile</p>
                    <p>12 - Brazil</p>
                </div>
            </div>

            <input type="number" name="destination_id" class="mb-4">

            <label for="name">Package Name</label>
            <input type="text" name="name" class="mb-4">

            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" class="mb-4">

            <label for="end_date">End Date</label>
            <input type="date" name="end_date" class="mb-4">

            <label for="price">Price</label>
            <input type="number" name="price" class="mb-4">

            <label for="description">Description</label>
            <input type="text" name="description" class="mb-4">

            <button type="submit" class="py-2 px-6 bg-cyan rounded-lg w-1/7 mx-auto">Submit</button>
        </form>
    </div>

</x-app-layout>
