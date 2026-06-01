<x-layout>
    <x-slot:title>Rediģēt dienasgrāmatu</x-slot:title>
    <h1>Rediģēt dienasgrāmatu</h1>
        <form method="POST" action="/diaries/{{ $diary->id }}">
            @csrf
            @method('PUT')
            <input name="title" value="{{ old('title', $diary->title) }}" />
            <label>
                <input name="title" />
            </label>

            @error("title")
                <p>{{ $message }}</p>       
            @enderror
            
            <label>
                <input name="body" value="{{ old('body', $diary->body) }}" />
            </label>

            @error("body")
                <p>{{ $message }}</p>       
            @enderror

            <label>
                <input name="date" type="date" value="{{ old('date', $diary->date) }}" />
            </label>

            @error("date")
                <p>{{ $message }}</p>       
            @enderror

            <button>Saglabāt</button>

            @error("title")
                <p>{{ $message }}</p>       
            @enderror
        </form>
    
</x-layout>