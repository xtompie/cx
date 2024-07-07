module = (function(name){
    function visible(ctx, tags) {
        const space = ctx.up(`[${name}-space]`);
        space.all(`[${name}-tag]`).each(function (el) {
            el.style.display = tags.includes(el.attr(`${name}-tag`)) ? '' : 'none';
        });
        space.setAttribute(`${name}-state`, tags.join(' '));
    };
    function toggle(ctx, when, then, otherwise) {
        const space = ctx.up(`[${name}-space]`);
        visible(space, space.attr(`${name}-state`).split(' ').includes(when) ? then : otherwise);
    };
    return {
        visible,
        toggle,
    }
})(module.name);

