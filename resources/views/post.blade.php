<x-layout>


      <article>
          <h1>
             {!! $post->title !!}
          </h1>

         <p>
            <a href="#"> {{ $post->category->name }} </a>
         </p>

          <div>
            <p>
              {!! $post->body !!}
            </p>
          </div>
      </article>
      <br>
      <div>   
         <a href="/">Go Back</a>   
      <div> 

</x-layout>


