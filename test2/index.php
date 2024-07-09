<?php require_once 'js.php' ?>

<div app-main>

    <div app-read style="display: none;">
        <h1 val="() => ({title: this.textContent})">Ticket #123</h1>
        <div>
            Author:
            <span val="() => ({author: val.obj(this)})">
                <span val="() => ({name: this.textContent})">John Doe</span>
                (<span val="() => ({email: this.textContent})">j.doe@example.com</span>)
            </span>
        </div>
        <div>Assigned:
            <span val="() => ({assigned: val.obj(this)})">
                <span val="() => ({name: this.textContent})">Max Mustermann</span>
                (<span val="() => ({email: this.textContent})">m.mustermann@example.com</span>)
            </span>
        </div>
        <p val="() => ({description: this.innerHTML})"><b>Warning!</b> Some description</p>
        <div val="() => ({comments: val.arr(this)})">
            <div val="() => val.obj(this)">
                <span val="() => ({author: val.obj(this)})">
                    <span val="() => ({name: this.textContent})">John Doe</span>
                    (<span val="() => ({email: this.textContent})">j.doe@example.com</span>)
                </span>:
                <div val="() => ({text: this.textContent})">Some comment 1 </div>
            </div>
            <div val="() => val.obj(this)">
                <span val="() => ({author: val.obj(this)})">
                    <span val="() => ({name: this.textContent})">John Doe</span>
                    (<span val="() => ({email: this.textContent})">j.doe@example.com</span>)
                </span>:
                <div val="() => ({text: this.textContent})">Some comment 2 </div>
            </div>
            <div val="() => val.obj(this)">
                <span val="() => ({author: val.obj(this)})">
                    <span val="() => ({name: this.textContent})">John Doe</span>
                    (<span val="() => ({email: this.textContent})">j.doe@example.com</span>)
                </span>:
                <div val="() => ({text: this.textContent})">Some comment 3 </div>
            </div>
        </div>
    </div>

    <div app-write>
        <template app-write-tpl>
            <h1 render="(d) => this.textContent = d.title"></h1>
            <div>Author: <span render="(d) => render(this, '[app-write-tpl-person]', d.author)"></span></div>
            <div>Assigned: <span render="(d) => render(this, '[app-write-tpl-person]', d.assigned)"></span></div>
            <p render="(d) => this.innerHTML = d.description"></p>
            <div render="(d) => render(this, '[app-write-tpl-comment]', d.comments)"></div>
        </template>

        <template app-write-tpl-person>
            <span render="(d) => this.textContent = d.name"></span> (<span render="(d) => this.textContent = d.email"></span>)
        </template>

        <template app-write-tpl-comment>
            <div><span render="(d) => render(this, '[app-write-tpl-person]', d.author)"></span>:</div>
            <div render="(d) => this.innerHTML = d.text"></div>
        </template>

        <div app-write-view></div>
    </div>

    <script>
        app.main.init(
            document.currentScript.up('[app-main]')
        );
    </script>

</div>
