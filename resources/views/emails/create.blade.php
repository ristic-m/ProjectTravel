<x-app-layout>
    <form action="{{route('emails.store')}}" method="post" class="flex flex-col w-1/3 mx-auto">
        @csrf
            <label for="subject" class="pt-20">Subject (Destination)</label>
            <input type="text" name="subject" id="subject" class="mb-4">

            <label for="body">Message</label>
            <textarea name="body" id="body" cols="30" rows="10" class="mb-4"></textarea>

            <button type="submit" class="py-2 px-6 bg-cyan rounded-lg w-1/7 mx-auto">Send!</button>

    </form>
</x-app-layout>
