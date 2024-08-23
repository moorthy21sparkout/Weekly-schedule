<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Teams Table -->
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4"
                            role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif
                    <div class="mb-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-medium">Teams</h3>
                            <a href="{{ route('team-create') }}"
                                class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600">
                                Add Team
                            </a>
                        </div>
                        <table class="min-w-full bg-white border">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border">Name</th>
                                    <th class="py-2 px-4 border">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teams as $team)
                                    <tr>
                                        <td class="py-2 px-4 border">{{ $team->team_name }}</td>
                                        <td class="py-2 px-4 border">
                                            <a href="{{ route('team-edit', $team->id) }}"
                                                class="text-blue-600 hover:text-blue-900">Edit</a>
                                            <form action="{{ route('team-destroy', $team->id) }}" method="POST"
                                                class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Employees Table -->
                    <div class="mb-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-medium">Employees</h3>
                            <a href="{{route('employee.create')}}"
                                class="px-4 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600">
                                Add Employee
                            </a>
                        </div>
                        <table class="min-w-full bg-white border">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border">Employee Name</th>
                                    <th class="py-2 px-4 border">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td class="py-2 px-4 border">{{ $employee->employee_name }}</td>
                                        <td class="py-2 px-4 border">
                                            <a href="{{route('employee.edit',$employee->id)}}" class="text-blue-600 hover:text-blue-900">Edit</a>
                                            <form action="{{route('employee.destroy',$employee->id)}}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Weeks Table -->
                    <div>
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-medium">Weeks</h3>
                            <a href=""
                                class="px-4 py-2 bg-purple-500 text-white font-semibold rounded-lg shadow-md hover:bg-purple-600">
                                Add Week
                            </a>
                        </div>
                        <table class="min-w-full bg-white border">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border">ID</th>
                                    <th class="py-2 px-4 border">Name</th>
                                    <th class="py-2 px-4 border">From Date</th>
                                    <th class="py-2 px-4 border">To Date</th>
                                    <th class="py-2 px-4 border">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($weeks as $week)
                                    <tr>
                                        <td class="py-2 px-4 border">{{ $week->id }}</td>
                                        <td class="py-2 px-4 border">{{ $week->name }}</td>
                                        <td class="py-2 px-4 border">{{ $week->from_date }}</td>
                                        <td class="py-2 px-4 border">{{ $week->to_date }}</td>
                                        <td class="py-2 px-4 border">
                                            <a href="" class="text-blue-600 hover:text-blue-900">Edit</a>
                                            <form action="" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
