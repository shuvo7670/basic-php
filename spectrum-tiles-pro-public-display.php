<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://https://profiles.wordpress.org/webmvw/
 * @since      1.0.0
 *
 * @package    Spectrum_Tiles_Pro
 * @subpackage Spectrum_Tiles_Pro/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->


<div class="spectrum_tiles_pro_section">
	<h2>Enter Your Square Feet</h2>
	<span>min. 72 OR 1 sq. ft.</span>
	<p id="openModalBtn">Square foot calculator<p>
	<div class="recommends">* Reallyfastfloor Recommends Adding 5% For Waste.</div>
</div>



<!-- add to cart model -->
<div id="myAddToCartModel" class="addToCartModel">
	<div class="addToCartModelContent">
		<div class="model_header">
			<h2>You Just Added 1 item</h2>
	  		<span id="closeAddToCartModelBtn" class="close">&times;</span>
		</div>
		<div class="model_data">
			<p>Product added to cart successfully!</p>
			<a class="btn" href="<?php echo site_url();?>/cart">Go to the Cart Page</a>
		</div>
	</div>
</div>





<!-- The Modal -->
  <div id="myModal" class="modal">
    <div class="modal-content">
	    <div class="model_header">
	  		<h2>Square Foot Calculator</h2>
	  		<span id="closeModalBtn" class="close">&times;</span>
	  	</div>
	  	<div class="model_data">
	  		<table class="model_spectrum_dataTable" id="spectrum_dataTable" style="border:0px !important;">
	  			<tr>
	  				<th width="30%">&nbsp;</th>
	  				<th width="30%" colspan="2"><h4>Width</h4></th>
	  				<th width="10%">&nbsp;</th>
	  				<th width="30%" colspan="2"><h4>Length</h4></th>
	  			</tr>
	  			<tr>
	  				<td>&nbsp;</td>
	  				<td><b>Feet</b></td>
	  				<td><b>Inches</b></td>
	  				<td>&nbsp;</td>
	  				<td><b>Feet</b></td>
	  				<td><b>Inches</b></td>
	  			</tr>
	  			<tr>
	  				<td>Room 1</td>
	  				<td><input type="text" value="0" class="feet_width"></td>
	  				<td><input type="text" value="0" max="11" class="inches_width"></td>
	  				<td>x</td>
	  				<td><input type="text" value="0" class="feet_length"></td>
	  				<td><input type="text" value="0" max="11" class="inches_length"></td>
	  			</tr>
	  			<tr>
	  				<td>Room 2</td>
	  				<td><input type="text" value="0" class="feet_width"></td>
	  				<td><input type="text" value="0" max="11" class="inches_width"></td>
	  				<td>x</td>
	  				<td><input type="text" value="0" class="feet_length"></td>
	  				<td><input type="text" value="0" max="11" class="inches_length"></td>
	  			</tr>
	  			<tr>
	  				<td>Room 3</td>
	  				<td><input type="text" value="0" class="feet_width"></td>
	  				<td><input type="text" value="0" max="11" class="inches_width"></td>
	  				<td>x</td>
	  				<td><input type="text" value="0" class="feet_length"></td>
	  				<td><input type="text" value="0" max="11" class="inches_length"></td>
	  			</tr>
	  			<tr>
	  				<td>Room 4</td>
	  				<td><input type="text" value="0" class="feet_width"></td>
	  				<td><input type="text" value="0" max="11" class="inches_width"></td>
	  				<td>x</td>
	  				<td><input type="text" value="0" class="feet_length"></td>
	  				<td><input type="text" value="0" max="11" class="inches_length"></td>
	  			</tr>
	  			<tr>
	  				<td>Waste Percentage</td>
	  				<td><input type="text" value="5" class="waste_percentage"></td>
	  				<td colspan="4" style="text-align: left;">%</td>
	  			</tr>
	  			<tr>
	  				<td></td>
	  				<td colspan="5" style="text-align: left;">
	  					<button class="btn" onclick="spectrum_tiles_calculation(event)" class="spectrum_tiles_calculate">Calculate</button>
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>Subtotal</td>
	  				<td style="text-align: left;" colspan="5"><span class="spectrum_tiles_subtotal">0</span> sq ft</td>
	  			</tr>
	  			<tr>
	  				<td>Waste Percentage</td>
	  				<td style="text-align: left;" colspan="5"><span class="spectrum_tiles_waste_percentage">0</span> sq ft</td>
	  			</tr>
	  			<tr>
	  				<td>Total</td>
	  				<td style="text-align: left;" colspan="5"><span class="spectrum_tiles_total" id="spectrum_tiles_total">0</span> sq ft</td>
	  			</tr>
	  			<tr>
	  				<td></td>
	  				<td colspan="5" style="text-align: left;">
	  					<button class="btn"  onclick="spectrum_tiles_update_product_page(event)" >Update Product Page</button>
	  				</td>
	  			</tr>
	  		</table>
	  	</div>
    </div>
  </div>


