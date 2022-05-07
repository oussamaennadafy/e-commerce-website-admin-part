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
<body class="bg-gray-200 text-gray-600">

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
        
        <h1 class="mb-4 text-xl md:text-2xl font-semibold text-black">
          Table information
        </h1>
        
        <!-- scrolling horiz. table -->
        <div class="overflow-x-auto shadow-sm">

        <table class="w-full whitespace-no-wrap">
        <thead>
          <tr class="text-xs font-semibold tracking-wide text-left uppercase bg-gray-200">
            <th class="px-3 py-3" width="400">Client</th>
            <th class="px-3 py-3">Amount</th>
            <th class="px-3 py-3">Status</th>
            <th class="px-3 py-3">Date</th>
            <th class="px-3 py-3 text-right" width="100">Manage</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y">
          
          <tr class="text-gray-700 dark:text-gray-400">
            <td class="px-3 py-3">
              <div class="flex items-center leading-tight">
                <div class="mr-3 hidden md:block flex-shrink-0">
                  <img width="36" height="36" class="object-cover w-10 h-10 rounded-full" src="../view/images/avatars/avatar1.jpg" alt="">
                </div>
                <div>
                  <p class="font-semibold">Hans Anderson</p>
                  <p class="text-sm text-gray-500"> UX Designer </p>
                </div>
              </div>
            </td>
            <td class="px-3 py-3">
              $ 4000.00
            </td>
            <td class="px-3 py-3">
              <span class="px-2 py-1 text-xs font-medium text-green-700 bg-green-100 rounded-full">
                Approved
              </span>
            </td>
            <td class="px-3 py-3">
              6/10/2020
            </td>
            <td class="px-3 py-3 flex justify-end gap-1">
                <a class="px-2 py-1 inline-block text-red-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-red-600" href="#">
                    <i class="fa fa-trash"></i> 
                </a>
                <a class="px-2 py-1 inline-block text-gray-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600" href="#">
                    <i class="fa fa-pen"></i> 
                </a>
                <a class="px-2 py-1 inline-block text-gray-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600" href="#">
                    <i class="fa fa-ellipsis-h"></i> 
                </a>
            </td>
          </tr>

          <tr class="text-gray-700 dark:text-gray-400">
            <td class="px-3 py-3">
              <div class="flex items-center leading-tight">
                <div class="mr-3 hidden md:block flex-shrink-0">
                  <img width="36" height="36" class="object-cover w-10 h-10 rounded-full" src="../view/images/avatars/avatar2.jpg" alt="">
                </div>
                <div>
                  <p class="font-semibold">Alexander Jonathan</p>
                  <p class="text-sm text-gray-500"> Web Developer </p>
                </div>
              </div>
            </td>
            <td class="px-3 py-3">
              $ 789.00
            </td>
            <td class="px-3 py-3">
              <span class="px-2 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded-full">
                Pending
              </span>
            </td>
            <td class="px-3 py-3">
              6/10/2020
            </td>
            <td class="px-3 py-3 flex justify-end gap-1">
                <a class="px-2 py-1 inline-block text-red-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-red-600" href="#">
                    <i class="fa fa-trash"></i> 
                </a>
                <a class="px-2 py-1 inline-block text-gray-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600" href="#">
                    <i class="fa fa-pen"></i> 
                </a>
                <a class="px-2 py-1 inline-block text-gray-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600" href="#">
                    <i class="fa fa-ellipsis-h"></i> 
                </a>
            </td>
          </tr>

          <tr class="text-gray-700 dark:text-gray-400">
            <td class="px-3 py-3">
              <div class="flex items-center leading-tight">
                <div class="mr-3 hidden md:block flex-shrink-0">
                  <img width="36" height="36" class="object-cover w-10 h-10 rounded-full" src="../view/images/avatars/avatar3.jpg" alt="">
                </div>
                <div>
                  <p class="font-semibold">Alex Johnathan</p>
                  <p class="text-sm text-gray-500"> IT specialist </p>
                </div>
              </div>
            </td>
            <td class="px-3 py-3">
              $ 863.45
            </td>
            <td class="px-3 py-3">
              <span class="px-2 py-1 text-xs font-medium text-green-700 bg-green-100 rounded-full">
                Approved
              </span>
            </td>
            <td class="px-3 py-3">
              23/12/2021
            </td>
            <td class="px-3 py-3 flex justify-end gap-1">
                <a class="px-2 py-1 inline-block text-red-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-red-600" href="#">
                    <i class="fa fa-trash"></i> 
                </a>
                <a class="px-2 py-1 inline-block text-gray-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600" href="#">
                    <i class="fa fa-pen"></i> 
                </a>
                <a class="px-2 py-1 inline-block text-gray-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600" href="#">
                    <i class="fa fa-ellipsis-h"></i> 
                </a>
            </td>
          </tr>

          <tr class="text-gray-700 dark:text-gray-400">
            <td class="px-3 py-3">
              <div class="flex items-center leading-tight">
                <div class="mr-3 hidden md:block flex-shrink-0">
                  <img width="36" height="36" class="object-cover w-10 h-10 rounded-full" src="../view/images/avatars/avatar4.jpg" alt="">
                </div>
                <div>
                  <p class="font-semibold">Hans George Alex</p>
                  <p class="text-sm text-gray-500"> Junior flutter developer </p>
                </div>
              </div>
            </td>
            <td class="px-3 py-3">
              $ 1063.00
            </td>
            <td class="px-3 py-3">
              <span class="px-2 py-1 text-xs font-medium text-green-700 bg-green-100 rounded-full">
                Approved
              </span>
            </td>
            <td class="px-3 py-3">
              6/10/2020
            </td>
            <td class="px-3 py-3 flex justify-end gap-1">
                <a class="px-2 py-1 inline-block text-red-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-red-600" href="#">
                    <i class="fa fa-trash"></i> 
                </a>
                <a class="px-2 py-1 inline-block text-gray-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600" href="#">
                    <i class="fa fa-pen"></i> 
                </a>
                <a class="px-2 py-1 inline-block text-gray-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600" href="#">
                    <i class="fa fa-ellipsis-h"></i> 
                </a>
            </td>
          </tr>

          <tr class="text-gray-700 dark:text-gray-400">
            <td class="px-3 py-3">
              <div class="flex items-center leading-tight">
                <div class="mr-3 hidden md:block flex-shrink-0">
                  <img width="36" height="36" class="object-cover w-10 h-10 rounded-full" src="../view/images/avatars/avatar.jpg" alt="">
                </div>
                <div>
                  <p class="font-semibold">Sarah Curry</p>
                  <p class="text-sm text-gray-500"> 10x Developer </p>
                </div>
              </div>
            </td>
            <td class="px-3 py-3">
              $ 92.50
            </td>
            <td class="px-3 py-3">
              <span class="px-2 py-1 text-xs font-medium text-red-700 bg-red-100 rounded-full">
                Denied
              </span>
            </td>
            <td class="px-3 py-3">
              8/12/2022
            </td>
            <td class="px-3 py-3 flex justify-end gap-1">
                <a class="px-2 py-1 inline-block text-red-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-red-600" href="#">
                    <i class="fa fa-trash"></i> 
                </a>
                <a class="px-2 py-1 inline-block text-gray-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600" href="#">
                    <i class="fa fa-pen"></i> 
                </a>
                <a class="px-2 py-1 inline-block text-gray-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600" href="#">
                    <i class="fa fa-ellipsis-h"></i> 
                </a>
            </td>
          </tr>

          <tr class="text-gray-700 dark:text-gray-400">
            <td class="px-3 py-3">
              <div class="flex items-center leading-tight">
                <div class="mr-3 hidden md:block flex-shrink-0">
                  <img width="36" height="36" class="object-cover w-10 h-10 rounded-full" src="../view/images/avatars/avatar1.jpg" alt="">
                </div>
                <div>
                  <p class="font-semibold">Hans Burger</p>
                  <p class="text-sm text-gray-500"> 10x Developer </p>
                </div>
              </div>
            </td>
            <td class="px-3 py-3">
              $ 863.45
            </td>
            <td class="px-3 py-3">
              <span class="px-2 py-1 text-xs font-medium text-yellow-700 bg-yellow-100 rounded-full">
                Waiting
              </span>
            </td>
            <td class="px-3 py-3">
              6/10/2020
            </td>
            <td class="px-3 py-3 flex justify-end gap-1">
                <a class="px-2 py-1 inline-block text-red-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-red-600" href="#">
                    <i class="fa fa-trash"></i> 
                </a>
                <a class="px-2 py-1 inline-block text-gray-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600" href="#">
                    <i class="fa fa-pen"></i> 
                </a>
                <a class="px-2 py-1 inline-block text-gray-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600" href="#">
                    <i class="fa fa-ellipsis-h"></i> 
                </a>
            </td>
          </tr>
          

          <tr class="text-gray-700 dark:text-gray-400">
            <td class="px-3 py-3">
              <div class="flex items-center leading-tight">
                <div class="mr-3 hidden md:block flex-shrink-0">
                  <img width="36" height="36" class="object-cover w-10 h-10 rounded-full" src="../view/images/avatars/avatar2.jpg" alt="">
                </div>
                <div>
                  <p class="font-semibold">Mike Johnatan</p>
                  <p class="text-sm text-gray-500"> Web Developer </p>
                </div>
              </div>
            </td>
            <td class="px-3 py-3">
              $ 863.45
            </td>
            <td class="px-3 py-3">
              <span class="px-2 py-1 text-xs font-medium text-green-700 bg-green-100 rounded-full">
                Approved
              </span>
            </td>
            <td class="px-3 py-3">
              6/10/2020
            </td>
            <td class="px-3 py-3 flex justify-end gap-1">
                <a class="px-2 py-1 inline-block text-red-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-red-600" href="#">
                    <i class="fa fa-trash"></i> 
                </a>
                <a class="px-2 py-1 inline-block text-gray-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600" href="#">
                    <i class="fa fa-pen"></i> 
                </a>
                <a class="px-2 py-1 inline-block text-gray-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600" href="#">
                    <i class="fa fa-ellipsis-h"></i> 
                </a>
            </td>
          </tr>

        </tbody>
      </table>
      
      </div>
      <!-- scrolling horiz. table -->

    </section> <!-- container -->
  </main>
</div>

</body>
</html>