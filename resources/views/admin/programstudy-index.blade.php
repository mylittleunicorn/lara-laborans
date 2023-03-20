@extends('welcome')
@section('content')
<div class="static overflow-x-auto shadow-sm">
    @if ($message = Session::get('success'))
    <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3 my-8 md:mx-8" role="alert">
        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="w-full flex justify-between md:px-5 py-2">
        <div class="">
            <a href="{{ route('programstudy.create') }}"><button class="text-xs text-white uppercase bg-blue-500 px-4 py-2">+ program Study</button></a>
        </div>
        <div>
            <form action="">
                <input type="text" class="inline text-xs text-white uppercase border-b border-blue-500 px-4 py-2" placeholder="cari .....">
                <input type="submit" value="cari" class="text-xs text-white uppercase bg-blue-500 px-4 py-2">
            </form>
        </div>
    </div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-blue-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-5 py-3">
                    ID
                </th>
                <th scope="col" class="px-5 py-3">
                    PROGRAM STUDY NAME
                </th>
                <th scope="col" class="px-5 py-3">
                    DESCRIPTION
                </th>
                <th scope="col" class="px-5 py-3">
                    <span class="sr-only">ACTION</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($programstudies as $programstudy)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50 dark:hover:bg-blue-600">
                <td class="px-6 py-4">
                    {{ $programstudy->id }}
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $programstudy->program_studies_name }}
                </th>
                <td class="px-6 py-4">
                    {{ $programstudy->program_studies_slug }}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
