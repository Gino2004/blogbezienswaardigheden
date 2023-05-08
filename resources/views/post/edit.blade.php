<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Categorie wijzigen
        </h2>
    </x-slot>
    <! --- dit is het wijzigen van posts  --->
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form action="/post/edit/{{ $post->id }}" method="post">
                {{ csrf_field() }}
                @method('put')
                <table>
                <tr>
                <td><label for="txttitle"class="text-black">titel: </label>
                <input type="text" name="txttitle" id="txttitle" value="{{ $post->title }}"></td>
                </tr>
                <tr>
                <td><label for="txttext"class="text-black">text: </label>
                <input type="text" name="txttext" id="txttext" value="{{ $post->text }}"></td>
                </tr>
                <tr>
                <td><label for="txtname"class="text-black">naam: </label>
                <input type="text" name="txtname" id="txtname" value="{{ $post->name }}"></td>
                </tr>
                <tr>
                <td><label for="txtdate"class="text-black">datum: </label>
                <input type="date" name="txtdate" id="txtdate" value="{{ $post->date }}"></td>
                </tr>
                <tr>
                <td><label for="txtsource"class="text-black">URL link: </label>
                <input type="text" name="txtsource" id="txtsource" value="{{ $post->source }}"></td>
                </tr>
                <label for="txtuser"class="text-black">User: </label>
                <select name="user" id="user">
                @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
</table>
                <input style="padding: 2em; border-radius: 40px;" type="submit" value="Opslaan">
            </form>
        </div>
    </div>
</x-app-layout>