<!-- <div id="detail_calculation">
	<div> <span>Box : </span> <span id="spectrum_tiles_total_box">1</span> </div>
	<div> <span>Total Sq. Ft. :  </span> <span id="spectrum_total_sq_ft">1.00</span> sq. ft. </div>
	<div>
		<span class="saving-text">
			<span class="stxt-hd pr10">Savings : </span>
			<span class="stxt-price" id="spectrum_savings">$1.05</span>
		</span>
	</div>
	<div class="squarefeet-dtl-main">
		<div class="per-price"><span>Price : </span> $<span id="spectrum_base_price">1.65</span> sq. ft. </div>
		<div class="squarefeet-price">
			<span class="new-price"> <span>Total : </span> $<strong id="spectrum_total_price_id" class="errormsg">1.65</strong><br></span> 
		</div>																	
	</div>
</div> -->


<div id="detail_calculation">
	<div> <span>Box : </span> <input name="spectrum_tiles_total_box" id="spectrum_tiles_total_box" value="1" /> </div>
	<div> <span>Total Sq. Ft. :  </span> <input name="spectrum_total_sq_ft" id="spectrum_total_sq_ft" value="1.00" /> sq. ft. </div>
	<div>
		<span class="saving-text">
			<span class="stxt-hd pr10">Savings : </span>
			<span class="stxt-price" id="spectrum_savings">$1.05</span>
		</span>
	</div>
	<div class="squarefeet-dtl-main">
		<div class="per-price"><span>Price : </span> $<span id="spectrum_base_price">1.65</span> sq. ft. </div>
		<div class="squarefeet-price">
			<span class="new-price"> <span>Total : </span> $<input name="spectrum_total_price_id" id="spectrum_total_price_id" class="errormsg" value="1.65" /><br></span> 
		</div>																	
	</div>
</div>


<script type="text/javascript">
// Get modal, button, and close button elements
const modal = document.getElementById("myModal");
const openModalBtn = document.getElementById("openModalBtn");
const closeModalBtn = document.getElementById("closeModalBtn");

// When the user clicks the button, open the modal
openModalBtn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks the close button, close the modal
closeModalBtn.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



/* ============== add to cart model ===================== */
const addToCartModal = document.getElementById("myAddToCartModel");
const closeAddToCartModalBtn = document.getElementById("closeAddToCartModelBtn");

// When the user clicks the close button, close the modal
closeAddToCartModalBtn.onclick = function() {
  addToCartModal.style.display = "none";
}

// When the user clicks anywhere outside the modal, close it
window.onclick = function(event) {
  if (event.target == addToCartModal) {
    addToCartModal.style.display = "none";
  }
}







// Change the product quantity input type to tel
document.querySelector('input[name="quantity"]').type = "tel";


// detail_calculation default base price and final price on single product page
base_price = parseFloat(document.querySelector('.woocommerce-Price-amount').textContent);

document.querySelector("#spectrum_base_price").textContent = `${base_price.toFixed(2)}`;

document.querySelector('input[id="spectrum_total_price_id"]').value = `${base_price.toFixed(2)}`;



// product quantity input field onkeyup
document.querySelector('input[name="quantity"]').addEventListener('keyup', function() {

	let base_qty = 72
	let total_qty = Math.floor(document.querySelector('input[name="quantity"]').value);

	if(total_qty > base_qty){
		let box;
		let total_sq_ft;
		let base_price;
		let final_price;

		if((total_qty % base_qty) > 0){
			box = Math.floor(total_qty/base_qty)+1;
		}else if((total_qty % base_qty) == 0){
			box = Math.floor(total_qty/base_qty);
		}

		total_sq_ft =	base_qty * box ;
		base_price = parseFloat(document.querySelector('.woocommerce-Price-amount').textContent);
		final_price = base_price * total_sq_ft;

		
		document.querySelector('input[id="spectrum_tiles_total_box"]').value = `${box.toFixed(2)}`;
		document.querySelector('input[id="spectrum_total_sq_ft"]').value = `${total_sq_ft.toFixed(2)}`;
		document.querySelector('input[id="spectrum_total_price_id"]').value = `${final_price.toFixed(2)}`;
	}

});





