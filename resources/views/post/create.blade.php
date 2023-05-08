<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Posts toevoegen
        </h2>
    </x-slot>
    <! --- dit is een post toevoegen  --->
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form action="{{ route('post.create.post') }}" method="post">
                {{ csrf_field() }}
                <table>
                <tr>
                <td><label for="txttitle"class="text-black">titel: </label>
                <input type="text" name="txttitle" id="txttitle"></td>
                </tr>
                <tr>
                    <td><label for="txttext" class="text-black"> text: </label>
                    <textarea name="txttext" id="txttext" rows= "10"></textarea></td>
                </tr>
                <tr>
                <td><label for="txtname"class="text-black">naam: </label>
                <input type="text" name="txtname" id="txtname"></td>
                </tr>
                <tr>
                <td><label for="txtdate"class="text-black">datum: </label>
                <input type="date" name="txtdate" id="txtdate"></td>
                </tr>
                <tr>
                <td><label for="txtsource"class="text-black">URL link: </label>
                <input type="text" name="txtsource" id="txtsource"></td>
                </tr>
                <label for="txtuser"class="text-black">User: </label>
                <select name="user" id="user">
                @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
</table>
                <input style="background-color: aqua; padding: 0.5em; border-radius: 40px;" type="submit"
                    value="Opslaan">
            </form>
        </div>
    </div>
</x-app-layout>