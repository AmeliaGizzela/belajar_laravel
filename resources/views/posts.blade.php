
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3 class="text-xl">ini adalah Blog page</h3>

    @foreach ($posts as $post)

    <article class="py-8 max-w-screen-md border-gray-300">
      <a href="/posts/{{ $post['id'] }}" class='hover:underline'>
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
      </a>
      <div class="text-base text-gray-500 ">
        <a href="#">{{ $post['author'] }}</a>
      </div>
      <p class="my-4 font-light">{{ Str::limit($post['body'], 150)}}</p>
      <a href="/posts/{{ $post['id'] }}" class="font-medium text-blue-600 hover:underline">Read more &raquo;</a>
    </article>

    @endforeach

  </x-layout>