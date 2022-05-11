<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="w-full min-w-full table-fixed">
                    <thead class="bg-white border-b">
                        <tr>
                            <th scope="col" class="w-1/16 text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                <input type="checkbox">
                            </th>
                            <th scope="col" class="w-6/16 text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Name
                            </th>
                            <th scope="col" class="w-6/16 text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Email
                            </th>
                            <th scope="col" class="w-1/16 text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Active
                            </th>
                            <th scope="col" class="w-2/16 text-sm font-medium text-gray-900 px-6 py-4 text-right">
                                <a href="{{ url('/organization/users/create') }}">
                                    <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                        Create User
                                    </button>
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white border-b">
                        @foreach ($orgUsers as $user)
                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    <input type="checkbox">
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $user->name }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $user->email }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Yes
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
