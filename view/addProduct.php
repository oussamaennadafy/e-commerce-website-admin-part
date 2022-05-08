<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Type some info" />
    <meta name="author" content="Type name" />

    <title>Tailwind Ecommerce Kit</title>

	<!-- Tailwind css -->
  <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font awesome 5 -->
    <link href="../view/fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

    <script>
      function open_sidebar() {
        document.getElementById("sidebar").classList.remove("-left-full");
        document.getElementById("backdrop").classList.remove("hidden");
      }
      function hide_sidebar() {
        document.getElementById("sidebar").classList.add("-left-full");
        document.getElementById("backdrop").classList.add("hidden");
      }
    </script>
    <style>
      input[type=number]::-webkit-inner-spin-button, 
      input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none; 
        margin: 0; 
      }
    </style>
  </head>
  <body class="bg-gray-100 text-gray-600">
    <b
      id="backdrop"
      onclick="hide_sidebar()"
      class="fixed hidden md:hidden bg-black opacity-60 top-0 left-0 right-0 bottom-0 z-30"
    ></b>

    <div class="flex min-h-screen">
      <!-- aside -->
      <?php include_once 'view/reusables/aside.php';  ?>
      <!-- aside end -->
      <main class="w-full">
        <header
          class="h-14 z-10 py-3 bg-white shadow-sm border-b border-gray-200"
        >
          <div
            class="container h-full flex items-center justify-between px-6 mx-auto"
          >
            <!-- Mobile hamburger -->
            <button
              onclick="open_sidebar()"
              class="p-1 mr-5 md:hidden focus:outline-none focus:shadow-outline-purple"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                height="28"
                width="28"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  fill="currentColor"
                  d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"
                ></path>
              </svg>
            </button>

            <!-- Search input -->
            <form>
              <div class="relative">
                <input
                  class="appearance-none border border-transparent bg-transparent rounded-md py-1 px-2 focus:outline-none focus:border-gray-400 w-full"
                  type="text"
                  placeholder="Search for "
                  aria-label="Search"
                />
              </div>
            </form>
            <ul class="flex items-center flex-shrink-0 space-x-2">
              <li>
                <button
                  class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-full hover:bg-blue-200"
                  aria-label="Button name"
                >
                  <svg
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                    width="22"
                    height="22"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M4 4h16v12H5.17L4 17.17V4m0-2c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4zm2 10h8v2H6v-2zm0-3h12v2H6V9zm0-3h12v2H6V6z"
                    />
                  </svg>
                </button>
              </li>
              <li>
                <button
                  class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-full hover:bg-blue-200"
                  aria-label="Button name"
                >
                  <svg
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6zM7.58 4.08L6.15 2.65C3.75 4.48 2.17 7.3 2.03 10.5h2c.15-2.65 1.51-4.97 3.55-6.42zm12.39 6.42h2c-.15-3.2-1.73-6.02-4.12-7.85l-1.42 1.43c2.02 1.45 3.39 3.77 3.54 6.42z"
                    ></path>
                  </svg>
                </button>
              </li>
              <li>
                <button
                  class="w-10 h-10 flex items-center justify-center bg-gray-200 border border-transparent rounded-full hover:border-blue-400 overflow-hidden"
                  aria-label="Button name"
                >
                  <img
                    src="../view/images/avatars/avatar.jpg"
                    width="32"
                    height="32"
                    class="w-10 h-10 rounded-full"
                  />
                </button>
              </li>
            </ul>
          </div>
        </header>

        <section class="container max-w-3xl p-6 mx-auto">
          <article
            class="bg-white rounded shadow-sm border border-gray-200 p-4 lg:p-6 my-5"
          >
            <h2 class="mb-3 text-xl md:text-2xl font-semibold text-black">
              Create new item
            </h2>

            <form action='http://localhost/fill-rouge-admin/admin/addProduct' method='post' enctype="multipart/form-data">
              <div class="mb-4">
                <label class="block mb-1"> Name of item </label>
                <input
                  type="text"
                  class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full"
                  placeholder="Type here"
                  name='name'
                  value="<?php if(isset($_POST['name'])) { echo $_POST['name']; } ?>"
                />
              </div>

              <div class="mb-4">
                <label class="block mb-1"> Description </label>
                <textarea
                  rows="4"
                  class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full"
                  placeholder="Type here"
                  name='description'
                ><?php if(isset($_POST['description'])) { echo $_POST['description'];}?></textarea>
              </div>

              <div class="mb-4 grid grid-cols-2">
                <div>
                  <label class="block mb-1"> Image upload </label>
                  <input name="file[]" type="file" class="w-72" placeholder="Type here" multiple />
                </div>
                <div>
                  <label class='block mb-1'>Quantity</label>
                  <input placeholder='Type here' type="number" name="quantity" class='appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full'
                  value="<?php if(isset($_POST['quantity'])) { echo $_POST['quantity']; } ?>"

                  >
                </div>
              </div>

              <div class="mb-4">
                <label class="block mb-1"> Tags input </label>
                <input
                  type="text"
                  class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full"
                  placeholder="Tag, Tag,..."
                  name='tages'
                  value="<?php if(isset($_POST['tages'])) { echo $_POST['tages']; } ?>"
                />
              </div>

              <div class="grid md:grid-cols-2 gap-x-2">
                <div class="mb-4">
                  <label class="block mb-1"> Category </label>
                  <div class="relative">
                    <select
                      class="block appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full"
                      name='category'
                    >
                      <option value='OurSports'>Our sports</option>
                      <option value='mens'>mens</option>
                      <option value='womens'>womens</option>
                      <option value='kids'>kids</option>
                      <option value='accessoires'>accessoires</option>
                    </select>
                    <i class="absolute inset-y-0 right-0 p-2 text-gray-400">
                      <svg
                        width="22"
                        height="22"
                        class="fill-current"
                        viewBox="0 0 20 20"
                      >
                        <path d="M7 10l5 5 5-5H7z"></path>
                      </svg>
                    </i>
                  </div>
                </div>

                <div class="mb-4">
                <label class="block mb-1"> Price </label>
                <div class="flex justify-between">
                  <div>
                    <input
                      type="text"
                      class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-64"
                      placeholder="0.00 USD"
                      name='price'
                      value="<?php if(isset($_POST['price'])) { echo $_POST['price']; } ?>"
                    />
                  </div>
                  <div>
                    <select
                      class="block appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full"
                      placeholder="Select one option"
                    >
                      <option>USD</option>
                      <!-- <option>EUR</option>
                      <option>RUB</option>
                      <option>UZS</option> -->
                    </select>
                  </div>
                </div>
                <!-- flex grid -->
              </div>
                
              </div>
              <!-- grid -->
              
              <div class="mb-4">
                <label class="block mb-1"> sizes </label>
                <div class="relative">
                  <select
                  multiple
                    class="block appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full"
                    name='sizes[]'
                  >
                    <option value='XS'>XS</option>
                    <option value='S'>S</option>
                    <option value='M'>M</option>
                    <option value='LG'>LG</option>
                    <option value='XL'>XL</option>
                    <option value='2XL'>2XL</option>
                    <option value='3XL'>3Xl</option>
                    <option value='4XL'>4Xl</option>
                  </select>
                  <i class="absolute inset-y-0 right-0 p-2 text-gray-400">
                    <svg
                      width="22"
                      height="22"
                      class="fill-current"
                      viewBox="0 0 20 20"
                    >
                      <path d="M7 10l5 5 5-5H7z"></path>
                    </svg>
                  </i>
                </div>
              </div>
              <div class="mb-4">
                <label class="block mb-1"> Colors </label>
                <div class="relative">
                  <select
                    multiple
                    class="block appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full"
                    name='colors[]'
                  >
                    <option value='black'>Black</option>
                    <option value='blue'> Blue</option>
                    <option value='green'> Green</option>
                    <option value='Turquoise'> Turquoise</option>
                    <option value='Chestnut'> Chestnut</option>
                    <option value='Bordeaux'> Bordeaux</option>
                    <option value='Purple'> Purple</option>
                    <option value='Khaki'> Khaki</option>
                    <option value='Gray'> Gray</option>
                    <option value='Ocher'> Ocher</option>
                  </select>
                  <i class="absolute inset-y-0 right-0 p-2 text-gray-400">
                    <svg
                      width="22"
                      height="22"
                      class="fill-current"
                      viewBox="0 0 20 20"
                    >
                      <path d="M7 10l5 5 5-5H7z"></path>
                    </svg>
                  </i>
                </div>
              </div>

<!-- 
              <label class="flex items-center w-max my-4">
                <input checked name="" type="checkbox" class="h-4 w-4" />
                <span class="ml-2 inline-block text-gray-500">
                  Publish item now
                </span>
              </label> -->

              <button
                type="submit"
                name='submit'
                class="my-2 px-4 py-2 text-center inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700"
              >
                Submit item
              </button>

              <a
                href="http://localhost/fill-rouge-admin/admin/index"
                class="px-4 py-2 inline-block text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600"
              >
                Cancel
              </a>
            </form>
          </article>
        </section>
        <!-- container -->
      </main>
    </div>
  </body>
</html>
