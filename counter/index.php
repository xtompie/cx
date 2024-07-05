<script src="../cx.js"></script>
<script>
const counter = (function() {
    function get() {
        return parseInt(this.c().one('[counter-value]').textContent);
    }
    function set(value) {
        this.c().one('[counter-value]').textContent = value;
        this.em.onchange(value);
    }
    function increment() {
        this.fn.set(this.fn.get() + 1);
    }
    return {
        get,
        set,
        increment,
    }
})();
</script>
<div component="counter" onchange="(v) => console.log(v)">
    <span counter-value>0</span>
    <button onclick="this.fn.increment()">+1</button>
</div>
<button onclick="document.onec('counter').fn.set(0)">reset</button>