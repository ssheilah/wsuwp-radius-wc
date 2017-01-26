    function createLauncherPanel() {
        var div = document.createElement("div");
        div.setAttribute("class", "fakecontent");
        div.classList.add("visible");
        div.appendChild(createLauncherLink(div));

        document.getElementsByTagName("main")[0].appendChild(div);

        return div;
    }

    function createLauncherLink(container) {
        var link = document.createElement("link");

        link.setAttribute("rel", "import");
        link.setAttribute("href", "/playground/fake-content-in-div/");

        link.onload = function () {
            container.appendChild(link.import.querySelector("main"));
        };

        return link;
    }
    
    createLauncherPanel();
