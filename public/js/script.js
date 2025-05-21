const content = document.getElementById("content");
const loadMore = document.getElementById("loadMore");
const container = document.getElementById("picture");

function tambahTinggi() {
    if(content.scrollHeight > content.offsetHeight){
        var currentHeight =
            (parseFloat(window.getComputedStyle(content).height) /
                window.innerHeight) * 100;
        content.style.height = currentHeight + 83 + "vh"; 

        var containerHeight =
            (parseFloat(window.getComputedStyle(container).height) /
                window.innerHeight) * 100; 
        container.style.height = containerHeight + 83 + "vh"; 
    }else{
        alert("Udah Maksimal brow");
    }
}

loadMore.addEventListener("click", tambahTinggi);

