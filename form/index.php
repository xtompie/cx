<?php require_once 'js.php' ?>


<div component="form.main">
    <template form-validation-tpl-msgs>

    </template>

    <div component="form.page" form-page="basic">

        <div component="form.validation">
            <div form-validation-logic>
                <div form-validation-group>
                    <div form-validation-target="email" form-validation-required>
                        <div form-validation-validator="email"></div>
                    </div>
                    <div form-validation-target="password" form-validation-required>
                        <div form-validation-validator="min" form-validation-validator-min="8"></div>
                    </div>
                    <div form-validation-target="">
                        <div form-validation-valiudator="callback" form-validation-validator-callback="() => d.password === d.confirm_password " form-validation-validator-msg="Password does not match"></div>
                    </div>
                </div>
                <div form-validation-group>

                </div>
            </div>

            <div component="form.data">

                <input type="text" name="email" form-data='() => return {email: this.value}' form-validation-mark="|email|" />
                <div form-validation-errors="|email|"></div>

                <input type="password" name="password" form-data='() => return {password: this.value}' form-validation-mark="|password|"  />
                <div form-validation-errors="|password|"></div>

                <input type="password" name="confirm_password"  form-data='() => return {confirm_password: this.value}' form-validation-mark="|confirm_password|" />
                <div form-validation-errors="|confirm_password|"></div>

            </div>


        </div>

        <button onclick="this.fn.next()">next</button>

    </div>

    <div component="form.page" form-page="additional" style="display: none;">
        <button onclick="this.fn.prev()">prev</button>
        <button onclick="this.fn.next()">next</button>
    </div>

    <div component="form.page" form-page="summary" style="display: none;" onshow="() => this.up().fn.summary()" onsubmit="() => this.up().fn.submit()">

        <div component="form.summary">
            <template>

            </template>
            <div>
                <div>email: <span form-summary-value="email"></span></div>
            </div>

        </div>

        <button onclick="this.em.onsubmit()">submit</button>

    </div>

</div>