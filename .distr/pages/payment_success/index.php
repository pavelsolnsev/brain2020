{% extends "default.php" %}

{% block base %}

<?php if (!empty($_SERVER['DOCUMENT_URI'])) : ?>
<base href="//<?= $_SERVER['HTTP_HOST'] . str_replace(substr($_SERVER['DOCUMENT_URI'], 1, -9), '', $_SERVER['REQUEST_URI']) ?>">
<?php else : ?>
<base href="//<?= $_SERVER['HTTP_HOST'] ?>">
<?php endif; ?>

{% endblock %}

{% block blocks %}
{% include 'pay-thanks/block.php' %}
{% endblock %}


