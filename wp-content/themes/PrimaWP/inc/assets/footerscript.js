if(screen.availWidth > 450) {
    dropdownMenus = document.querySelectorAll("li.dropdown-menu");
    dropdownMenus = Array.from( dropdownMenus);

    dropdownMenus.forEach(function (icon) {
        icon.addEventListener("mouseover", handleMouseOver);
        
        icon.addEventListener("mouseleave", handleMouseLeave);
    });

    dropdownIcons = document.querySelectorAll("div.dropdown-icon");
    dropdownIcons = Array.from(dropdownIcons);

    dropdownIcons.forEach( function(icon) {
        icon.removeEventListener("click", handleClick);
    })
}

//for mobile and touch screen devices without hover event.
if(screen.availWidth < 450) { 
    //remove mouseover and mouseleave events on the dropdown icons if they exist
    dropdownMenus = document.querySelectorAll("li.dropdown-menu");
    dropdownMenus = Array.from( dropdownMenus);
    dropdownMenus.forEach( function(dropdownMenu) {
        dropdownMenu.removeEventListener("mouseover", handleMouseOver);
        dropdownMenu.removeEventListener("mouseleave", handleMouseLeave);
    });

    dropdownIcons = document.querySelectorAll("div.dropdown-icon");
    dropdownIcons = Array.from(dropdownIcons);

    dropdownIcons.forEach(function (icon) {
        icon.addEventListener( "click", handleClick )
    });

    menuHamburgerIcon = document.querySelector("div.hamburger_icon");
    menuHamburgerIcon.addEventListener("click", handleHamburgerClick);
}

function handleMouseOver(e) {
    e.stopPropagation();
    e.target.querySelector('div.dropdown').classList.add("open");
}

function handleMouseLeave(e) {
    e.stopPropagation();
    e.target.querySelector('div.dropdown').classList.remove("open");
}

function handleClick(e) {
    e.stopPropagation();
    e.target.nextElementSibling.classList.toggle("open");
}

function handleHamburgerClick(e) { console.log(e.target);
    e.stopPropagation();
    document.querySelector("ul.menu div.wrapper").classList.toggle("open");
}