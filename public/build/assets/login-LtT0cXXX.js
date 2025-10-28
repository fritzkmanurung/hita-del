document.addEventListener("DOMContentLoaded",function(){const i=document.querySelector("form"),r=document.getElementById("email"),a=document.getElementById("password");i&&i.addEventListener("submit",function(e){let t=!0;m(),r.value.trim()?u(r.value.trim())||(s(r,"Please enter a valid email address"),t=!1):(s(r,"Email address is required"),t=!1),a.value.trim()||(s(a,"Password is required"),t=!1),t||e.preventDefault()}),r&&r.addEventListener("blur",function(){this.value.trim()&&!u(this.value.trim())?s(this,"Please enter a valid email address"):o(this)}),a&&a.addEventListener("blur",function(){this.value.trim()?o(this):s(this,"Password is required")});const d=document.querySelectorAll(".form-input");d.forEach(e=>{e.addEventListener("focus",function(){this.parentElement.classList.add("focused")}),e.addEventListener("blur",function(){this.parentElement.classList.remove("focused")})});function u(e){return/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(e)}function s(e,t){e.classList.add("error");let n=e.parentElement.querySelector(".error-message");n||(n=document.createElement("div"),n.className="error-message",e.parentElement.appendChild(n)),n.innerHTML=`
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
            ${t}
        `}function o(e){e.classList.remove("error");const t=e.parentElement.querySelector(".error-message");t&&t.remove()}function m(){d.forEach(e=>{o(e)})}const l=document.querySelector(".submit-btn");l&&i&&i.addEventListener("submit",function(){l.disabled=!0,l.innerHTML=`
                <svg class="animate-spin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" stroke-dasharray="32" stroke-dashoffset="32" transform="rotate(0 12 12)">
                        <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 12 12;360 12 12"/>
                        <animate attributeName="stroke-dashoffset" values="32;0" repeatCount="indefinite" dur="1s"/>
                    </circle>
                </svg>
                Signing In...
            `})});
