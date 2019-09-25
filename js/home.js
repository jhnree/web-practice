$(function(){
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i=0; i<dropdown.length; i++){
        dropdown[i].addEventListener("click", function(){
            var dropdownContent = this.nextElementSibling;
            var dropdownContainer = document.getElementsByClassName("dropdown-container");
            
            if(dropdownContent.style.display === "block"){
                dropdownContent.style.display = "none";
            }
            else{
                for (var x=0; x < dropdown.length; x++){
                    dropdownContainer[x].style.display = "none";
                    dropdown[x].classList.remove("btn-active");
                }
                dropdownContent.style.display = "block";
            }
            this.classList.toggle("btn-active");

            let a = $(this).find('.icon i').attr('class');

            if(a=='fas fa-caret-right'){
                $(this).find('.icon i').attr('class', 'fas fa-caret-down');
            } else {
                $(this).find('.icon i').attr('class', 'fas fa-caret-right');
            }
        });
    }




})