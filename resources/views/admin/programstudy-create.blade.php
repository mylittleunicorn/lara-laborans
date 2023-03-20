@extends('welcome')
@section('content')
<div class="grid md:grid-cols-2 gap-4">
    <div class="static overflow-x-auto shadow-sm p-4">
        <form action="{{ route('programstudy.store') }}" method="POST">
        @csrf
        <div class="text-gray-700 mb-6">
            <label class="block mb-1" for="program_studies_name">Program Study Name</label>
            <input name="program_studies_name" class="w-full h-10 px-3 text-base border-b-2 focus:outline-none focus:border-blue-600" type="text" id="program_studies_name" aria-describedby="passwordHelp"/>
            @error('program_studies_name')
                <span class="text-xs text-red-600" id="program_studies_slug">{{ $message }}</span>
            @enderror
        </div>
        <div class="text-gray-700 mb-6">
            <label class="block mb-1" for="program_studies_slug">Program Study Description</label>
            <input name="program_studies_slug" class="w-full h-10 px-3 text-base border-b-2 focus:outline-none focus:border-blue-600" type="text" id="program_studies_slug" aria-describedby="passwordHelp"/>
            @error('program_studies_slug')
                <span class="text-xs text-red-600" id="program_studies_slug">{{ $message }}</span>
            @enderror
            
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Program Study</button>
        </form>
    </div>
</div>
@endsection