<x-layout>
    <x-slot:title>{{ $post['title'] }} - Mini-CMS</x-slot:title>

    <h1 class="text-3xl font-bold mb-2">{{ $post['title'] }}</h1>
    <p class="text-sm text-gray-500 mb-4">{{ $post['author'] }} - {{ $post['date'] }}</p>
    <p class="text-gray-700">{{ $post['excerpt'] }}</p>

    <a href="{{ route('posts.index') }}" class="underline mt-6 inline-block">Retour aux articles</a>
</x-layout>