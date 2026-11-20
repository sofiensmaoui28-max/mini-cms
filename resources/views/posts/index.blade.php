<x-layout>
    <x-slot:title>Articles - Mini-CMS</x-slot:title>

    <h1 class="text-3xl font-bold mb-6">Articles</h1>

    <div class="grid gap-4 max-w-2xl">
        @forelse ($posts as $post)
            <x-post-card :post="$post" />
        @empty
            <p class="text-gray-600">Aucun article.</p>
        @endforelse
    </div>
</x-layout>