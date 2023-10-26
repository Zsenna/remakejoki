// custom.js

// Function to handle the click event on the "Core product range" div
function handleCoreProductRangeClick() {
    // Redirect to the Google website
    alert("Handle Core Product clicked!");
}

// Function to handle the click event on the "Online Shop" div
function handleOnlineShopClick() {
    // Redirect to a different URL for Online Shop
    alert("Online Shop clicked!");
}

// Function to handle the click event on the "All Product Categories" div
function handleAllProductCategoriesClick() {
    // Redirect to a different URL for All Product Categories
    alert("All Products Categories clicked");
}

// Function to handle the click event on the "Southeast Asia Selected Products" div
function handleSoutheastAsiaSelectedProductsClick() {
    // Redirect to a different URL for Southeast Asia Selected Products
    alert("Southeast Asia clicked!");
}

// Function to handle the click event on the "Get in touch" div
function handleGetInTouchClick() {
    alert("Get in touch clicked!");
}

// Function to handle the click event on the "Press portal" div
function handlePressPortalClick() {
    alert("Press portal clicked!");
}

// Function to handle the click event on the "Distributors" div
function handleDistributorsClick() {
    alert("Distributors clicked!");
}

// Function to handle the click event on the "Help and Support" div
function handleHelpAndSupportClick() {
    alert("Help and Support clicked!");
}

// Function to handle the click event on the "Automotive and tier 1 supplier industry" div
function handleAutomotiveAndTierClick() {
    alert("Automotive and tier 1 supplier industry clicked!");
}

// Function to handle the click event on the "Electronics industry" div
function handleElectronicsIndustryClick() {
    alert("Electronics industry clicked!");
}

// Function to handle the click event on the "Food processing and packaging" div
function handleFoodProcessingAndPackagingClick() {
    alert("Food processing and packaging clicked!");
}

// Function to handle the click event on the "Biotech, pharmaceutical, and cosmetics industries" div
function handleBiotechPharmaceuticalCosmeticsClick() {
    alert("Biotech, pharmaceutical, and cosmetics industries clicked!");
}

// Function to handle the click event on the "Chemical industry" div
function handleChemicalIndustryClick() {
    alert("Chemical industry clicked!");
}

// Function to handle the click event on the "Water technology" div
function handleWaterTechnologyClick() {
    alert("Water technology clicked!");
}

// Add event listeners to the respective divs
document.getElementById("coreProductRange").addEventListener("click", handleCoreProductRangeClick);
document.getElementById("online_shop").addEventListener("click", handleOnlineShopClick);
document.getElementById("all_products_categories").addEventListener("click", handleAllProductCategoriesClick);
document.getElementById("southeast_asia_selected_products").addEventListener("click", handleSoutheastAsiaSelectedProductsClick); 

document.getElementById("get_in_touch").addEventListener("click", handleGetInTouchClick); 
document.getElementById("press_portal").addEventListener("click", handlePressPortalClick); 
document.getElementById("distributors").addEventListener("click", handleDistributorsClick); 
document.getElementById("help_n_support").addEventListener("click", handleHelpAndSupportClick);

document.getElementById("automotive_n_tier").addEventListener("click", handleAutomotiveAndTierClick); 
document.getElementById("electronics_industry").addEventListener("click", handleElectronicsIndustryClick); 
document.getElementById("food_n_packaging").addEventListener("click", handleFoodProcessingAndPackagingClick); 
document.getElementById("biotech_n_cosmetics").addEventListener("click", handleBiotechPharmaceuticalCosmeticsClick); 
document.getElementById("chemical_industry").addEventListener("click", handleChemicalIndustryClick); 
document.getElementById("water_technology").addEventListener("click", handleWaterTechnologyClick);
