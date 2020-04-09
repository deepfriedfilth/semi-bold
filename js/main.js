var header = document.querySelector('header');

var searchForm = header.querySelector('form');
var searchInput = searchForm.querySelector('input'); 
var searchBtn = searchForm.querySelector('button');

searchBtn.addEventListener('click', function(e) {
	if(searchInput.value != '') {
		searchForm.submit();
	} else {
		e.preventDefault();
		searchInput.classList.toggle('wide-load');
		searchInput.focus();
	}
});