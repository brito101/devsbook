(()=>{function e(){if(document.querySelector(".tab-item.active")){let e=document.querySelector(".tab-item.active").getAttribute("data-for");document.querySelectorAll(".tab-body").forEach((function(t){t.getAttribute("data-item")==e?t.style.display="block":t.style.display="none"}))}}document.querySelector(".tab-item")&&(e(),document.querySelectorAll(".tab-item").forEach((function(t){t.addEventListener("click",(function(t){var i;i=t.target.getAttribute("data-for"),document.querySelectorAll(".tab-item").forEach((function(e){e.getAttribute("data-for")==i?e.classList.add("active"):e.classList.remove("active")})),e()}))})));const t=document.querySelector(".feed-new-input-placeholder");t&&t.addEventListener("click",(function(e){e.target.style.display="none",document.querySelector(".feed-new-input").style.display="block",document.querySelector(".feed-new-input").focus(),document.querySelector(".feed-new-input").innerText=""}));const i=document.querySelector(".feed-new-input");function n(){document.querySelectorAll(".feed-item-more-window").forEach((e=>{e.style.display="none"})),document.removeEventListener("click",n)}i&&i.addEventListener("blur",(function(e){""==e.target.innerText.trim()&&(e.target.style.display="none",document.querySelector(".feed-new-input-placeholder").style.display="block")})),document.querySelectorAll(".feed-item-head-btn").forEach((e=>{e.addEventListener("click",(()=>{n(),e.querySelector(".feed-item-more-window").style.display="block",setTimeout((()=>{document.addEventListener("click",n)}),500)}))})),document.querySelector(".like-btn")&&document.querySelectorAll(".like-btn").forEach((e=>{e.addEventListener("click",(()=>{let t=e.closest(".feed-item").getAttribute("data-id"),i=parseInt(e.innerText);!1===e.classList.contains("on")?(e.classList.add("on"),e.innerText=++i):(e.classList.remove("on"),e.innerText=--i),fetch(BASE+"/ajax/like/"+t)}))})),document.querySelector(".fic-item-field")&&document.querySelectorAll(".fic-item-field").forEach((e=>{e.addEventListener("keyup",(async t=>{if(13==t.keyCode){let t=e.closest(".feed-item").getAttribute("data-id"),i=e.value;e.value="";let n=new FormData;n.append("id",t),n.append("txt",i);let c=await fetch(BASE+"/ajax/comment",{method:"POST",body:n}),o=await c.json();if(""==o.error){let t='<div class="fic-item row m-height-10 m-width-20">';t+='<div class="fic-item-photo">',t+='<a href="'+BASE+o.link+'"><img src="'+BASE+o.avatar+'" /></a>',t+="</div>",t+='<div class="fic-item-info">',t+='<a href="'+BASE+o.link+'">'+o.name+"</a>",t+=o.body,t+="</div>",t+="</div>",e.closest(".feed-item").querySelector(".feed-item-comments-area").innerHTML+=t}}}))}))})();