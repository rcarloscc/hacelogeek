@extends('layouts.default')
    <style>/* ! tailwindcss v3.4.5 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}[type='text'],input:where(:not([type])),[type='email'],[type='url'],[type='password'],[type='number'],[type='date'],[type='datetime-local'],[type='month'],[type='search'],[type='tel'],[type='time'],[type='week'],[multiple],textarea,select{-webkit-appearance:none;appearance:none;background-color:#fff;border-color:#6b7280;border-width:1px;border-radius:0px;padding-top:0.5rem;padding-right:0.75rem;padding-bottom:0.5rem;padding-left:0.75rem;font-size:1rem;line-height:1.5rem;--tw-shadow:0 0 #0000;}[type='text']:focus, input:where(:not([type])):focus, [type='email']:focus, [type='url']:focus, [type='password']:focus, [type='number']:focus, [type='date']:focus, [type='datetime-local']:focus, [type='month']:focus, [type='search']:focus, [type='tel']:focus, [type='time']:focus, [type='week']:focus, [multiple]:focus, textarea:focus, select:focus{outline:2px solid transparent;outline-offset:2px;--tw-ring-inset:var(--tw-empty,/*!*/ /*!*/);--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:#2563eb;--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);border-color:#2563eb}input::placeholder,textarea::placeholder{color:#6b7280;opacity:1}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-date-and-time-value{min-height:1.5em;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit,::-webkit-datetime-edit-year-field,::-webkit-datetime-edit-month-field,::-webkit-datetime-edit-day-field,::-webkit-datetime-edit-hour-field,::-webkit-datetime-edit-minute-field,::-webkit-datetime-edit-second-field,::-webkit-datetime-edit-millisecond-field,::-webkit-datetime-edit-meridiem-field{padding-top:0;padding-bottom:0}select{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");background-position:right 0.5rem center;background-repeat:no-repeat;background-size:1.5em 1.5em;padding-right:2.5rem;print-color-adjust:exact}[multiple],[size]:where(select:not([size="1"])){background-image:initial;background-position:initial;background-repeat:unset;background-size:initial;padding-right:0.75rem;print-color-adjust:unset}[type='checkbox'],[type='radio']{-webkit-appearance:none;appearance:none;padding:0;print-color-adjust:exact;display:inline-block;vertical-align:middle;background-origin:border-box;-webkit-user-select:none;user-select:none;flex-shrink:0;height:1rem;width:1rem;color:#2563eb;background-color:#fff;border-color:#6b7280;border-width:1px;--tw-shadow:0 0 #0000}[type='checkbox']{border-radius:0px}[type='radio']{border-radius:100%}[type='checkbox']:focus,[type='radio']:focus{outline:2px solid transparent;outline-offset:2px;--tw-ring-inset:var(--tw-empty,/*!*/ /*!*/);--tw-ring-offset-width:2px;--tw-ring-offset-color:#fff;--tw-ring-color:#2563eb;--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)}[type='checkbox']:checked,[type='radio']:checked{border-color:transparent;background-color:currentColor;background-size:100% 100%;background-position:center;background-repeat:no-repeat}[type='checkbox']:checked{background-image:url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e");}@media (forced-colors: active) {[type='checkbox']:checked{-webkit-appearance:auto;appearance:auto}}[type='radio']:checked{background-image:url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");}@media (forced-colors: active) {[type='radio']:checked{-webkit-appearance:auto;appearance:auto}}[type='checkbox']:checked:hover,[type='checkbox']:checked:focus,[type='radio']:checked:hover,[type='radio']:checked:focus{border-color:transparent;background-color:currentColor}[type='checkbox']:indeterminate{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");border-color:transparent;background-color:currentColor;background-size:100% 100%;background-position:center;background-repeat:no-repeat;}@media (forced-colors: active) {[type='checkbox']:indeterminate{-webkit-appearance:auto;appearance:auto}}[type='checkbox']:indeterminate:hover,[type='checkbox']:indeterminate:focus{border-color:transparent;background-color:currentColor}[type='file']{background:unset;border-color:inherit;border-width:0;border-radius:0;padding:0;font-size:unset;line-height:inherit}[type='file']:focus{outline:1px solid ButtonText;outline:1px auto -webkit-focus-ring-color}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }.fixed{position:fixed}.absolute{position:absolute}.relative{position:relative}.left-0{left:0px}.top-0{top:0px}.bottom-0{bottom:0px}.right-0{right:0px}.left-1\/2{left:50%}.z-50{z-index:50}.z-20{z-index:20}.-mx-2{margin-left:-0.5rem;margin-right:-0.5rem}.mx-auto{margin-left:auto;margin-right:auto}.-ml-8{margin-left:-2rem}.mt-5{margin-top:3.25rem}.mb-16{margin-bottom:4rem}.mb-3{margin-bottom:0.75rem}.mb-4{margin-bottom:1rem}.mb-6{margin-bottom:1.5rem}.mb-8{margin-bottom:2rem}.mb-2{margin-bottom:0.5rem}.ml-1{margin-left:0.25rem}.box-content{box-sizing:content-box}.block{display:block}.inline-block{display:inline-block}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-1{height:0.25rem}.h-auto{height:auto}.h-full{height:100%}.h-10{height:2.5rem}.h-12{height:3rem}.h-4{height:1rem}.h-6{height:1.5rem}.min-h-screen{min-height:100vh}.w-32{width:8rem}.w-64{width:16rem}.w-full{width:100%}.w-10{width:2.5rem}.w-4{width:1rem}.w-auto{width:auto}.w-1\/2{width:50%}.w-6{width:1.5rem}.max-w-7xl{max-width:80rem}.max-w-sm{max-width:24rem}.-translate-y-full{--tw-translate-y:-100%;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.translate-y-0{--tw-translate-y:0px;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.transform{transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-pointer{cursor:pointer}.flex-col{flex-direction:column}.flex-wrap{flex-wrap:wrap}.items-start{align-items:flex-start}.items-center{align-items:center}.items-baseline{align-items:baseline}.items-stretch{align-items:stretch}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-x-8{column-gap:2rem}.gap-y-8{row-gap:2rem}.space-x-2 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(0.5rem * var(--tw-space-x-reverse));margin-left:calc(0.5rem * calc(1 - var(--tw-space-x-reverse)))}.space-y-4 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(1rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(1rem * var(--tw-space-y-reverse))}.overflow-hidden{overflow:hidden}.rounded-md{border-radius:0.375rem}.rounded{border-radius:0.25rem}.rounded-lg{border-radius:0.5rem}.border{border-width:1px}.border-2{border-width:2px}.border-t{border-top-width:1px}.border-gray-100{--tw-border-opacity:1;border-color:rgb(243 244 246 / var(--tw-border-opacity))}.border-gray-800{--tw-border-opacity:1;border-color:rgb(31 41 55 / var(--tw-border-opacity))}.border-gray-200{--tw-border-opacity:1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-gray-300{--tw-border-opacity:1;border-color:rgb(209 213 219 / var(--tw-border-opacity))}.border-indigo-100{--tw-border-opacity:1;border-color:rgb(224 231 255 / var(--tw-border-opacity))}.bg-blue-500{--tw-bg-opacity:1;background-color:rgb(59 130 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-50{--tw-bg-opacity:1;background-color:rgb(249 250 251 / var(--tw-bg-opacity))}.bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.bg-indigo-600{--tw-bg-opacity:1;background-color:rgb(79 70 229 / var(--tw-bg-opacity))}.bg-none{background-image:none}.bg-gradient-to-br{background-image:linear-gradient(to bottom right, var(--tw-gradient-stops))}.from-indigo-600{--tw-gradient-from:#fde047 var(--tw-gradient-from-position);--tw-gradient-to:rgb(79 70 229 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.to-indigo-700{--tw-gradient-to:#fde047 var(--tw-gradient-to-position)}.fill-current{fill:currentColor}.p-8{padding:2rem}.p-5{padding:1.25rem}.px-10{padding-left:2.5rem;padding-right:2.5rem}.px-2{padding-left:0.5rem;padding-right:0.5rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.py-2\.5{padding-top:0.625rem;padding-bottom:0.625rem}.py-20{padding-top:5rem;padding-bottom:5rem}.py-3{padding-top:0.75rem;padding-bottom:0.75rem}.py-8{padding-top:2rem;padding-bottom:2rem}.px-5{padding-left:1.25rem;padding-right:1.25rem}.pb-10{padding-bottom:2.5rem}.text-center{text-align:center}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-2xl{font-size:1.5rem;line-height:2rem}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-4xl{font-size:2.25rem;line-height:2.5rem}.text-xs{font-size:0.75rem;line-height:1rem}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-medium{font-weight:500}.font-bold{font-weight:700}.font-semibold{font-weight:600}.font-light{font-weight:300}.leading-loose{line-height:2}.leading-none{line-height:1}.tracking-tight{letter-spacing:-0.025em}.text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity:1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-indigo-400{--tw-text-opacity:1;color:rgb(129 140 248 / var(--tw-text-opacity))}.text-indigo-500{--tw-text-opacity:1;color:rgb(99 102 241 / var(--tw-text-opacity))}.text-red-500{--tw-text-opacity:1;color:rgb(239 68 68 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.text-gray-200{--tw-text-opacity:1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-800{--tw-text-opacity:1;color:rgb(31 41 55 / var(--tw-text-opacity))}.text-green-500{--tw-text-opacity:1;color:rgb(34 197 94 / var(--tw-text-opacity))}.text-red-400{--tw-text-opacity:1;color:rgb(248 113 113 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.opacity-100{opacity:1}.opacity-50{opacity:0.5}.shadow-sm{--tw-shadow:0 1px 2px 0 rgb(0 0 0 / 0.05);--tw-shadow-colored:0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-xl{--tw-shadow:0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-100{transition-duration:100ms}.duration-150{transition-duration:150ms}.duration-300{transition-duration:300ms}.ease-out{transition-timing-function:cubic-bezier(0, 0, 0.2, 1)}.ease-in{transition-timing-function:cubic-bezier(0.4, 0, 1, 1)}.hover\:bg-gray-800:hover{--tw-bg-opacity:1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.hover\:bg-indigo-500:hover{--tw-bg-opacity:1;background-color:rgb(99 102 241 / var(--tw-bg-opacity))}.hover\:from-indigo-500:hover{--tw-gradient-from:#6366f1 var(--tw-gradient-from-position);--tw-gradient-to:rgb(99 102 241 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.hover\:to-indigo-700:hover{--tw-gradient-to:#fde047 var(--tw-gradient-to-position)}.hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring-2:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus\:ring-indigo-500:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(99 102 241 / var(--tw-ring-opacity))}.focus\:ring-opacity-90:focus{--tw-ring-opacity:0.9}@media (min-width: 768px){.md\:-mb-10{margin-bottom:-2.5rem}.md\:mb-16{margin-bottom:4rem}.md\:mb-4{margin-bottom:1rem}.md\:mb-8{margin-bottom:2rem}.md\:-translate-y-10{--tw-translate-y:-2.5rem;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.md\:transform{transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.md\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.md\:border{border-width:1px}.md\:border-gray-100{--tw-border-opacity:1;border-color:rgb(243 244 246 / var(--tw-border-opacity))}.md\:p-8{padding:2rem}.md\:text-4xl{font-size:2.25rem;line-height:2.5rem}.md\:shadow-md{--tw-shadow:0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.md\:transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.md\:duration-500{transition-duration:500ms}.md\:hover\:shadow-xl:hover{--tw-shadow:0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}}@media (min-width: 1024px){.lg\:mb-0{margin-bottom:0px}.lg\:ml-auto{margin-left:auto}.lg\:mr-0{margin-right:0px}.lg\:mb-20{margin-bottom:5rem}.lg\:w-1\/2{width:50%}.lg\:w-auto{width:auto}.lg\:max-w-2xl{max-width:42rem}.lg\:px-4{padding-left:1rem;padding-right:1rem}.lg\:px-8{padding-left:2rem;padding-right:2rem}.lg\:text-6xl{font-size:3.75rem;line-height:1}.lg\:text-2xl{font-size:1.5rem;line-height:2rem}.lg\:text-5xl{font-size:3rem;line-height:1}}@media (min-width: 1280px){.xl\:text-7xl{font-size:4.5rem;line-height:1}.xl\:text-xl{font-size:1.25rem;line-height:1.75rem}}</style>    <link rel="stylesheet" href="">

