// validate form - fix 
function validateForm() {
    var title = document.forms["AddForm"]["title"].value;
    var description = document.forms["AddForm"]["description"].value;
    if (title == "") {
      alert("Title must be filled out");
      return false;
    }
    if (description == "") {
      alert("Description must be filled out");
      return false;
    }
    if (ingredients == "") {
      alert("Ingredients must be filled out");
      return false;
    }
    if (instructions == "") {
      alert("Instructions must be filled out");
      return false;
    }
    if (image_url == "") {
      alert("Image must be chosen");
      return false;
    }
  }
