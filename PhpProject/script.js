const numOfCharac = 150;
let contents = document.querySelectorAll(".card-text");

contents.forEach(content => {
    console.log('ceau')
    if(content.textContent.length < numOfCharac) {
        content.nextElementSibling.style.display = 'none';
    } else {
        let displayText = content.textContent.slice(0,numOfCharac);
        let moreText = content.textContent.slice(numOfCharac);
        content.innerHTML = `${displayText} <span class="dots">...</span><span class="hide more">${moreText}</span>`;
    }
});

function readMore(btn) {
    let post = btn.parentElement;
    console.log(post)
     post.querySelector(".dots").classList.toggle("hide");
     post.querySelector(".more").classList.toggle("hide");
     btn.textContent == "Read more" ? btn.textContent='Read less' : btn.textContent="Read more"; 
}