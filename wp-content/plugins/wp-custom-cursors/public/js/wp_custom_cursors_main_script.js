window.addEventListener("DOMContentLoaded",function(e){window.addEventListener("load",function(e){var t={x:0,y:0},r=document.querySelector("body"),s=document.createElement("div"),o=document.createElement("div"),n=document.createElement("div"),l=document.querySelectorAll("iframe");function a(e,t){Array.prototype.forEach.call(e,function(e){var l="cursor-",a="",c="",i="",d="",u="",p="",m=null,y=null,f=!1;function v(){f=!0,i=r.style.getPropertyValue("--cursor-width"),c=r.style.getPropertyValue("--color"),d=r.style.getPropertyValue("--blending-mode"),u=r.style.getPropertyValue("--default-cursor"),s.classList.add(t.hover_effect),a=s.classList.item(2),s.classList.add(l),p=s.classList.item(1),console.log("removed class: "+a),a!=l&&s.classList.remove(a),p!=t.hover_effect&&s.classList.remove(p),0!=t.cursor_type&&(n.hasChildNodes()?(m=n.removeChild(n.firstChild),n.appendChild(y)):n.appendChild(y)),r.style.setProperty("--cursor-width",t.width+"px"),r.style.setProperty("--color",t.color),r.style.setProperty("--blending-mode",t.blending_mode),r.style.setProperty("--default-cursor",t.default_cursor)}0==t.cursor_type?(l+=t.cursor_shape,18==t.cursor_shape&&(o.innerHTML='<svg viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Blob</title><desc>WP Custom Cursors.</desc><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><path class="fillmeinside" d="M14.8965404,0 C24.3319123,0 33.3750903,16.1924411 28.754397,24.2923631 C24.1337037,32.3922852 5.09134123,31.3965374 1.0386837,24.2923631 C-3.01397383,17.1881889 5.46116844,1.13466707e-15 14.8965404,0 Z" id="blob" fill="#D8D8D8"></path></g></svg>',l="cursor-svg"),e.classList.add("cursor-element-shape")):(l="cursor-img",(y=document.createElement("img")).setAttribute("src",t.cursor_image),e.classList.add("cursor-element-image")),e.addEventListener("mousemove",function(){f||v()}),e.addEventListener("mouseenter",function(){v()}),e.addEventListener("mouseleave",function(){p!=t.hover_effect&&(s.classList.add(p),s.classList.remove(t.hover_effect)),a!=l&&(s.classList.add(a),s.classList.remove(l)),console.log("removed class: "+a),0!=t.cursor_type&&(m?(n.removeChild(y),n.appendChild(m),m=null):n.removeChild(y)),c.length>0&&(r.style.setProperty("--cursor-width",i),r.style.setProperty("--color",c),r.style.setProperty("--blending-mode",d),r.style.setProperty("--default-cursor",u))});var h=e.querySelectorAll('a, button, input[type="checkbox"], input[type="radio"], input[type="button"], input[type="submit"], input[type="file"], select, .rs-waction'),L=e.querySelectorAll('input[type="text"], input[type="email"], input[type="search"], input[type="number"], input[type="password"], input[type="url"], input[type="date"], input[type="range"], textarea');function g(e){s.classList.add(e)}function b(e){s.classList.remove(e)}[...h].forEach(function(e){e.addEventListener("mouseenter",function(){g("link-hover")}),e.addEventListener("mouseleave",function(){b("link-hover")})}),[...L].forEach(function(e){e.addEventListener("mouseenter",function(){g("input-hover")}),e.addEventListener("mouseleave",function(){b("input-hover")})})})}s.classList.add("cursor"),o.classList.add("cursor-el1"),n.classList.add("cursor-el2"),s.appendChild(o),s.appendChild(n),r.appendChild(s),r.addEventListener("mousemove",function(e){var r;t={x:(r=e).clientX,y:r.clientY}}),l.length>0&&[...l].forEach(function(e){e.addEventListener("mouseenter",function(){s.classList.add("iframe-hover")}),e.addEventListener("mouseleave",function(){s.classList.remove("iframe-hover")})}),requestAnimationFrame(function(){!function e(){o.style.transform=`translate(${t.x}px, ${t.y}px)`,n.style.transform=`translate(${t.x}px, ${t.y}px)`,requestAnimationFrame(function(){e()})}()}),[...cursors].forEach(function(e){var t=null;if(1==e.body_activation)t=document.querySelectorAll("body");else switch(e.selector_type){case"tag":t=document.querySelectorAll(e.selector_data);break;case"class":t=document.querySelectorAll("."+e.selector_data);break;case"id":t=document.querySelectorAll("#"+e.selector_data);break;case"attribute":t=document.querySelectorAll("["+e.selector_data+"]")}null!=t&&t.length>0&&a(t,e)}),new MutationObserver(function(e){for(var t of e)"childList"===t.type&&[...cursors].forEach(function(e){var t=null;if(1!=e.body_activation)switch(e.selector_type){case"tag":t=document.querySelectorAll(e.selector_data);break;case"class":t=document.querySelectorAll("."+e.selector_data);break;case"id":t=document.querySelectorAll("#"+e.selector_data);break;case"attribute":t=document.querySelectorAll("["+e.selector_data+"]")}null!=t&&t.length>0&&a(t,e)})}).observe(r,{childList:!0,subtree:!0})})});