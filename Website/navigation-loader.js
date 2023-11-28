function includeHTML()
{
    let files = document.getElementsByTagName("*");

    for (let i = 0; i < files.length; ++i)
    {
        let element = files[i];

        let current_file = element.getAttribute("include-html");

        if (current_file)
        {
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() 
            {
                if (this.readyState == 4)
                {
                    if (this.status == 200) {element.innerHTML = this.responseText;}
                    if (this.status == 404) {element.innerHTML = "Page not found.";}
                    element.removeAttribute("include-html");
                    includeHTML();
                }
            }
            xhttp.open("GET", current_file, true);
            xhttp.send();
            return;
        }
    }
}