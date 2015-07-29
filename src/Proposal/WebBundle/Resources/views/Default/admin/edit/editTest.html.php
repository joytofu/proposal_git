<?php
$edit_tp = "ProposalWebBundle:Default:admin/new_{$button_name}.html.twig";
$view->extend($edit_tp);

echo
'{% block head_title %}edit {{ button_name }}{% endblock %}
{% block delete_button %}
    {{ form_start(deleteForm) }}
    {{ form_widget(deleteForm) }}
    <div class="button-middle">
    <button class="button red" type="submit"><div class="shine"></div>DELETE {{ button_name }}</button>
    </div>
    {{ form_end(deleteForm) }}
{% endblock %}


