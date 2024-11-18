<x-layout>
    <form action="{{route('professionals.store')}}" method="POST">
        @csrf

        <h2>Add a Professional</h2>

        <!-- Name -->
        <label for="name">Name:</label>
        <input
          type="text"
          id="name"
          name="name"
          value="{{ old('name') }}"
          required
        >

        <!-- Skill -->
        <label for="skill">Skill</label>
        <input
          type="text"
          id="skill"
          name="skill"
          value="{{ old('skill') }}"
          required
        >

        <!--  Bio -->
        <label for="bio">Biography:</label>
        <textarea
          rows="5"
          id="bio"
          name="bio"
          required
        >{{old('bio')}}</textarea>

        <!-- select a sector -->
        <label for="category_id">Sector:</label>
        <select id="category_id" name="category_id" required>
          <option value="" disabled selected>Select a Sector</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{$category->id == old('category_id') ? 'selected': ''}}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="btn mt-4">Add</button>

        <!-- validation errors -->
        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach($errors->all() as $error)
                    <li class="my-2 text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        @endif

      </form>
</x-layout>
