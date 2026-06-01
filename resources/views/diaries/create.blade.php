<x-layout>
    <x-slot:title>Izveidot ierakstu</x-slot:title>
    <h1>Izveidot ierakstu</h1>
        <form method="POST" action="/diaries">
            @csrf
            <input name="title" />
            <input name="body" />
            <input name="date" type="date" />
            <button>Saglabāt</button>

            @error("title")
                <p>{{ $message }}</p>
            @enderror
        </form>
    
</x-layout>