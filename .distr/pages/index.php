{% extends "default.php" %}

{% block blocks %}
{% set IS_PRICE = false %}
{% include 'header/block.php' %}
{% include 'main/block.php' %}
{% include 'description/block.php' %}
<?php if ($lang != 'en'): ?>
{% include 'formReg_2/block.php' %}
{% include 'headliners/block.php' %}
<?php endif; ?>
{% include 'speakers/block.php' %}
<?php if ($version == 'fullprice'):?>
{% include 'fullprice/block.php' %}
<?php endif; ?>
{% include 'gallery/block.php' %}
<?php if ($lang != 'en'): ?>
{% include 'chatbot-short/block.php' %}
{# % include 'vtb/block.php' % #}

<?php endif; ?>

{% set anchor=true %}
{% include 'formReg_2/block.php' %}

{% include 'themes/block.php' %}
<!-- {% include 'program/block.php' %} -->
<?php if ($lang != 'en' && $version != 'online'): ?>
{#% include 'place/block.php' %#}
<?php endif; ?>
{% include 'expectations/block.php' %}

{# {% include 'marathon/block.php' %} #}

<?php if ($lang != 'en'): ?>
{#% include 'discussion/block.php' %#}
<?php endif; ?>
{% include 'place/block.php' %}
<!-- {#% include 'diving/block.php' %#} -->
<?php if ($lang == 'en'): ?>
{% include 'platform/block.php' %}
<?php endif; ?>
{% include 'banner/block.php' %}
{% include 'organizer/block.php' %}
{% include 'partners/block.php' %}
<?php if ($lang != 'en'): ?>
{% include 'franchise/block.php' %}
{% include 'chatbot/block.php' %}
<?php endif; ?>
{% include 'formReg_3/block.php' %}
{% set class = 'outro_bottom' %}
{% include 'main/block.php' %}
{% include 'footer/block.php' %}
{% endblock %}


{% block popups %}
{% include 'popup-reg/block.php' %}
{% include 'popup-speakers/block.php' %}
{% include 'popup-map/block.php' %}
{% include 'popup-thanks/block.php' %}
{% include 'popup-accreditation/block.php' %}
{% endblock %}
