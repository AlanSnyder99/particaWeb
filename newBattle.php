<?php include 'header.php'  ?>
<section class="text-gray-500 bg-gray-900 body-font relative battleList">
  <div class="container px-5 py-24 mx-auto flex sm:flex-no-wrap flex-wrap">

    <div class="lg:w-full md:w-1/2 flex flex-col md:ml-auto w-full md:py-4 mt-4 md:mt-0">
      
      <div style="display: flex">
      <h2 class="text-white text-lg mb-1 font-medium title-font title">Create New Battle</h2>
      <!--<p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe</p>--> 
      <div class="divBtn">
        <button onclick="location.href='bettleList.php'"  class="publishBtn text-white py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">PUBLISH</button>
            <button  class="draftBtn text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">DRAFT</button>
	  </div>
		</div>
      <input class="bg-gray-800 rounded border border-gray-700 focus:outline-none focus:border-indigo-500 text-base text-white px-4 py-2 mb-4" placeholder="Battle Tittle" type="text">
      <input class="bg-gray-800 rounded border border-gray-700 focus:outline-none focus:border-indigo-500 text-base text-white px-4 py-2 mb-4" placeholder="Samples Link" type="text">
		<input class="bg-gray-800 rounded border border-gray-700 focus:outline-none focus:border-indigo-500 text-base text-white px-4 py-2 mb-4" placeholder="Enter Up To 3 Tags" type="text">
		      <select class="bg-gray-800 rounded border border-gray-700 focus:outline-none focus:border-indigo-500 text-base text-white px-4 py-2 mb-4">
      	<option style="--text-opacity: 1;
    color: rgba(255,255,255,var(--text-opacity));" class="" value="1">Max Votes 1</option>
      	<option value="2">Max Votes 2</option>
      	<option value="3">Max Votes 3</option>
      	<option value="4">Max Votes 4</option>
      </select>
      <textarea class="bg-gray-800 rounded border border-gray-700 focus:outline-none h-32 focus:border-indigo-500 text-base text-white px-4 py-2 mb-4 resize-none" placeholder="Battle Rules"></textarea>
     <!-- <button  class="publishBtn text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">PUBLISH</button>
        <button  class="draftBtn text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">DRAFT</button>-->
      <!--<p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>-->
    </div>
  </div>
</section>
<?php include 'footer.php'  ?>