<script>
<?php require_once '../cx.js' ?>

module = {attr: 'render'};
<?php require_once '../render/render.js' ?>
let render = module;

module = {name: 'visible'};
<?php require_once '../visible/visible.js' ?>
let visible = module;

// var form = form || {};
// form.main = (function(){
//     return {
//     };
// })();
// form.page = (function(){
//     function next(name) {
//         if (!this.c().onec('form.validation').fn.validate()) {
//             return;
//         };
//         this.fn.show(name);
//     }
//     function show(name) {
//         this.c().up().allc('form.page').each(page => {
//             el.style.display = page.attr('form-page') === name ? '' : 'none';
//         });
//         this.c().up().one(`[form-page="${name}"]`).fn.onshow();
//     }
//     return {
//     };
// })();
</script>