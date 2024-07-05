<?php require_once '../cx.php' ?>
<script>
var app = app || {};
app.input = (function(){
    function init() {
        this.append(document.one('[app-input-tpl]').tpl());
    }
    function add() {
        let input = this.c().one('[app-input-text]');
        let text = input.value;
        input.value = '';
        this.em.onadd(text);
    }
    return {
        init,
        add,
    };
})();
</script>
<template app-input-tpl>
    <div>
        <input type="text" app-input-text />
        <button onclick="this.fn.add()">add</button>
    </div>
</template>