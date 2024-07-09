<script>
<?php require_once '../cx.js' ?>

module = {attr: 'render'};
<?php require_once '../render/render.js' ?>
let render = module;

module = {attr: 'val'};
<?php require_once '../val/val.js' ?>
let val = module;

var app = app || {};

app.main = (function(){
    function init() {
        let read = this.onec('app.read');
        let write = this.onec('app.write');
        write.fn.write(read.fn.read());
    }
    return {
        init
    };
})();

app.read = (function(){
    function read() {
        return val.obj(this);
    }
    return {
        read
    };
})();

app.write = (function(){
    function write(data) {
        render(this.one('[app-write-view]'), '[app-write-tpl]', data);
    }
    return {
        write
    };
})();

</script>