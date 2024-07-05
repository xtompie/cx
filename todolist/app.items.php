<?php require_once '../cx.php' ?>
<?php require_once 'app.item.php' ?>
<script>
var app = app || {};
app.items = (function() {
    function init(data) {
        let c = this.c();
        c.append(document.one('[app-items-tpl]').tpl());
        data.each(i => append(c, i.text, i.done));
    }
    function add(text) {
        let c = this.c();
        append(c, text, false);
        this.em.onchange(value(c));
    }
    function change() {
        this.em.onchange(value(this));
    }
    function remove(item) {
        item.remove();
        this.em.onchange(value(this));
    }
    function value(c) {
        return c.allc('app.item').map(item => item.fn.value());
    }
    function append(c, text, done) {
        let i = document.createElement('div');
        i.attr('component', 'app.item');
        i.attr('onchange', "() => this.up().fn.change()");
        i.attr('onremove', "() => this.up().fn.remove(this)");
        c.one('[app-items-list]').append(i);
        i.fn.init(text, done);
    }
    return {
        init,
        add,
        change,
        remove,
    };
})();
</script>
<template app-items-tpl>
    <div app-items-list>
    </div>
</template>
