function showViewportSize(){let e=window.innerWidth+"x"+window.innerHeight;document.getElementById("resolution").innerHTML=e,window.addEventListener("resize",(function(){let e=window.innerWidth+"x"+window.innerHeight;document.getElementById("resolution").innerHTML=e}))}document.addEventListener("DOMContentLoaded",showViewportSize,!1);