function spectrum_tiles_calculation(event) {
    event.preventDefault(); // Prevent any default behavior
    
    let rows = document.querySelectorAll(".model_spectrum_dataTable tr"); // Get all table rows
    let totalArea = 0;

    rows.forEach((row, index) => {
        let feetWidthInput = row.querySelector(".feet_width");
        let inchesWidthInput = row.querySelector(".inches_width");
        let feetLengthInput = row.querySelector(".feet_length");
        let inchesLengthInput = row.querySelector(".inches_length");

        // Check if the row contains input fields (to avoid empty rows)
        if (feetWidthInput && inchesWidthInput && feetLengthInput && inchesLengthInput) {
            let feetWidth = parseFloat(feetWidthInput.value) || 0;
            let inchesWidth = parseFloat(inchesWidthInput.value) || 0;
            let feetLength = parseFloat(feetLengthInput.value) || 0;
            let inchesLength = parseFloat(inchesLengthInput.value) || 0;

            // Convert inches to feet and calculate total width and length
            let totalWidth = feetWidth + (inchesWidth / 12);
            let totalLength = feetLength + (inchesLength / 12);

            // Calculate area in square feet
            let area = totalWidth * totalLength;
            totalArea += area; // Add to total area
        }
    });

    // Get waste percentage
    let wasteInput = document.querySelector(".waste_percentage");
    let wastePercentage = parseFloat(wasteInput.value) || 0;
    let wasteAmount = (totalArea * wastePercentage) / 100;
    let finalTotal = totalArea + wasteAmount;

    // Update the values in the table
    document.querySelector(".spectrum_tiles_subtotal").textContent = `${totalArea.toFixed(2)}`;
    document.querySelector(".spectrum_tiles_waste_percentage").textContent = `${wasteAmount.toFixed(2)}`;
    document.querySelector(".spectrum_tiles_total").textContent = `${finalTotal.toFixed(2)}`;

}



// update product page
function spectrum_tiles_update_product_page(event) {
	event.preventDefault(); // Prevent any default behavior

	modal.style.display = "none";

	let base_qty = 72;
	let total_qty = parseFloat(document.getElementById('spectrum_tiles_total').textContent);

	document.querySelector('input[name="quantity"]').value = Math.floor(total_qty);

	if(total_qty > base_qty){
		let box;
		let total_sq_ft;
		let base_price;
		let final_price;

		if((total_qty % base_qty) > 0){
			box = Math.floor(total_qty/base_qty)+1;
		}else if((total_qty % base_qty) == 0){
			box = Math.floor(total_qty/base_qty);
		}

		total_sq_ft =	base_qty * box ;
		base_price = parseFloat(document.querySelector('.woocommerce-Price-amount').textContent);
		final_price = base_price * total_sq_ft;

		document.querySelector('input[id="spectrum_tiles_total_box"]').value = `${box.toFixed(2)}`;
		document.querySelector('input[id="spectrum_total_sq_ft"]').value = `${total_sq_ft.toFixed(2)}`;
		document.querySelector('input[id="spectrum_total_price_id"]').value = `${final_price.toFixed(2)}`;
	}

 }




document.querySelector('.single_add_to_cart_button').addEventListener('click', function(e) {
    e.preventDefault(); // Prevent the default Add to Cart behavior

    let product_id = document.querySelector('input[name="product_id"]').value;
    let box = parseFloat( document.getElementById('spectrum_tiles_total_box').textContent );
    let final_price = parseFloat( document.getElementById('spectrum_total_price_id').textContent );

    let data = {
    	action: 'update_product_page',
    	product_id: product_id,
    	box: box,
    	final_price: final_price
    };

    jQuery.post("<?php echo admin_url('admin-ajax.php') ?>", data, function(response){
    	if(response.success){
    		addToCartModal.style.display = "block";
    		console.log('Product added to cart successfully!');
    	}
    });

});



</script>