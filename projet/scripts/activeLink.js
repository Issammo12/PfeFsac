const pathName=window.location.pathname;
const links=document.querySelectorAll('a');
links.forEach(link=>{
    const linkPathname=new URL(link.href).pathname
    if(pathName===linkPathname){
        link.classList.add('active')
    }
})