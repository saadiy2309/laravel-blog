<x-layout>

    @foreach ($posts as $post)
            <article>
                <h3>
                    <a href="/posts/{{ $post->slug }}">

                        {!! $post->title !!}
                    
                    </a>
                </h3>
                
                <p>
                    <a href="#"> {{ $post->category->name }} </a>
                </p>

                <div>
                    <p>
                        {{ $post->excerpt }}
                    </p>
                </div>
            </article>
    @endforeach

  

</x-layout>