{% extends "page.php" %}

{% block blocks %}
{% set IS_PRICE = true %}
{% include 'header/block.php' %}

{% include 'price-version-online/block.php' %}

{% set outro = true %}
{% include 'main/block.php' %}
{% include 'vtb/block.php' %}
{% include 'footer/block.php' %}
{% endblock %}


{% block popups %}
{% include 'popup-reg/block.php' %}
{% include 'popup-map/block.php' %}
{% include 'popup-thanks/block.php' %}
{% endblock %}