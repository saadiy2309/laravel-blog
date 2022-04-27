<x-layout>

    @foreach ($posts as $post)
            <article>
                <h3>
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h3>
                
                <div>
                    {{ $post->excerpt }}
                </div>
            </article>
    @endforeach

  

</x-layout>