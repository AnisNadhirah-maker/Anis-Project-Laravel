<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <h3 class="text-xl">Welcome to about page!</h3>
    <p>Name: {{ $name ?? 'Anis Nadhirah' }}</p>
    <img src="img/hellokitty.gif" alt="Hello Kitty" width="200">
</x-layout>