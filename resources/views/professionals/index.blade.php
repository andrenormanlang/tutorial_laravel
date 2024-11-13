<x-layout>
    <h2>Professional List</h2>

    <ul>
        @foreach ($professionals as $professional)
        <li>
            <x-card href="{{ route('professionals.show', $professional->id) }}" :highlight="Str::contains($professional->skill, 'Development')">
                <div>
                    <h3>{{ $professional->name }}</h3>
                    <p><strong>Sector:</strong> {{$professional->category->name}}</p>
                </div>
            </x-card>
        </li>
        @endforeach
    </ul>

    {{ $professionals->links() }}
</x-layout>
