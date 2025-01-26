<x-layout>
    <div class="navbar bg-primary text-white p-3 d-flex justify-content-between align-items-center">
        <div class="text-white py-2 px-2 rounded hover:bg-red-800 transition duration-300">
            <a href="" class="inline-block text-black ml-2 mb-2"><i class="fa-solid fa-arrow-left"></i>
                Back
            </a>           
        </div>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h4 class="text-lg font-semibold mb-4">Apply for the job</h4>
        <form action="{{ route('postjob.form', ['listing' => $listing->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <div class="mb-4">
                        <input type="text" name="name" placeholder="Your name" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                </div>
                <div>
                    <div class="mb-4">
                        <input type="email" name="email" placeholder="example@example.com" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                </div>
                <div>
                    <div class="mb-4">
                        <input type="text" name="linkedin" placeholder="LinkedIn" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                </div>
                <div>
                    <div class="mb-4">
                        <input type="text" name="github" placeholder="GitHub" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div class="md:col-span-2">
                    <div class="mb-4">
                        <input type="text" name="portfolio" placeholder="Website/Portfolio link" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div class="md:col-span-2">
                    <div class="flex items-center border border-gray-300 rounded-lg p-2">
                        <label for="CV" class="flex-grow text-gray-500">
                            <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload CV
                        </label>
                        <input type="file" name="CV" id="CV" class="hidden" required>
                        <span id="fileName" class="ml-4 text-gray-600">No file selected</span>
                    </div>
                </div>
                <div class="md:col-span-2">
                    <div class="text-right">
                        <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                            Apply Now
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <script>
            document.getElementById('CV').addEventListener('change', function (event) {
                const fileName = event.target.files[0]?.name || "No file selected";
                document.getElementById('fileName').textContent = fileName;
            });
        </script>              
    </div>
</x-layout>
