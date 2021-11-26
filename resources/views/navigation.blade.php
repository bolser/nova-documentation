<router-link tag="h3" :to="{name: 'documentation'}" class="sidebar__link">
  <svg width="22" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#a)" stroke="#CFFFC9"><path d="M.5 15.5V.61h21V15.5H.5Z"/><path d="M11-1.633c1.74 0 3.167 1.439 3.167 3.233S12.74 4.833 11 4.833c-1.74 0-3.167-1.439-3.167-3.233S9.26-1.633 11-1.633ZM4.69 15.5V7.967h12.62V15.5H4.69Z"/><path d="M7.833 15.5v-4.333h6.334V15.5H7.833Z"/></g><defs><clipPath id="a"><path fill="#fff" transform="rotate(-90 8 8)" d="M0 0h16v22H0z"/></clipPath></defs></svg>
  <span class="sidebar__label">
    {{ config('novadocumentation.title') }}
  </span>
</router-link>
