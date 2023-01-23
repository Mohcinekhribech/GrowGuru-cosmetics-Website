<div class="h-screen">
    <?php require_once './public/includes/nav.php' ?>
          <div class="relative pt-12 h-80 w-full">
            <div class="mx-auto text-4xl font-bold  h-full w-full text-white z-10 absolute">
                <h1 class="text-center mt-36">Catalogue</h1>
            </div>
            <img class="absolute h-screen w-full brightness-50" src="https://cdn.pixabay.com/photo/2018/01/14/00/05/makeup-3081015_1280.jpg" alt="">
            
        </div>
        <div class=" flex h-full w-full text-black z-10 absolute">
            <div class="absolute justify-center flex w-full">
                <input id="search" class="border-2 w-2/4 border-white p-2 h-12 opacity-50 " placeholder="Search" type="text">
            <input id="done" class="border border-white text-white p-2 font-bold " type="button" value="Search">
            </div>
        </div>
</div>


        </header>
        <main class="m-4 my-28">
            <h2 class="text-4xl text-center text-black font-medium">Products</h2>
            <div class="products my-10">
            <?php
                    $post = $control->getProducts();
            foreach ($post as $key => $value) { {
                    ?>
                <div class="bg-gray-50 prod my-10 w-60 h-80 border mx-auto">
                 <div class="w-full h-60">
                 <img class="w-full h-full" src="data:image/jpeg;base64,<?= base64_encode($value['productPic']) ?> " />
                 </div>
                    <h4 class="productName text-lg text-center font-medium"><?=$value['productName']?></h4>
                    <div class="flex mt-2 justify-between mx-4">
                        <p class="text-xl font-medium"><?=$value['productPrice']?>$</p>
                        <button class="text-white font-medium bg-fuchsia-600 px-4 rounded-sm">Buy</button>
                    </div>
                </div>
             <?php }
            }?> 
            </div>
        </main>
        <?php require_once './public/includes/footer.php' ?>
</body>
</html>
<script src="./View/script.js?<?php time() ?>"></script>