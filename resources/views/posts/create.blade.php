@extends("layouts.app")
@section("content")

@section('content')

<div class="max-w-3xl mx-auto p-6">

    <h1 class="text-3xl font-bold mb-6">
        Create Blog Post
    </h1>

    <form action="#" method="POST" enctype="multipart/form-data">

        @csrf

        <!-- Blog Title -->
        <div class="mb-4">
            <label for="title" class="block mb-2 font-medium">
                Blog Title
            </label>

            <input
                type="text"
                id="title"
                name="title"
                class="input input-bordered w-full"
                placeholder="Enter blog title">
        </div>

        <!-- Category -->
        <div class="mb-4">
            <label for="category" class="block mb-2 font-medium">
                Category
            </label>

            <select
                id="category"
                name="category"
                class="select select-bordered w-full">

                <option disabled selected>Select a category</option>
                <option value="Technology">Technology</option>
                <option value="Travel">Travel</option>
                <option value="Lifestyle">Lifestyle</option>
                <option value="Education">Education</option>

            </select>
        </div>

        <!-- Excerpt -->
        <div class="mb-4">
            <label for="excerpt" class="block mb-2 font-medium">
                Excerpt
            </label>

            <textarea
                id="excerpt"
                name="excerpt"
                rows="3"
                class="textarea textarea-bordered w-full"
                placeholder="Write a short summary of your blog"></textarea>
        </div>

        <!-- Blog Content -->
        <div class="mb-4">
            <label for="content" class="block mb-2 font-medium">
                Blog Content
            </label>

            <textarea
                id="content"
                name="content"
                rows="8"
                class="textarea textarea-bordered w-full"
                placeholder="Write your blog here..."></textarea>
        </div>

        <!-- Feature Image -->
        <div class="mb-6">
            <label for="image" class="block mb-2 font-medium">
                Feature Image
            </label>

            <input
                type="file"
                id="image"
                name="image"
                accept="image/*"
                class="file-input file-input-bordered w-full">
        </div>

        <!-- Submit Button -->
        <button
            type="submit"
            class="btn btn-primary">
            Publish Blog
        </button>

    </form>

</div>

@endsection