/**
 * search.js
 *
 * Search field for the website
 *
 */

var button = document.getElementById("search-icon");
var search=document.getElementById("search-nav");

button.addEventListener("click", function(){
  if (search.style.display =='none') {
      search.style.display = 'block';
  } else {
    search.style.display = 'none';
  }
}, false);
