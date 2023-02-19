<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    </x-slot>
    
    <div class=" m-9">
    </div>

    <div>
        <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-600 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <span class="text-xl inline-block mr-5 align-middle">
              <i class="fas fa-bell"></i>
            </span>
            <span class="inline-block align-middle mr-8">
            <p>welcome <strong>{{ Auth::user()->name }}  😇</strong>  You are loged in</p>              </span>
            <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
              <span>×</span>
          
            </button>
          </div>
          <script>
            function closeAlert(event){
              let element = event.target;
              while(element.nodeName !== "BUTTON"){
                element = element.parentNode;
              }
              element.parentNode.parentNode.removeChild(element.parentNode);
            }
          </script>
    </div>


<!-- search component -->
<div class='max-w-md mx-auto'>
  <div class="relative flex items-center w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
      <div class="grid place-items-center h-full w-12 text-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
      </div>

      <input
      class="peer h-full w-full outline-none text-sm text-gray-700 pr-2"
      type="text"
      id="search"
      placeholder="Search something.." /> 
  </div>
</div>


<div class=" m-9">
  
</div>

<!--Table display from db---->

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <table class="border-collapse w-full">
        <thead>
            <tr>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">File Type</th>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">IP Address(logs)</th>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Download</th>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Time</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Company name</span>
                    KnobHome
                </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                    102.167.170.37
                </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                    <span class="rounded bg-red-400 py-1 px-3 text-xs font-bold">Download</span>
                  </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                    <a href="#" class="text-blue-400 hover:text-blue-600 underline">7:00 am</a>
                 
                </td>
            </tr>

            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Company name</span>
                    KnobHome
                </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                    102.167.170.37
                </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                    <span class="rounded bg-red-400 py-1 px-3 text-xs font-bold">Download</span>
                  </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                    <a href="#" class="text-blue-400 hover:text-blue-600 underline">7:00pm</a>
                  
                </td>
            </tr>

            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Company name</span>
                    KnobHome
                </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                    102.167.170.37
                </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                    <span class="rounded bg-red-400 py-1 px-3 text-xs font-bold">Download</span>
                  </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                    <a href="#" class="text-blue-400 hover:text-blue-600 underline">7:00pm</a>
              
                </td>
            </tr>

            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Company name</span>
                    KnobHome
                </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                    102.167.170.37
                </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                    <span class="rounded bg-red-400 py-1 px-3 text-xs font-bold">Download</span>
                  </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                    <a href="#" class="text-blue-400 hover:text-blue-600 underline">7:00pm</a>
                    
                </td>
            </tr>

            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Company name</span>
                    Squary
                </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                    102.167.170.37
                </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                    <span class="rounded bg-red-400 py-1 px-3 text-xs font-bold">Download</span>
                </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
               
                    <a href="#" class="text-blue-400 hover:text-blue-600 underline">7:00pm</a>
                </td>
            </tr>
            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Company name</span>
                    ghome
                </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                    102.167.170.37
                </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                    <span class="rounded bg-red-400 py-1 px-3 text-xs font-bold">Download</span>
                </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                    <a href="#" class="text-blue-400 hover:text-blue-600 underline">7:00pm</a>
                   
                </td>
            </tr>
        </tbody>
    </table>
    
</div>

<div class=" m-9">

</div>

<!--footer area---->
<footer class="font-semibold text-sm text-gray-800 dark:text-gray-200 leading-tight">
    <div class="container p-6">
      <div class="grid lg:grid-cols-6 md:grid-cols-3 gap-4">
        <div class="lg:mb-0 mb-6">
          <img
            src="https://telegra.ph/file/a5261813297a007b3c8e0.jpg"
            class="w-full rounded-md shadow-lg"
          />
        </div>
        <div class="lg:mb-0 mb-6">
          <img
            src="https://telegra.ph/file/a5261813297a007b3c8e0.jpg"
            class="w-full rounded-md shadow-lg"
          />
        </div>
        <div class="lg:mb-0 mb-6">
          <img
            src="https://telegra.ph/file/a5261813297a007b3c8e0.jpg"
            class="w-full rounded-md shadow-lg"
          />
        </div>
        <div class="lg:mb-0 mb-6">
          <img
            src="https://telegra.ph/file/a5261813297a007b3c8e0.jpg"
            class="w-full rounded-md shadow-lg"
          />
        </div>
        <div class="lg:mb-0 mb-6">
          <img
            src="https://telegra.ph/file/a5261813297a007b3c8e0.jpg"
            class="w-full rounded-md shadow-lg"
          />
        </div>
        <div class="lg:mb-0 mb-6">
          <img
            src="https://telegra.ph/file/a5261813297a007b3c8e0.jpg"
            class="w-full rounded-md shadow-lg"
          />
        </div>
      </div>
    </div>
  
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        <p id="footer">
            <span id="copyright"></span>
        </p>
         <script>
             const year = new Date().getFullYear();
             const copyright = document.getElementById('copyright');
             copyright.textContent = `Copyright © ${year} Nzoia❤️All Rights Reserved.`;

         </script>
    </div>

  </footer>
  <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
  
</x-app-layout>
