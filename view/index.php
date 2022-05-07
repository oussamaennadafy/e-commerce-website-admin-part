<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Type some info">
  <meta name="author" content="Type name">

  <title>Tailwind Ecommerce Kit</title>

  <!-- Tailwind css -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font awesome 5 -->
  <link href="../view/fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">
  

  <script>
    function open_sidebar(){
      document.getElementById('sidebar').classList.remove('-left-full');
      document.getElementById('backdrop').classList.remove('hidden');
    }
    function hide_sidebar(){
      document.getElementById('sidebar').classList.add('-left-full');
      document.getElementById('backdrop').classList.add('hidden');
    }
  </script>

</head>
<body class="bg-gray-100 text-gray-600">

<b id="backdrop" onclick="hide_sidebar()" class="fixed hidden md:hidden bg-black opacity-60 top-0 left-0 right-0 bottom-0 z-30"></b>

<div class="flex min-h-screen">
  
      <!-- aside -->
      <?php include_once 'view/reusables/aside.php';  ?>
      <!-- aside end -->

  <main class="w-full">
    <header class="h-14 z-10 py-3 bg-white shadow-sm border-b border-gray-200">
      <div class="container h-full flex items-center justify-between px-6 mx-auto">
        
        <!-- Mobile hamburger -->
        <button onclick="open_sidebar()" class="p-1 mr-5  md:hidden focus:outline-none focus:shadow-outline-purple">
          <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" viewBox="0 0 24 24" fill="currentColor">
            <path fill="currentColor" d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
          </svg>
        </button>

        <!-- Search input -->
        <form>
          <div class="relative">
              <input class="appearance-none border border-transparent bg-transparent rounded-md py-1 px-2 focus:outline-none focus:border-gray-400 w-full" type="text" placeholder="Search for " aria-label="Search">
          </div>
        </form>
        <ul class="flex items-center flex-shrink-0 space-x-2">
          <li>
            <button class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-full hover:bg-blue-200" aria-label="Button name">
             <svg  fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path d="M4 4h16v12H5.17L4 17.17V4m0-2c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4zm2 10h8v2H6v-2zm0-3h12v2H6V9zm0-3h12v2H6V6z"/></svg>
            </button>
          </li>
          <li>
            <button class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-full hover:bg-blue-200" aria-label="Button name">
              <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6zM7.58 4.08L6.15 2.65C3.75 4.48 2.17 7.3 2.03 10.5h2c.15-2.65 1.51-4.97 3.55-6.42zm12.39 6.42h2c-.15-3.2-1.73-6.02-4.12-7.85l-1.42 1.43c2.02 1.45 3.39 3.77 3.54 6.42z"></path></svg>
            </button>
          </li>
          <li>
            <button class="w-10 h-10 flex items-center justify-center bg-gray-200 border border-transparent rounded-full hover:border-blue-400 overflow-hidden" aria-label="Button name">
             <img src="../view/images/avatars/avatar.jpg" width="32" height="32" class="w-10 h-10 rounded-full">
            </button>
          </li>
        </ul>
      </div>
    </header>

    <section class="container p-6 mx-auto">
        <article class="relative bg-gray-500 p-4 sm:p-6 rounded overflow-hidden mb-6">
          <div class="" aria-hidden="true">
            <h1 class="text-2xl md:text-3xl text-white font-bold mb-1">Good day, ENSON Inc. 👋</h1>
            <p class="text-white">Here is what’s happening with your projects today:</p></div>
        </article>



        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3  mb-5">
            <article class="bg-white rounded shadow-sm border border-gray-200">
              <div class="p-5">
                  <h2 class="text-lg font-semibold text-black">Sales revenue</h2>
                  <small class="font-bold text-gray-400  uppercase mb-1">JANUARY</small>
                  <div class="flex items-start">
                    <h4 class="text-3xl font-bold mr-2">$12,480</h4>
                    <b class="text-sm font-semibold text-white px-1.5 bg-green-500 rounded-full">+49%</b>
                  </div>
                  <hr class="my-4">
                  <a href="#" class="hover:text-blue-600">Show all reports</a>
              </div>
            </article>
          
            <article class="bg-white rounded shadow-sm border border-gray-200">
                <div class="p-5">
                  <h2 class="text-lg font-semibold text-black">Expenses</h2>
                  <small class="font-bold text-gray-400  uppercase mb-1">JANUARY</small>
                  <div class="flex items-start">
                    <h4 class="text-3xl font-bold mr-2">$892,000</h4>
                    <b class="text-sm font-semibold text-white px-1.5 bg-red-400 rounded-full">+24%</b>
                  </div>
                  <hr class="my-4">
                  <a href="#" class="hover:text-blue-600">Show all reports</a>
              </div>
            </article>

            <article class="bg-white rounded shadow-sm border border-gray-200">
              <div class="p-5">
                  <h2 class="text-lg font-semibold text-black">Purchases</h2>
                  <small class="font-bold text-gray-400  uppercase mb-1">JANUARY</small>
                  <div class="flex items-start">
                    <h4 class="text-3xl font-bold mr-2">$8,790</h4>
                    <b class="text-sm font-semibold text-white px-1.5 bg-green-500 rounded-full">+18%</b>
                  </div>
                  <hr class="my-4">
                  <a href="#" class="hover:text-blue-600">Show all reports</a>
              </div>
            </article>
        </div> <!-- grid.// -->
          
        <article class="bg-white rounded shadow-sm border border-gray-200 mb-5">
          <div class="p-5">
            <header class="flex justify-between">
              <h2 class="text-xl font-semibold text-black">
                Sales analytics
              </h2>
              <div class="grid grid-flow-col gap-3">
                <a class="px-4 py-2 inline-block text-gray-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600" href="#">  Filter  <i class="ml-1 fa fa-filter"></i> 
                </a>
                <select class="border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full">
                  <option selected>This year</option>
                  <option>Last year</option>
                  <option>This month</option>
                </select>
              </div>
            </header>
            <canvas height="100" id="myChart"></canvas>
          </div>
        </article>


    </section> <!-- container -->
  </main>
</div>




<!-- ChartJS files-->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<!-- ChartJS customize-->
<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var chart = new Chart(ctx, {
      // The type of chart we want to create
      type: 'bar',

      // The data for our dataset
      data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          datasets: [
          {
              label: 'Sales',
              backgroundColor: 'rgb(44, 120, 220)',
              borderColor: 'rgb(44, 120, 220)',
              data: [18, 17, 4, 3, 2, 20, 25, 31, 25, 22, 20, 9]
          },
          {
              label: 'Visitors',
              backgroundColor: 'rgb(180, 200, 230)',
              borderColor: 'rgb(180, 200, 230)',
              data: [30, 20, 17, 9, 23, 35, 39, 30, 34, 25, 27, 17]
          } 

          ]
      },

      // Configuration options go here
      options: {}
  });
</script>

</body>
</html>