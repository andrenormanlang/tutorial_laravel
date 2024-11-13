<x-layout>
    <h2>{{$professional->name}}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Profession:</strong> {{$professional->skill}}</p>
        <p><strong>Bio:</strong></p>
        <p>{{$professional->bio}}</p>
    </div>

    {{-- Sector info --}}
    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Sector Information</h3>
        <p><strong>Sector:</strong> {{$professional->category->name}}</p>
        <p><strong>About the sector:</strong> {{$professional->category->description}}</p>
    </div>
    
</x-layout>
