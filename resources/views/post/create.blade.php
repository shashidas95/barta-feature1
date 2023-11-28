@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
<<<<<<< HEAD
        <form class="space-y-6" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
=======
        <form class="space-y-6" action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
>>>>>>> b336812c9bf254e5ec7d1c26dcacd36303707f94
            @csrf
            <!-- Name -->
            <div>
                <label for="user_id" class="block text-sm font-medium leading-6 text-gray-900">User Name</label>
                <div class="mt-2">
                    <select name="user_id"
                        class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6 @error('user_id')!border-red-500
                            @enderror ">
                        @foreach ($users as $user)
<<<<<<< HEAD
                            <option value="{{ $user->id }}" >
                                {{ $user->name }}</option>
=======
                            <option value="{{ $user->id }}" @if (old('user_id') == $user->id) selected @endif>
                                {{ $user->fname }}</option>
>>>>>>> b336812c9bf254e5ec7d1c26dcacd36303707f94
                        @endforeach
                    </select>
                </div>

                <div class="text-red-500">
                    @error('user_id')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <!-- image  -->
            <div>
<<<<<<< HEAD
                <label for="post_image" class="block text-sm font-medium leading-6 text-gray-900">Image</label>
                <div class="mt-2">
                    <input id="post_image" name="post_image" type="file" value="{{ old('post_image') }}"
                        autocomplete="post_image" placeholder="alparslan1029" required
                        class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6 @error('post_image')!border-red-500
                            @enderror " />
                </div>
                <div class="text-red-500">
                    @error('post_image')
=======
                <label for="photo_path" class="block text-sm font-medium leading-6 text-gray-900">Image</label>
                <div class="mt-2">
                    <input id="photo_path" name="photo_path" type="file" value="{{ old('photo_path') }}"
                        autocomplete="photo_path" placeholder="alparslan1029" required
                        class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6 @error('photo_path')!border-red-500
                            @enderror " />
                </div>
                <div class="text-red-500">
                    @error('photo_path')
>>>>>>> b336812c9bf254e5ec7d1c26dcacd36303707f94
                        {{ $message }}
                    @enderror
                </div>
            </div>
<<<<<<< HEAD
            <!-- post content -->
            <div>
                <label for="post_content" class="block text-sm font-medium leading-6 text-gray-900">post content</label>
                <div class="mt-2">
                    <input id="post_content" name="post_content" type="text" value="{{ old('post_content') }}" autocomplete="post_content"
                        placeholder="alparslan1029" required
                        class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6 @error('post_content')!border-red-500
                            @enderror" />
                </div>
                <div class="text-red-500">
                    @error('post_content')
=======
            <!-- content -->
            <div>
                <label for="content" class="block text-sm font-medium leading-6 text-gray-900">content</label>
                <div class="mt-2">
                    <input id="content" name="content" type="text" value="{{ old('content') }}" autocomplete="content"
                        placeholder="alparslan1029" required
                        class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6 @error('content')!border-red-500
                            @enderror" />
                </div>
                <div class="text-red-500">
                    @error('content')
>>>>>>> b336812c9bf254e5ec7d1c26dcacd36303707f94
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div>
                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-black px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                    Save
                </button>
            </div>
        </form>
    @endsection
