<?php require_once './public/includes/nav.php' ?>
        </header>
        <main class="flex">
            <section class="w-1/6 bg-black h-screen">
                <h1 class="pt-20 font-bold text-white text-xl text-center">Dashboard</h1>
                <div class="my-auto h-fit">
                    <a href="?p=dashboard&pd=product" class="text-lg text-white font-medium p-2 mt-14 hover:bg-gray-400 hover:text-white  text-center flex justify-center transition easy-linear max-md:text-sm"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 my-auto">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                      </svg>
                       <span class="max-sm:hidden">Products</span> </a>
                <a href="?p=dashboard&pd=add" class="text-lg text-white font-medium p-2 hover:bg-gray-400 flex justify-center hover:text-white text-center transition easy-linear max-md:text-sm"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 my-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <span class="max-sm:hidden">Add Products</span> </a>
                <p class="text-lg text-white font-medium p-2 flex justify-center hover:bg-gray-400 hover:text-white  text-center transition easy-linear max-md:text-sm"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 my-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                  </svg>
                  <span class="max-sm:hidden">statistique</span></p>
                </div>
            </section>
            <div class="w-full overflow-auto mt-20 h-80vh">
               <?php 
               if(isset($_GET['pd'])){
                $pagesDashboard = ['product','update','add'];
                if(in_array($_GET['pd'],$pagesDashboard)){
                       require_once './View/' . $_GET['pd'] . '.php';
                }else require_once './View/product.php';
               }else require_once './View/product.php';
               ?>   
                <!-- <table class="w-full whitespace-nowrap ">
                <thead>
                    <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 ">
                        <th class="font-normal text-left pl-4">Product</th>
                        <th class="font-normal text-left pl-12">Product Name</th>
                        <th class="font-normal text-left pl-12">Product Price</th>
                        <th class="font-normal text-left pl-20"></th>
                    </tr>
                </thead>
                <tbody class="w-full">
                    
                            <tr class="focus:outline-none h-20 text-sm leading-none text-gray-800  bg-white   hover:bg-gray-100 ay-900  border-b border-t border-gray-100 -700 ">
                                <td class="pl-4 cursor-pointer">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10">
                                            <img class="w-full h-full" src="<?= $value['productPic'] ?>" />
                                        </div>
                                    </div>
                                </td>
                                <td class="pl-12">
                                    <p class="font-medium">aaaaaaaaaa</p>
                                </td>
                                <td class="pl-12">
                                    <p class="font-medium"> <span class="finalPrice"><?= $value['finalPrice'] ?></span> DH</p>
                                </td>
                                <td class="pl-20">
                                    <a href="?p=carte&a=c&id=<?= $value['productId']?>" class="text-indigo-600 hover:bg-indigo-200 p-2 rounded-lg font-medium transition easy-linear">Update</a>
                                    <a href="?p=carte&a=c&id=<?= $value['productId']?>" class="text-red-600 hover:bg-red-200 p-2 rounded-lg font-medium transition easy-linear">Delete</a>
                                </td>
                            </tr>
                </tbody>
            </table> -->
            </div>
            
        </main>
</body>
</html>