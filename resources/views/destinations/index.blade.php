<h1>Destinations for {{ $continent->continent }}</h1>

@foreach ($destinations as $destination)
    <div>
        <h3>{{ $destination->name }}</h3>
        <img src="{{ $destination->imgUrl }}" alt="{{ $destination->name }}">
    </div>
@endforeach
