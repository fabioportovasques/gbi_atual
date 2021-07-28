<?php
switch (get_post_action('save', 'submit', 'publish')) {
    case 'save':
        //save article and keep editing
        break;

    case 'submit':
        //save article and redirect
        break;

    case 'publish':
        //publish article and redirect
        break;

    default:
        //no action sent
}
?>

<form method="post" action="form.php">
    <p>
        <input type="submit" name="save" value="Salvar e continuar editando" />
        <input type="submit" name="submit" value="Salvar" />
        <input type="submit" name="publish" value="Publicar" />
    </p>
</form>