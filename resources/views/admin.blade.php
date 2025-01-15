@extends('dashboard')
@section('content')

<div class="max-w-7xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-gray-700 mb-4">Update Record</h1>

    <!-- Tab Navigation -->
    <div class="border-b border-gray-200 mb-6">
        <nav class="-mb-px flex space-x-8" aria-label="Tabs">
            <button onclick="showTab('section-details')" class="tab-button text-gray-500 hover:text-gray-700 hover:border-gray-300 px-4 py-2 text-sm font-medium border-b-2 border-transparent">
                Section 1
            </button>
            <button onclick="showTab('media')" class="tab-button text-gray-500 hover:text-gray-700 hover:border-gray-300 px-4 py-2 text-sm font-medium border-b-2 border-transparent">
                Section 2
            </button>
            <button onclick="showTab('preview')" class="tab-button text-gray-500 hover:text-gray-700 hover:border-gray-300 px-4 py-2 text-sm font-medium border-b-2 border-transparent">
                Section 3
            </button>
        </nav>
    </div>

    <!-- Section Content -->
    <div id="section-details" class="tab-content">
        <form id="updateForm" action="{{ route('data.update')}}" method="POST" class="space-y-6">
             @csrf
            
            <div>
                <label for="section_name" class="block text-sm font-medium text-gray-700">Section Name</label>
                <input type="text" id="section_name" name="section_name"
                    class="mt-1 p-2 w-full border rounded-md focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter section name" value="section-details-one" readonly>
            </div>

            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="lable" name="lable"
                    class="mt-1 p-2 w-full border rounded-md focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter title" value="Example Title">
            </div>

            <!-- Content -->
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea id="details" name="details" rows="5"
                    class="mt-1 p-2 w-full border rounded-md focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter content">Example Content</textarea>
            </div>

            <!-- Picture -->
            <div>
                <label for="picture" class="block text-sm font-medium text-gray-700">Picture</label>
                <input type="file" id="value" name="value" accept="image/*"
                    class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border file:rounded-md file:border-blue-500 file:text-blue-500 hover:file:bg-blue-50"
                    onchange="previewImage()">
            </div>

            <!-- Preview Area -->
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Preview</h2>
            <img id="picturePreview" class="w-full h-96 object-cover rounded-md border border-gray-300"
                src="https://via.placeholder.com/800x600" alt="Picture Preview">
            <div class="mt-4">
                
            </div>

            <!-- Update Button -->
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                    Update
                </button>
            </div>
        </form>
    </div>

    <div id="media" class="tab-content hidden">
        <form id="updateForm" action="/update-index" method="POST" enctype="multipart/form-data" class="space-y-6">
            <!-- Hidden ID -->
            <input type="hidden" name="id" id="id" value="1">

            <!-- Section Name -->
            <div>
                <label for="section_name" class="block text-sm font-medium text-gray-700">Section Name</label>
                <input type="text" id="section_name" name="section_name"
                    class="mt-1 p-2 w-full border rounded-md focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter section name" value="section-details-two" readonly>
            </div>

            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" name="title"
                    class="mt-1 p-2 w-full border rounded-md focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter title" value="Example Title">
            </div>

            <!-- Content -->
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea id="content" name="content" rows="5"
                    class="mt-1 p-2 w-full border rounded-md focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter content">Example Content</textarea>
            </div>

            <!-- Picture -->
            <div>
                <label for="picture" class="block text-sm font-medium text-gray-700">Picture</label>
                <input type="file" id="picture" name="picture" accept="image/*"
                    class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border file:rounded-md file:border-blue-500 file:text-blue-500 hover:file:bg-blue-50"
                    onchange="previewImage()">
            </div>

            <!-- Preview Area -->
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Preview</h2>
            <img id="picturePreview" class="w-full h-96 object-cover rounded-md border border-gray-300"
                src="https://via.placeholder.com/800x600" alt="Picture Preview">
            <div class="mt-4">
                
            </div>

            <!-- Update Button -->
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                    Update
                </button>
            </div>
        </form>
    </div>

    <div id="preview" class="tab-content hidden">
        <form id="updateForm" action="/update-index" method="POST" enctype="multipart/form-data" class="space-y-6">
            <!-- Hidden ID -->

            <!-- Section Name -->
            <div>
                <label for="section_name" class="block text-sm font-medium text-gray-700">Section Name</label>
                <input type="text" id="section_name" name="section_name"
                    class="mt-1 p-2 w-full border rounded-md focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter section name" value="section-details-three" readonly>
            </div>

            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" name="title"
                    class="mt-1 p-2 w-full border rounded-md focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter title" value="Example Title">
            </div>

            <!-- Content -->
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea id="content" name="content" rows="5"
                    class="mt-1 p-2 w-full border rounded-md focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter content">Example Content</textarea>
            </div>

            <!-- Picture -->
            <div>
                <label for="picture" class="block text-sm font-medium text-gray-700">Picture</label>
                <input type="file" id="picture" name="picture" accept="image/*"
                    class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border file:rounded-md file:border-blue-500 file:text-blue-500 hover:file:bg-blue-50"
                    onchange="previewImage()">
            </div>

            <!-- Preview Area -->
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Preview</h2>
            <img id="picturePreview" class="w-full h-96 object-cover rounded-md border border-gray-300"
                src="https://via.placeholder.com/800x600" alt="Picture Preview">
            <div class="mt-4">
                
            </div>

            <!-- Update Button -->
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Tab Navigation
    function showTab(tabId) {
        document.querySelectorAll('.tab-content').forEach(content => content.classList.add('hidden'));
        document.getElementById(tabId).classList.remove('hidden');

        document.querySelectorAll('.tab-button').forEach(button => button.classList.remove('border-blue-500', 'text-blue-500'));
        event.target.classList.add('border-blue-500', 'text-blue-500');
    }

    // Image Preview
    function previewImage() {
        const fileInput = document.getElementById('picture');
        const preview = document.getElementById('picturePreview');

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }

    // Update Preview Content
    function updatePreview() {
        document.getElementById('previewTitle').textContent = document.getElementById('title').value;
        document.getElementById('previewContent').textContent = document.getElementById('content').value;
    }
    $.ajax({
    url: '/update/' + id, // Pass the ID here
    type: 'POST',
    data: {
        // Your data here
    },
    success: function(response) {
        console.log(response);
    }
});


    document.getElementById('title').addEventListener('input', updatePreview);
    document.getElementById('content').addEventListener('input', updatePreview);
</script>
@endsection
