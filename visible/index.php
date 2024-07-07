<script>

<?php require_once '../cx.js' ?>

module = {name: 'visible'};
<?php require_once '../visible/visible.js' ?>
let visible = module;

</script>

<div visible-space visible-state="hide">
    <button  onclick="visible.toggle(this, 'hide', ['show'], ['hide'])">
        <span visible-tag="show" style="display:none;">Hide</span>
        <span visible-tag="hide">Show</span>
    </button>
    <div visible-tag="show" style="display:none;">
        <p>
            Content <span onclick="visible.visible(this, ['hide'])">X</span>
        </p>
    </div>
</div>
