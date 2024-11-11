<x-layout>
    <h2>{{$professional->name}}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Profession:</strong> {{$professional->skill}}</p>
        <p><strong>Bio:</strong></p>
        <p>{{$professional->bio}}</p>
    </div>
</x-layout>
