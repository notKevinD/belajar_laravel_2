<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- @foreach ($posts as $post )

    <article class="py-8 max-w-3xl border-b border-gray-200">
        <a href="/posts/{{ $post['id'] }}" class="hover:underline hover:text-blue-500">
            <h2 class="mb-1 text-3xl tracking-tight font-bold hover:text-blue-500" text-gray-900">{{ $post['title'] }}
            </h2>
            <a>
                <div class="text-base text-gray-500">
                    Uploaded by <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{
                        $post->author->name }}</a> about <a href="/type/{{ $post->type->name }}"
                        class="hover:underline">{{ $post->type->name }}</a> | {{ date('d F Y',
                    strtotime($post['created_at'])) }}
                </div>
                <p class="font-light my-4">{{ Str::limit($post['body'],150) }}</p>
                <a href="/posts/{{ $post['id'] }}" class="font-medium text-blue-500 hover:underline">Read More
                    &raquo;</a>
    </article>
    @endforeach --}}
    <section>
        <div class="py-2 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <form >
                <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                    <div class="relative w-full">
                        <label for="search"
                            class="hidden mb-2 text-sm font-medium text-gray-900 ">Search</label>
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 " fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                        </div>
                        <input
                            class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 "
                            placeholder="Search an article" type="search" id="search" name="search" autocomplete="off">
                    </div>
                    <div>
                        <button type="submit"
                            class="py-3 px-5 w-full text-sm font-medium text-center text-black rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 ">Search</button>
                    </div>
                </div>

            </form>
            <div class="mb-6 mt-3">
            {{ $posts->links() }}
            </div>
            <div class="grid gap-8 lg:grid-cols-3">
                @foreach ($posts as $post)
                            <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md ">
                                <div class="flex justify-between items-center mb-5 text-gray-500">
                                    <span
                                        class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                            </path>
                                        </svg>
                                        <a href="/type/{{ $post->type->name }}" class="hover:underline">{{ $post->type->name }}</a>
                                    </span>
                                    <span class="text-sm">{{
                    $post['created_at'] }}</span>
                                </div>
                                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "><a
                                        href="/posts/{{ $post['id'] }}">{{ $post['title'] }}</a></h2>
                                <p class="mb-5 font-light text-gray-500 ">{{ Str::limit($post['body'], 150) }}</p>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center space-x-4">
                                        <img class="w-7 h-7 rounded-full"
                                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                            alt="Jese Leos avatar" />
                                        <span class="font-medium ">
                                            <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{
                    $post->author->name }}</a>
                                        </span>
                                    </div>
                                    <a href="/posts/{{ $post['id'] }}"
                                        class="inline-flex items-center font-medium text-primary-600 hover:underline">
                                        Read more
                                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                            </article>
                @endforeach

            </div>
        </div>
    </section>
</x-layout>
