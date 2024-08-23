<x-app-layout>

    <form action="{{ route('employee.store') }}" method="post">
        @csrf
        <div class="max-w-sm mx-auto">
            <!-- Employee Name Field -->
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Employee
                    Name</label>
                <input type="text" id="employee_name" name="employee_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Enter the employee name" required />
            </div>

            <!-- Team Dropdown Field -->
            <div class="mb-5">
                <label for="team_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Select
                    Team</label>
                <select id="team_id" name="team_id"
                    class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-black-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
                    <option value="" disabled selected>Select a team</option>
                    @foreach ($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->team_name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Create
            </button>
        </div>
    </form>

</x-app-layout>
