<script src="https://cdn.tailwindcss.com"></script>
<center>

<form  action="?p=dashboard&a=add" id="form-1" class="w-3/4 max-md:w-3/4" method="post" enctype="multipart/form-data" class="border p-6" id="form-1">
                        <div class="form-fieldset">
                            <div class="form-group">
                                <input type="file" name="productPic[]" id="image" class="form-control block w-full text-sm text-sky-700
          file:mr-4 file:py-2 file:px-4
          file:rounded-full file:border-0
          file:text-sm file:font-semibold
          file:bg-gray-100 file:text-black
          hover:file:bg-gray-100" placeholder="image">
                            </div>
                            <div class="form-group">
                                <input type="text" name="productName[]" class="form-control block px-2 border w-full text-sm text-sky-700 h-10 rounded-sm my-4 px-2" placeholder="prodact Name">
                            </div>

                            <div class="form-group">
                                <input type="number" name="productPrice[]" class="form-control block px-2 border w-full text-sm text-sky-700 h-10 rounded-sm my-4 px-2" placeholder="prix">
                            </div>
                        </div>
                        <div class="form-group2 flex justify-between">
                            <button type="button" class="add-more btn btn-secondary w-1/4 bg-teal-200 border border-teal-500 rounded-xl font-bold text-teal-800 h-8 cursor-pointer hover:bg-teal-100 transition easy-linear">Add More</button>
                            <input type="submit" class="btn btn-primary w-1/4 bg-black border border-black rounded-xl font-bold text-white hover:text-black h-8 cursor-pointer hover:bg-gray-300 transition easy-linear" name="submit" value="Valide">
                            
                        </div>
                    </form>
</center>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Clone the first form fieldset and add a button to remove it
    var formFieldset = document.querySelector(".form-fieldset").cloneNode(true);
    var removeBtn = document.createElement("button");
    removeBtn.classList.add("remove-fieldset", "btn", "w-fit" ,"bg-red-400","rounded-lg","px-4","text-white","font-bold");
    removeBtn.innerHTML = "Remove";
    formFieldset.appendChild(removeBtn);

    // Add click event listener to the "Add More" button
    var addMoreBtn = document.querySelector(".add-more");
    addMoreBtn.addEventListener("click", function() {
      // Append the cloned form fieldset to the form
      var form = document.querySelector(".form-fieldset");
      form.appendChild(formFieldset.cloneNode(true));
    });

    // Add click event listener to the "Remove" buttons
    document.addEventListener("click", function(event) {
        if (event.target.classList.contains("remove-fieldset")) {
            // Remove the parent fieldset when the "Remove" button is clicked
            event.target.parentNode.remove();
        }
    });
});
</script>