const pathName=window.location.pathname;
const links=document.querySelectorAll('a');
links.forEach(link=>{
    if(link.href.includes(`${pathName}`)){
        link.classList.add('active')
    }
})