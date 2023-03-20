@extends('welcome')
@section('content')

<div class="block justify-between items-center p-4 mx-4 mt-4 mb-6 bg-white shadow-xl shadow-gray-200 lg:p-5 sm:flex">
    <div class="mb-1 w-full">
        <div class="mb-4">
            {{-- BREADCRUMB --}}
            <nav class="flex mb-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-gray-700 hover:text-gray-900">
                            <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">E-commerce</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2" aria-current="page">Products</span>
                        </div>
                    </li>
                </ol>
            </nav>
            {{-- BREADCRUMB --}}

            
        </div>

        <div class="block items-center sm:flex">
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl">All products</h1>
            <div class="flex items-center w-full sm:justify-end">
                
                <button type="button" data-modal-toggle="add-product-modal" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-gradient-to-br from-teal-500 to-voilet-500 sm:ml-auto shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform">
                    <svg class="mr-2 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Back
                </button>
            </div>
        </div>
    </div>
</div>

<div class="grid md:grid-cols-2 gap-4">
    <div class="static overflow-x-auto shadow-xl p-4 mx-4 mt-4 mb-6">
        <form action="{{ route('lab.store') }}" method="POST">
        @csrf
        <div class="text-gray-700 mb-6">
            <label class="block mb-1" for="program_study_id">Program Study</label>
            <select class="w-full h-10 px-3 text-base border-b-2 focus:outline-none focus:border-teal-600" name="program_study_id" id="">
            @foreach ( $programstudies as $programstudy )
                <option class="h-10 px-3 hover:bg-teal-500" value="{{ $programstudy->id }}">
                    {{ $programstudy->program_study_name }}
                </option>
            @endforeach
            </select>
            @error('program_study_id')
                <span class="text-xs text-red-600" id="program_studies_slug">{{ $message }}</span>
            @enderror
        </div>
        <div class="text-gray-700 mb-6">
            <label class="block mb-1" for="lab_name">Lab Name</label>
            <input name="lab_name" class="w-full h-10 px-3 text-base border-b-2 focus:outline-none focus:border-teal-600" type="text" id="lab_name" aria-describedby="passwordHelp"/>
            @error('lab_name')
                <span class="text-xs text-red-600" id="lab_name">{{ $message }}</span>
            @enderror
            
        </div>
        <div class="text-gray-700 mb-6">
            <label class="block mb-1" for="lab_description">Lab Description</label>
            <input name="lab_description" class="w-full h-10 px-3 text-base border-b-2 focus:outline-none focus:border-teal-600" type="text" id="lab_description" aria-describedby="passwordHelp"/>
            @error('lab_description')
                <span class="text-xs text-red-600" id="lab_description">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="text-white bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800">Add Program Study</button>
        </form>
    </div>
</div>
@endsection