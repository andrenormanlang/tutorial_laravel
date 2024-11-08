<x-layout>
    <h2>Professional List</h2>

    {{-- @if ($greetings == "hi")
        <strong>Hi from inside the if statement</strong>
    @endif --}}
    <ul>
        @foreach ($professionals as $professional)
        <li>
           <x-card href="/professionals/{{$professional['id']}}" :highlight="$professional['skill'] >81">
                <h3>{{$professional['name']}}</h3>
           </x-card>
        </li>
        @endforeach
    </ul>
</x-layout>
