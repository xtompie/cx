module = (function (attr) {
    function fragment(tpl, data) {
        if (Array.isArray(data)) {
           return data.reduce((acc, d) => {
               acc.append(fragment(tpl, d));
               return acc;
           }, document.createDocumentFragment());
        }
        tpl = document.querySelector(tpl).content.cloneNode(true);
        tpl.querySelectorAll(`[${attr}]`).forEach(function (e) {
            let f = e.getAttribute(attr);
            (function (d) { eval(f).call(null, d); }).bind(e)(data);
            e.removeAttribute(attr);
        });
        return tpl;
    };
    function update(view, tpl, data) {
        view = typeof view === 'string' ? document.querySelector(view) : view;
        view.innerHTML = '';
        view.append(fragment(tpl, data));
    }
    return update;
})(module.attr);
