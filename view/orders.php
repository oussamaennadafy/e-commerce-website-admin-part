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

  <div  class="w-full px-4 pt-4">
		<article class="border border-gray-200 bg-white shadow-sm rounded mb-5 p-3 lg:p-5">
			<h3 id='divId' class="text-xl font-semibold mb-5">orders History</h3>
			<?php if(count($all_orders) == null) {?>
				<img class='h-60 rounded-full mx-auto' src='./../../fill-rouge/view/images/not_found.jpg' alt='not found'></img>
				<h1 class='text-center w-full my-7 text-3xl font-semibold'> There is no order yet </h1>
				<?php } ?>
			<?php foreach($all_orders as $order) {
				if(isset($order['size'])) { 
					//semi orders
					$semi_orders = [1]; }  
					else {
					$semi_orders = explode(',',$order['semi_orders']);
					$total_price_of_checkout_order = 0;
				foreach($semi_orders as $semi_order) { 
					$semi_order_details = Product::selectSemiOrder($semi_order);
					$total_price_of_checkout_order += $semi_order_details['total_price'];
				}
					}
				?>
				<!-- item-order 1 -->
				<article class="p-3 lg:p-5 mb-5 bg-white border border-blue-600 rounded-md">
				<header class="lg:flex justify-between mb-4">
					<div class="mb-4 lg:mb-0">
						<p class="font-semibold">
							<span>Order ID: <?php echo $order['id'] ?> </span>  
							<?php if($order['status'] == 'pending') { ?>
							<span class="text-[#964B00]"> • Pending </span>
							<?php } ?>
							<?php if($order['status'] == 'shipped') { ?>
							<span class="text-yellow-500"> • Shipped </span>
							<?php } ?>
							<?php if($order['status'] == 'confirmed') { ?>
							<span class="text-green-500"> • Confirmed </span>
							<?php } ?>
						</p>
						<p class="text-gray-500"><?php echo substr(explode('.',$order['created_at'])[0],0,-3) ?> </p>
					</div>
					<div>
						<form action="http://localhost/fill-rouge-admin/admin/orders" method="post">
							<input type='submit' class="px-3 py-1 inline-block text-sm text-red-500 border border-gray-300 rounded-md hover:text-red-500 hover:border-red-600 cursor-pointer" value='Cancel order'name='cancel_order'/>
							<input value='<?php if(isset($order['size'])) {echo 'my_order';} else {echo 'order_checkout';} ?>' type="hidden" name="type_of_order">
							<input value='<?php echo $order['id']; ?>' type="hidden" name="order_id">
						</form>
					</div>
				</header>
				<div class="grid md:grid-cols-3 gap-2"> 
					<div>
						<p class="text-gray-400 mb-1">Person</p>
						<ul class="text-gray-600">
							<li><?php echo $order['full_name'] ?></li>
							<li>Phone: <?php echo $order['phone'] ?></li>
							<li>Email: <?php echo $order['email'] ?></li>
						</ul>
					</div> 
					<div>
						<p class="text-gray-400 mb-1">Delivery address</p>
						<ul class="text-gray-600">
							<li><?php echo $order['address'] ?></li>
						</ul>
					</div> 
					<div>
						<p class="text-gray-400 mb-1">Payment</p>
						<ul class="text-gray-600">
							<li class="text-green-400">Credit card **** <?php echo substr($order['card_number'], -4); ?></li>
							<li>Shipping fee: $0.00</li>
							<li>Total paid: $<?php if(isset($order['product_id'])) { echo Product::getProductPrice($order['product_id'])['price_item']*$order['quantity']+0.99;}else { echo $total_price_of_checkout_order+0.99; }?></li>
						</ul>
					</div> 
				</div> <!-- grid.// --> 
				
				<hr class="my-4">

				<div class="<?php if(count($semi_orders) != 1){echo 'grid md:grid-cols-2 lg:grid-cols-3 gap-2';} ?>">
					
				<?php foreach($semi_orders as $semi_order) { 
				$semi_order_details = Product::selectSemiOrder($semi_order);
				?>
					<figure class="flex flex-row mb-4">
						<div>
							<a href="http://localhost/fill-rouge/user/details/<?php if(isset($order['size'])){echo $order['product_id']; } else {echo $semi_order_details['product_id']; } ?>" class="block w-20 h-20 rounded border border-gray-200 overflow-hidden">
								<img src="../../../fill-rouge/view/uploads/<?php if(isset($order['size'])) {echo Product::getProductPrice($order['product_id'])['first_img'];} else { echo $semi_order_details['first_img']; }?>" alt="Title">
							</a>
						</div>
						<figcaption  class="ml-3">
							<p><a href="http://localhost/fill-rouge/user/details/<?php if(isset($order['size'])){echo $order['product_id']; } else {echo $semi_order_details['product_id']; } ?>" class="text-gray-600 hover:text-blue-600"><?php if(isset($order['size'])) {echo Product::getProductPrice($order['product_id'])['name_item'];} else { echo $semi_order_details['name_item']; } ?></a></p>
							<p class="mt-1 font-semibold"><?php if(isset($order['size'])) {echo $order['quantity'];}  else { echo $semi_order_details['quantity']; }  ?>x = $<?php if(isset($order['size'])) {echo Product::getProductPrice($order['product_id'])['price_item']*$order['quantity'];}  else { echo $semi_order_details['price_item']; }  ?></p>
						</figcaption>
					</figure>
					<?php } ?>
				</div> <!-- grid.// --> 
			</article>
			<!-- item-order 1 end//-->
		 <?php } ?>

		</article> <!-- card.// -->
    </div>


  </main>
</div>


</body>
</html>