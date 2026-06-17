<x-app-layout>
    <div class="max-w-4xl mx-auto py-8">

        <div class="bg-white shadow rounded-lg p-6">

            <h1 class="text-2xl font-bold mb-6">
                Edit Education
            </h1>

            <form action="{{ route('education.update', $education->id) }}"
                method="POST">

                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block mb-2">Degree</label>
                    <input type="text"
                        name="degree"
                        value="{{ $education->degree }}"
                        class="w-full border rounded p-2">
                </div>

                <div class="mb-4">
                    <label class="block mb-2">Institution</label>
                    <input type="text"
                        name="institution"
                        value="{{ $education->institution }}"
                        class="w-full border rounded p-2">
                </div>

                <div class="mb-4">
                    <label class="block mb-2">Grade</label>
                    <input type="text"
                        name="grade"
                        value="{{ $education->grade }}"
                        class="w-full border rounded p-2">
                </div>

                <button type="submit"
                    class="bg-blue-600 text-white px-5 py-2 rounded">
                    Update Education
                </button>

            </form>

        </div>
    </div>
</x-app-layout>