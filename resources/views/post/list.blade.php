<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Posts overzicht
        </h2>
    </x-slot>
    <! --- dit is een overzicht van post waar je kan wijzigen en verwijderen --->
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table class = "tabel">
                <tr>
                    <th>ID</th>
                    <th>title</th>
                    <th>text</th>
                    <th>Name</th>
                    <th>date</th>
                    <th>source</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Wijzigen?</th>
                </tr>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title}}</td>
                    <td>{{ $post->text}}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->date}}</td>
                    <td><img src="{{ $post->source}}"> </td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td><a href="/post/edit/{{$post->id}}">Wijzig</a></td>
                    <td><a href="/post/delete/{{$post->id}}">Verwijderen</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>