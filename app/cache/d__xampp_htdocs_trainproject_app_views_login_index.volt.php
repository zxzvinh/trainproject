
<?php echo $this->getContent(); ?>

<div align="center">
    <div align="right">
        <?php echo $this->tag->linkTo(array('admin/users/new', 'Create users')); ?>
    </div>
    <h1>Login</h1>

    <?php if ($this->session->get('login')): ?>
        <p style="color: #03C900">If you are seeing this message, you have already logged in!</p>
    <?php else: ?>
        <p style="color: #C90017">You are not logged in!</p>
    <?php endif ?>

    <?php echo $this->tag->form(array('admin/login', 'method' => 'post', 'autocomplete' => 'off')); ?>

        <input type="hidden" name="<?php echo $this->security->getTokenKey(); ?>" value="<?php echo $this->security->getToken(); ?>"/>

        <table>
            <tr>
                <td align="right">
                    <label for="username">Username</label>
                </td>
                <td align="left">
                    <?php echo $this->tag->textField(array('username', 'size' => 30)); ?>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="password">Password</label>
                </td>
                <td align="left">
                    <?php echo $this->tag->passwordField(array('password', 'size' => 30)); ?>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><?php echo $this->tag->submitButton(array('Login')); ?><?php if ($this->session->get('login')): ?> or <a href="admin/logout">Logout</a><?php endif; ?></td>
            </tr>
        </table>

    <?php echo $this->tag->endForm(); ?>

</div>
