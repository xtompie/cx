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
    function init(space) {
        let r = space.one('[app-read]');
        let w = space.one('[app-write]');
        app.write.write(w, app.read.read(r));
    }
    return {
        init
    };
})();

app.read = (function(){
    function read(space) {
        return val.obj(space);
    }
    return {
        read
    };
})();

app.write = (function(){
    function write(space, data) {
        render(space.one('[app-write-view]'), '[app-write-tpl]', data);
    }
    return {
        write
    };
})();

</script>