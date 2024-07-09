<?php require_once 'js.php' ?>

<div validation-space>
    <div validation-logic>
        <div validation-group>
            <div validation-target="email" validation-required>
                <div validation-validator="email"></div>
            </div>
            <div validation-target="password" validation-required>
                <div validation-validator="min" validation-validator-min="8"></div>
            </div>
            <div validation-target="">
                <div validation-valiudator="callback" validation-validator-callback="() => d.password === d.confirm_password " validation-validator-msg="Password does not match"></div>
            </div>
        </div>
        <div validation-group>

        </div>
    </div>

    <input type="text" name="email" val='() => return {email: this.value}' validation-mark="|email|" />
    <div validation-errors="|email|"></div>

    <input type="password" name="password" val='() => return {password: this.value}' validation-mark="|password|"  />
    <div validation-errors="|password|"></div>

    <input type="password" name="confirm_password" val='() => return {confirm_password: this.value}' validation-mark="|confirm_password|" />
    <div validation-errors="|confirm_password|"></div>




</div>