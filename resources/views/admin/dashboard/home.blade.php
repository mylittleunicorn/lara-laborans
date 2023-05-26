@extends('admin.dashboard.index')
@section('content')

<!-- BARIS KE-1 -->
<div class="m-6 grid grid-cols-1 gap-6 lg:grid-cols-3">


  <!-- card -->
  <div class="report-card border border-gray-200 rounded-sm hover:-translate-y-1 hover:scale-105 hover:shadow-lg">
    <div class="card">
      <div class="card-body flex flex-col p-5">

        <!-- top -->
        <div class="flex flex-row justify-between items-center">
          <div class="h6 text-teal-400"><x-bxl-microsoft class="  w-10 h-10" /></div>
          <span class="rounded-full text-white badge bg-teal-400 text-xs px-2 py-1">
            12%
            <i class="fal fa-chevron-up ml-1"></i>
          </span>
        </div>
        <!-- end top -->

        <!-- bottom -->
        <div class="mt-8">
          <h1 class="h5 num-4 font-extrabold">6571</h1>
          <p>Program Study</p>
        </div>
        <!-- end bottom -->

      </div>
    </div>

  </div>
  <!-- end card -->

  <!-- card -->
  <div class="report-card border border-gray-200 rounded-sm hover:-translate-y-1 hover:scale-105 hover:shadow-lg">
    <div class="card">
      <div class="card-body flex flex-col p-5">

        <!-- top -->
        <div class="flex flex-row justify-between items-center">
          <div class="h6 text-red-400"><x-bxl-dev-to class="  w-10 h-10" /></div>
          <span class="rounded-full text-white badge bg-red-400 text-xs px-2 py-1">
            12%
            <i class="fal fa-chevron-up ml-1"></i>
          </span>
        </div>
        <!-- end top -->

        <!-- bottom -->
        <div class="mt-8">
          <h1 class="h5 num-4 font-extrabold">6571</h1>
          <p>Lab</p>
        </div>
        <!-- end bottom -->

      </div>
    </div>

  </div>
  <!-- end card -->

  <!-- card -->
  <div class="report-card border border-gray-200 rounded-sm hover:-translate-y-1 hover:scale-105 hover:shadow-lg">
    <div class="card">
      <div class="card-body flex flex-col p-5">

        <!-- top -->
        <div class="flex flex-row justify-between items-center">
          <div class="h6 text-yellow-600"><x-bxl-slack class="  w-10 h-10" /></div>
          <span class="rounded-full text-white badge bg-yellow-400 text-xs px-2 py-1">
            12%
            <i class="fal fa-chevron-up ml-1"></i>
          </span>
        </div>
        <!-- end top -->

        <!-- bottom -->
        <div class="mt-8">
          <h1 class="h5 num-4 font-extrabold">6571</h1>
          <p>items</p>
        </div>
        <!-- end bottom -->

      </div>
    </div>

  </div>


</div>

<!-- BARIS KE-2 -->
<div class="mt-6 mx-6 grid grid-cols-1 gap-6 xl:grid-cols-1">

  <!-- update section -->
  <div class="card bg-teal-400 border-teal-400 shadow-md text-white">
    <div class="card-body flex flex-row">

      <!-- image -->
      <div class="img-wrapper w-40 h-40 flex justify-center items-center">
        <img src="./img/happy.svg" alt="img title">
      </div>
      <!-- end image -->

      <!-- info -->
      <div class="py-2 ml-10">
        <h1 class="h6">Good Job, Mohamed!</h1>
        <p class="text-white text-xs">You've finished all of your tasks for this week.</p>

        <ul class="mt-4">
          <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Finish Dashboard Design</li>
          <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Fix Issue #74</li>
          <li class="text-sm font-light"><i class="fad fa-check-double mr-2"></i> Publish version 1.0.6</li>
        </ul>
      </div>
      <!-- end info -->

    </div>
  </div>
  <!-- end update section -->



</div>

<!-- BARIS KE-3 -->
<div class="mt-6 mx-6 grid grid-cols-1 gap-6 xl:grid-cols-1">
  <div class="card border">
    <div class="card-header p-4 border">New Items</div>

    <table class="table-auto w-full text-left">
      <thead>
        <tr>
          <th class="px-4 py-2 border-r"></th>
          <th class="px-4 py-2 border-r">Name</th>
          <th class="px-4 py-2 border-r">Qty</th>
          <th class="px-4 py-2 border-r">Lab</th>
          <th class="px-4 py-2">date</th>
        </tr>
      </thead>
      <tbody class="text-gray-600">

        <tr>
          <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
          <td class="border border-l-0 px-4 py-2">Lightning to USB-C Adapter Lightning.</td>
          <td class="border border-l-0 px-4 py-2">$<span class="num-2">40</span></td>
          <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2">74</span> minutes ago</td>
        </tr>
        <tr>
          <td class="border border-l-0 px-4 py-2 text-center text-yellow-500"><i class="fad fa-circle"></i></td>
          <td class="border border-l-0 px-4 py-2">Apple iPhone 8.</td>
          <td class="border border-l-0 px-4 py-2">$<span class="num-2">30</span></td>
          <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2">18</span> minutes ago</td>
        </tr>
        <tr>
          <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
          <td class="border border-l-0 px-4 py-2">Apple MacBook Pro.</td>
          <td class="border border-l-0 px-4 py-2">$<span class="num-2">15</span></td>
          <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2">66</span> minutes ago</td>
        </tr>
        <tr>
          <td class="border border-l-0 px-4 py-2 text-center text-red-500"><i class="fad fa-circle"></i></td>
          <td class="border border-l-0 px-4 py-2">Samsung Galaxy S9.</td>
          <td class="border border-l-0 px-4 py-2">$<span class="num-2">99</span></td>
          <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2">71</span> minutes ago</td>
        </tr>
        <tr>
          <td class="border border-l-0 px-4 py-2 text-center text-yellow-500"><i class="fad fa-circle"></i></td>
          <td class="border border-l-0 px-4 py-2">Samsung Galaxy S8 256GB.</td>
          <td class="border border-l-0 px-4 py-2">$<span class="num-2">73</span></td>
          <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2">52</span> minutes ago</td>
        </tr>
        <tr>
          <td class="border border-l-0 border-b-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
          <td class="border border-l-0 border-b-0 px-4 py-2">apple watch.</td>
          <td class="border border-l-0 border-b-0 px-4 py-2">$<span class="num-2">19</span></td>
          <td class="border border-l-0 border-b-0 border-r-0 px-4 py-2"><span class="num-2">32</span> minutes ago</td>
        </tr>

      </tbody>
    </table>
  </div>
</div>


@endsection