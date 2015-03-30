<?php $title = 'Hello' ?>

<h1><?php eh($message) ?></h1>
<p>Use this code as a way to quick start any new project.</p>

<?php foreach($langs as $lang): ?>
    <p><?php echo $lang ?></p>
<?php endforeach; ?>

<?php foreach($result as $cp_info): ?>
    <p><?php echo $cp_info->cp->id ?></p>
    <p><?php echo $cp_info->brand->name ?></p>
<?php endforeach; ?>