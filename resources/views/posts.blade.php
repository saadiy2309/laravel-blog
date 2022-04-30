<x-layout>

    @foreach ($posts as $post)
            <article>
                <h3>
                    <a href="/posts/{{ $post->id }}">
                        {!! $post->title !!}
                    </a>
                </h3>
                
                <div>
                    <p>
                        {{ $post->excerpt }}
                    </p>
                </div>
            </article>
    @endforeach

  

</x-layout>