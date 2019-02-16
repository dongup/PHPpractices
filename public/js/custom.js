function actived() {
	var i, tablinks;

	tablinks = document.getElementsByClassName("tablinks");
 	for (i = 0; i < tablinks.length; i++) {
   		tablinks[i].classList.remove('active');
  	}
  	
	this.classList.add('active');
}