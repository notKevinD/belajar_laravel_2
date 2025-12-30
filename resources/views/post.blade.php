<x-layout>
    <x-slot:title>{{ $title  }}</x-slot:title>

    <article class="py-8 max-w-3xl border-b border-gray-200">

        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
             Uploaded by <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a> about <a href="/type/{{ $post->type->name }}" class="hover:underline">{{ $post->type->name }}</a> | {{ date('d F Y', strtotime($post['created_at'])) }}
        </div>
        <p class="font-light my-4">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
    </article>

</x-layout>
