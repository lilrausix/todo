<x-layout>
    <h1>Visi veicamie uzdevumi</h1>

    <ul>
  @foreach ($todos as $todo)
    <li><a href="/todos/{{ $todo->id }}">{{ $todo->content }}</a></li>
  @endforeach
</ul>

</x-layout>