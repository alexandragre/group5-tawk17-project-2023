  // adjust width on initial load
  window.onload = adjustWidth;
         
  // Select the input field
  var inputField = document.querySelector("#myInput");
  
  // Add an event listener to the input field
  inputField.addEventListener("input", adjustWidth);
  
  // Function to adjust the width of the input field
  function adjustWidth() {
     var value = inputField.value;
     var width = value.length * 8 + 25; // 8px per character
     inputField.style.width = width + "px";
  }