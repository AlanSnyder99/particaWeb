<?php include 'header.php'  ?>


<section class="text-gray-500 bg-gray-900 body-font battleList">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
    	    <p class="headline">Wellcome <span style="color: #6441a5">GURF</span></p>
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-white title">Battles Panel</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base subtitulo">Here are all the opened and closed Battles.</p>
    </div>
    <div class="lg:w-4/4 w-full mx-auto overflow-auto">
      
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead class="thead">
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tl rounded-bl">Battle</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Date</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Entries</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">State</th>
             <th class="w-10 title-font tracking-wider font-medium text-white text-sm bg-gray-800"></th>
            <th class="w-10 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tr rounded-br"></th>
          </tr>
        </thead>
        
        <tbody class="tbody">
          <tr>
            <td class="px-4 py-3">Dabow & Lyny Battle</td>
            <td class="px-4 py-3">14/08/2020</td>
            <td class="px-4 py-3">15</td>
            <td class="px-4 py-3 text-lg text-white">In Progress</td>
            <td class="w-10 text-center">
               <button onclick="location.href='battle.php'" class="login flex ml-auto text-white bg-indigo-300 border-0 px-2 focus:outline-none hover:bg-indigo-400 rounded join">Join</button>
            </td>
                          <td class="w-10 text-center">
               <button onclick="location.href='battle.php'" class=" flex ml-auto text-white bg-indigo-300 border-0 px-2 focus:outline-none hover:bg-indigo-400 rounded stop">Stop</button>
            </td>
          </tr>
          <tr>
            <td class="border-t-2 border-gray-800 px-4 py-3">LLewop & Swrly</td>
            <td class="border-t-2 border-gray-800 px-4 py-3">22/09/2020</td>
            <td class="border-t-2 border-gray-800 px-4 py-3">25</td>
            <td class="border-t-2 border-gray-800 px-4 py-3 text-lg text-white">Finished</td>
            <td class="border-t-2 border-gray-800 w-10 text-center">
                <button onclick="location.href='battle.php'" class="login flex ml-auto text-white bg-indigo-300 border-0 px-2 focus:outline-none hover:bg-indigo-400 rounded join">Join</button>
            </td>
                 <td class="w-10 text-center">
               <button onclick="location.href='battle.php'" class=" flex ml-auto text-white bg-indigo-300 border-0 px-2 focus:outline-none hover:bg-indigo-400 rounded active">Active</button>
            </td>
          </tr>


        </tbody>

      </table>

    </div>
   <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
     <!-- <a style="color: white" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </a>-->
      <button onclick="location.href='newBattle.php'" class="login flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Create New Battle</button>
    </div>
  </div>
</section>

<?php include 'footer.php'  ?>