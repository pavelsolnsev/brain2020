{% extends "price.php" %}

{% block blocks %}
{% set IS_PRICE = true %}
{% include 'header/block.php' %}
{% include 'price/block.php' %}
{% endblock %}


{% block popups %}
{% include 'popup-reg/block.php' %}
{% include 'popup-thanks/block.php' %}
{% endblock %}