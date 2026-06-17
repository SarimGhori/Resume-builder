<x-app-layout>
    <div class="max-w-4xl mx-auto py-8">
        <div class="bg-white shadow rounded-lg p-6">

            <h2 class="text-2xl font-bold mb-6">
                Create Resume Profile
            </h2>

            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('resume-profile.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block font-medium">Full Name</label>
                    <input type="text"
                           name="full_name"
                           class="w-full border rounded-lg p-2 mt-1"
                           required>
                </div>

                <div class="mb-4">
                    <label class="block font-medium">Professional Title</label>
                    <input type="text"
                           name="title"
                           class="w-full border rounded-lg p-2 mt-1"
                           placeholder="Laravel Developer">
                </div>

                <div class="mb-4">
                    <label class="block font-medium">Phone</label>
                    <input type="text"
                           name="phone"
                           class="w-full border rounded-lg p-2 mt-1">
                </div>

                <div class="mb-4">
                    <label class="block font-medium">Address</label>
                    <input type="text"
                           name="address"
                           class="w-full border rounded-lg p-2 mt-1">
                </div>

                <div class="mb-4">
                    <label class="block font-medium">Website</label>
                    <input type="text"
                           name="website"
                           class="w-full border rounded-lg p-2 mt-1">
                </div>

                <div class="mb-4">
                    <label class="block font-medium">GitHub</label>
                    <input type="text"
                           name="github"
                           class="w-full border rounded-lg p-2 mt-1">
                </div>

                <div class="mb-4">
                    <label class="block font-medium">LinkedIn</label>
                    <input type="text"
                           name="linkedin"
                           class="w-full border rounded-lg p-2 mt-1">
                </div>

                <div class="mb-4">
                    <label class="block font-medium">Professional Summary</label>
                    <textarea name="summary"
                              rows="5"
                              class="w-full border rounded-lg p-2 mt-1"></textarea>
                </div>

                <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                    Save Profile
                </button>

            </form>

        </div>
    </div>
</x-app-layout>