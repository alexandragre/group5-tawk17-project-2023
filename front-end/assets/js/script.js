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

// API ninja cocktail
let options = {
  method: 'GET',
  headers: { 'x-api-key': 'myKey' }
}

let url = 'https://api.api-ninjas.com/v1/cocktail?name='


fetch(url,options)
      .then(res => res.json()) // parse response as JSON
      .then(data => {
        console.log(data)
      })
      .catch(err => {
          console.log(`error ${err}`)
      });

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