@section('content')
    <section x-data="{ billing: 'Monthly', basic: {'Monthly' : '49', 'Yearly' : '500' }, pro: {'Monthly' : '89', 'Yearly' : '900' }, cycle: {'Monthly' : 'mo', 'Yearly' : 'yr' } }" class="bg-yellow-50" data-tails-scripts="//unpkg.com/alpinejs">
        <div class="px-6 py-20 mx-auto bg-yellow-50 max-w-7xl lg:px-8">
            <div class="mb-6 text-center md:mb-8">
                <h2 class="mb-2 text-3xl font-bold text-gray-800 md:text-4xl lg:text-5xl md:mb-4">Pricing Made Simple.</h2>
                <p class="text-lg text-gray-600 xl:text-xl">Simple pricing for companies of all sizes.</p>
            </div>

            <div class="flex justify-center mb-8 md:mb-16 lg:mb-20 tails-selected-element" contenteditable="true">
            <nav class="relative inline-flex overflow-hidden text-sm border border-gray-300 rounded-lg" data-rounded="rounded-lg">
                <div class="absolute w-1/2 h-full transition-all duration-150 ease-out bg-gradient-to-br from-indigo-600 to-indigo-700 left-0" :class="{ 'left-0' : billing == 'Monthly', 'left-1/2' : billing == 'Yearly' }" data-primary="indigo-600"></div>
                <button @click="billing='Monthly'" class="relative z-20 px-5 py-3 font-bold focus:outline-none text-white" :class="{ 'text-white' : billing == 'Monthly', 'text-gray-600 hover:text-gray-700' : billing == 'Yearly' }">
                    Plan Mensual
                </button>
                <button @click="billing='Yearly'" class="relative z-20 px-6 py-3 font-bold focus:outline-none text-gray-600 hover:text-gray-700" :class="{ 'text-white' : billing == 'Yearly', 'text-gray-600 hover:text-gray-700' : billing == 'Monthly' }">
                    Plan Anual
                </button>
            </nav>
        </div>

            <div class="grid items-start md:grid-cols-3 gap-x-8 gap-y-8 mt-5">
                <div class="overflow-hidden bg-white border-2 border-indigo-100 rounded-lg md:border-gray-100" data-primary="indigo-600" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                    <div class="p-5 md:p-8">
                        <div class="flex items-baseline justify-between mb-4">
                            <h4 class="text-xl font-bold lg:text-2xl">Free Plan</h4>
                            <span class="text-xl font-bold lg:text-2xl">$0</span>
                        </div>
                        <p class="mb-6 text-lg text-gray-500">Get started with our free plan.</p>
                        <a href="#" class="block px-5 py-3 font-bold text-center border rounded-lg lg:px-8 bg-gradient-to-br hover:from-indigo-500 hover:to-indigo-700 hover:text-white" data-primary="indigo-600" data-rounded="rounded-lg">Start for free</a>
                    </div>
                    <div class="p-5 border-t border-gray-200 md:p-8 bg-gray-50">
                        <ul class="space-y-4 text-lg text-gray-600">
                            <li class="flex items-center space-x-2">
                                <div class="w-6 h-6">
                                    <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span>10,000 Credits</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <div class="w-6 h-6">
                                    <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span>Email Support</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <div class="w-6 h-6">
                                    <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span>3 Users</span>
                            </li>
                            <li class="flex items-center space-x-2 opacity-50">
                                <div class="w-6 h-6">
                                    <svg class="text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </div>
                                <span>Analytics &amp; Insights</span>
                            </li>
                            <li class="flex items-center space-x-2 opacity-50">
                                <div class="w-6 h-6">
                                    <svg class="text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </div>
                                <span>Automated Reports</span>
                            </li>
                            <li class="flex items-center space-x-2 opacity-50">
                                <div class="w-6 h-6">
                                    <svg class="text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </div>
                                <span>Premium Tools</span>
                            </li>
                            <li class="flex items-center space-x-2 opacity-50">
                                <div class="w-6 h-6">
                                    <svg class="text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </div>
                                <span>Integrations</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="overflow-hidden bg-white border-2 border-indigo-100 rounded-lg md:transform md:-translate-y-10 md:-mb-10 md:shadow-md md:hover:shadow-xl md:transition-all md:duration-500 md:border" data-primary="indigo-600" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                    <div class="p-5 md:p-8">
                        <div class="flex items-baseline justify-between mb-4">
                            <h4 class="text-xl font-bold lg:text-2xl">Pro Plan</h4>
                            <span class="text-xl font-bold lg:text-2xl">$<span x-text="pro[billing]"></span><span class="ml-1 text-xs font-light">/ <span x-text="cycle[billing]"></span></span></span>
                        </div>
                        <p class="mb-6 text-lg text-gray-500">Level-up your game with a pro plan</p>
                        <a href="#" class="block px-5 py-3 font-bold text-center text-white border rounded-lg lg:px-8 bg-gradient-to-br from-indigo-600 to-indigo-700 hover:from-indigo-500 hover:to-indigo-700" data-primary="indigo-600" data-rounded="rounded-lg">Start for free</a>
                    </div>
                    <div class="p-5 border-t border-gray-200 md:p-8 bg-gray-50">
                        <ul class="space-y-4 text-lg text-gray-600">
                            <li class="flex items-center space-x-2">
                                <div class="w-6 h-6">
                                    <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="">400,000 Credits</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <div class="w-6 h-6">
                                    <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="">24/7 Customer Support</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <div class="w-6 h-6">
                                    <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="">Unlimited Users</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <div class="w-6 h-6">
                                    <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="">Analytics &amp; Insights</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <div class="w-6 h-6">
                                    <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="">Automated Reports</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <div class="w-6 h-6">
                                    <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="">Premium Tools</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <div class="w-6 h-6">
                                    <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="">Full Integrations</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="overflow-hidden bg-white border-2 border-indigo-100 rounded-lg md:border-gray-100" data-primary="indigo-600" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                    <div class="p-5 md:p-8">
                        <div class="flex items-baseline justify-between mb-4">
                            <h4 class="text-xl font-bold lg:text-2xl">Basic Plan</h4>
                            <span class="text-xl font-bold lg:text-2xl">$<span x-text="basic[billing]" class=""></span><span class="ml-1 text-xs font-light">/ <span x-text="cycle[billing]"></span></span></span>
                        </div>
                        <p class="mb-6 text-lg text-gray-500">Start integrating the basic plan</p>
                        <a href="#" class="block px-5 py-3 font-bold text-center border rounded-lg lg:px-8 bg-gradient-to-br hover:from-indigo-500 hover:to-indigo-700 hover:text-white" data-primary="indigo-600" data-rounded="rounded-lg">Start for free</a>
                    </div>
                    <div class="p-5 border-t border-gray-200 md:p-8 bg-gray-50">
                        <ul class="space-y-4 text-lg text-gray-600">
                            <li class="flex items-center space-x-2">
                                <div class="w-6 h-6">
                                    <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="">200,000 Credits</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <div class="w-6 h-6">
                                    <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="">Chat Support</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <div class="w-6 h-6">
                                    <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span>10 Users</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <div class="w-6 h-6">
                                    <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="">Analytics &amp; Insights</span>
                            </li>
                            <li class="flex items-center space-x-2 opacity-50">
                                <div class="w-6 h-6">
                                    <svg class="text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </div>
                                <span>Automated Reports</span>
                            </li>
                            <li class="flex items-center space-x-2 opacity-50">
                                <div class="w-6 h-6">
                                    <svg class="text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </div>
                                <span>Premium Tools</span>
                            </li>
                            <li class="flex items-center space-x-2 opacity-50">
                                <div class="w-6 h-6">
                                    <svg class="text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </div>
                                <span class="">Integrations</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><section class="py-20 bg-gray-50">
        <div class="px-10 mx-auto max-w-7xl">
            <div class="flex flex-wrap items-center justify-center">
                <div class="max-w-sm mb-16 lg:mb-0 lg:max-w-2xl lg:w-1/2 lg:px-4">
                    <a class="inline-block mb-6 text-3xl font-bold leading-none" href="#">
                        <svg class="w-auto h-12" viewBox="0 0 73 49" viewBox="0 0 73 49" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M46.8676 24C46.8676 36.4264 36.794 46.5 24.3676 46.5C11.9413 46.5 1.86765 36.4264 1.86765 24C1.86765 11.5736 11.9413 1.5 24.3676 1.5C36.794 1.5 46.8676 11.5736 46.8676 24Z" class="ccustom" fill="#68DBFF"></path> <path d="M71.1324 24C71.1324 36.4264 61.1574 46.5 48.8529 46.5C36.5484 46.5 26.5735 36.4264 26.5735 24C26.5735 11.5736 36.5484 1.5 48.8529 1.5C61.1574 1.5 71.1324 11.5736 71.1324 24Z" class="ccompli1" fill="#FF7917"></path> <path d="M36.6705 42.8416C42.8109 38.8239 46.8676 31.8858 46.8676 24C46.8676 16.1144 42.8109 9.17614 36.6705 5.15854C30.5904 9.17614 26.5735 16.1144 26.5735 24C26.5735 31.8858 30.5904 38.8239 36.6705 42.8416Z" class="ccompli2" fill="#5D2C02"></path> </svg>

                    </a>
                    <h2 class="mb-4 text-4xl font-bold tracking-tight lg:text-6xl xl:text-7xl">Signup today and optimize your site.</h2>
                    <p class="mb-8 leading-loose text-gray-500">Are you ready to start optimizing your site for maximium conversion? These templates and designed to help you convert visitors into customers.</p>
                    <a href="#_" class="inline-block w-full px-6 py-3 font-bold text-center text-white transition bg-indigo-600 rounded hover:bg-indigo-500 lg:w-auto duration-250">Get Started</a>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div class="max-w-sm mx-auto lg:mr-0 lg:ml-auto">
                        <div class="overflow-hidden text-center bg-white rounded-md shadow-sm">
                            <div class="px-6 py-8">
                                <form onsubmit="event.preventDefault();">
                                    <div class="mb-6">
                                        <span class="text-sm text-gray-300">Fill out your info below to</span>
                                        <h4 class="text-2xl font-semibold text-gray-700">Create your account</h4>
                                    </div>
                                    <div class="flex flex-wrap mb-4 -mx-2">
                                        <div class="w-full px-2 mb-4 lg:mb-0 lg:w-1/2">
                                            <input class="py-2.5 px-4 w-full bg-gray-50 border focus:ring-2 focus:ring-opacity-90 focus:ring-indigo-500 border-gray-100 rounded focus:outline-none" type="text" placeholder="First Name">
                                        </div>
                                        <div class="w-full px-2 lg:w-1/2">
                                            <input class="py-2.5 px-4 w-full bg-gray-50 border focus:ring-2 focus:ring-opacity-90 focus:ring-indigo-500 border-gray-100 rounded focus:outline-none" type="text" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <input class="py-2.5 px-4 mb-4 w-full bg-gray-50 border focus:ring-2 focus:ring-opacity-90 focus:ring-indigo-500 border-gray-100 rounded focus:outline-none" type="email" placeholder="Email address">
                                    <input class="py-2.5 px-4 mb-4 w-full bg-gray-50 border focus:ring-2 focus:ring-opacity-90 focus:ring-indigo-500 border-gray-100 rounded focus:outline-none" type="password" placeholder="Enter your password">
                                    <button class="w-full py-3 mb-4 font-bold text-white bg-indigo-600 rounded hover:bg-indigo-500">Sign Up</button>
                                </form>
                                <p class="text-xs text-gray-400">
                                    <span>Already have an account?</span>
                                    <a class="text-indigo-500" href="#">Sign In</a>
                                </p>
                            </div>
                            <div class="py-2 text-xs font-medium text-gray-300 border-t border-gray-100 bg-gray-50">By signing up, you agree to our <a href="#_" class="text-indigo-400 underline">Terms of Service</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop