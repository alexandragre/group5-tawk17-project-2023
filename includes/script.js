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
  }


// get recipes

var name = 'bloody mary'
$.ajax({
    method: 'GET',
    url: 'https://api.api-ninjas.com/v1/cocktail?name=' + name,
    headers: { 'X-Api-Key': '87MxnoOzaA0RPWwOYcQafg==KAJAUhKMdk6H6vy4'},
    contentType: 'application/json',
    success: function(result) {
        console.log(result);
    },
    error: function ajaxError(jqXHR) {
        console.error('Error: ', jqXHR.responseText);
    }
});