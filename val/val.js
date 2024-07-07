module = (function (attr) {
    function obj(el) {
        return _find(el).reduce((r, e) => {
            return Object.assign(r, _val(e));
        }, {});
    };
    function arr(el) {
        return _find(el).map(_val);
    }
    function _find(el) {
        return Array.from(el.children).reduce((r, e) => {
            return e.hasAttribute(attr) ? r.concat(e) : r.concat(_find(e));
        }, []);
    }
    function _val(e) {
        return (function () { return eval(e.getAttribute(attr)).call(); }).bind(e)()
    }
    return {
        arr,
        obj,
    };
})(module.attr);
