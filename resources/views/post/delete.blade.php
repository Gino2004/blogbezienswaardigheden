<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Post verwijderen
        </h2>
    </x-slot>
    <! --- dit is het verwijderen van een post  --->
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <form action="{{ route('post.delete.delete', ['post'=>$post->id]) }}" method="post">
                    {{ csrf_field() }}
                    @method('delete')
                    <p>Titel: {{ $post->title }}</p>
                    <p>Text: {{ $post->text }}</p>
                    <p>Naam: {{ $post->name }}</p>
                    <p>Datum: {{ $post->date }}</p>
                    <p>Source: {{ $post->source }}</p>
                    <input style=" background-color: blue; padding: 2em; border-radius: 20px;" type="submit" value="Verwijderen">
                </form>
        </div>
    </div>
</x-app-layout>