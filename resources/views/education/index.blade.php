<x-app-layout>
    <div class="max-w-6xl mx-auto py-8">

        <div class="flex justify-between mb-5">
            <h1 class="text-2xl font-bold">Education List</h1>

            <a href="{{ route('education.create') }}"
                class="bg-green-600 text-white px-4 py-2 rounded">
                Add Education
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow rounded-lg">

            <table class="w-full">
                <thead>
                    <tr class="border-b">
                        <th class="p-3 text-left">Degree</th>
                        <th class="p-3 text-left">Institution</th>
                        <th class="p-3 text-left">Grade</th>
                        <th class="p-3 text-left">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($educations as $education)

                        <tr class="border-b">

                            <td class="p-3">
                                {{ $education->degree }}
                            </td>

                            <td class="p-3">
                                {{ $education->institution }}
                            </td>

                            <td class="p-3">
                                {{ $education->grade }}
                            </td>

                            <td class="p-3">

                                <a href="{{ route('education.edit', $education->id) }}"
                                    class="text-blue-600">
                                    Edit
                                </a>

                                <form action="{{ route('education.destroy', $education->id) }}"
                                    method="POST"
                                    class="inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                        class="text-red-600 ml-3">
                                        Delete
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="4" class="p-4 text-center">
                                No Education Found
                            </td>
                        </tr>

                    @endforelse

                </tbody>
            </table>

        </div>
    </div>
</x-app-layout>