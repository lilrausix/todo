<x-layout>
    <x-slot:title>Rediģēt uzdevumu</x-slot:title>
    <h1>Rediģēt uzdevumu</h1>
        <form method="POST" action="/todos/{{ $todo->id }}">
            @csrf
            @method('PUT')
            <input name="content" value="{{ old('content', $todo->content) }}" />
            <label>
                <input name="content" />
            </label>

            @error("content")
                <p>{{ $message }}</p>       
            @enderror

            <label>
                Izpildīts:
                <input name="completed" type="hidden" value="0">
                <input name="completed" type="checkbox" value="1" {{ old('completed', $todo->completed) ? 'checked' : '' }}>   
            </label>
            <button>Saglabāt</button>

            @error("content")
                <p>{{ $message }}</p>       
            @enderror
        </form>
    
</x-layout>