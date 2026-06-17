<x-app-layout>
    <div class="max-w-4xl mx-auto py-8">
        <div class="bg-white shadow rounded-lg p-6">

            <h1 class="text-2xl font-bold mb-6">
                Add Education
            </h1>

            <form action="{{ route('education.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block mb-2">Degree</label>
                    <input type="text" name="degree"
                        class="w-full border rounded p-2" required>
                </div>

                <div class="mb-4">
                    <label class="block mb-2">Institution</label>
                    <input type="text" name="institution"
                        class="w-full border rounded p-2" required>
                </div>

                <div class="mb-4">
                    <label class="block mb-2">Field of Study</label>
                    <input type="text" name="field_of_study"
                        class="w-full border rounded p-2">
                </div>

                <div class="mb-4">
                    <label class="block mb-2">Start Date</label>
                    <input type="date" name="start_date"
                        class="w-full border rounded p-2">
                </div>

                <div class="mb-4">
                    <label class="block mb-2">End Date</label>
                    <input type="date" name="end_date"
                        class="w-full border rounded p-2">
                </div>

                <div class="mb-4">
                    <label class="block mb-2">Grade</label>
                    <input type="text" name="grade"
                        class="w-full border rounded p-2">
                </div>

                <div class="mb-4">
                    <label class="block mb-2">Description</label>
                    <textarea name="description"
                        class="w-full border rounded p-2"
                        rows="4"></textarea>
                </div>

                <button type="submit"
                    class="bg-blue-600 text-white px-5 py-2 rounded">
                    Save Education
                </button>

            </form>
        </div>
    </div>
</x-app-layout>