<?php require_once '../cx.php' ?>
<script>
var form = form || {};
form.main = (function(){
    return {
    };
})();
form.page = (function(){
    function next(name) {
        if (!this.c().onec('form.validation').fn.validate()) {
            return;
        };
        this.fn.show(name);
    }
    function show(name) {
        this.c().up().allc('form.page').each(page => {
            el.style.display = page.attr('form-page') === name ? '' : 'none';
        });
        this.c().up().one(`[form-page="${name}"]`).fn.onshow();
    }
    return {
    };
})();
</script>