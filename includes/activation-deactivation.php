<?php
// ACTIVATION
function plugin_activate() { 
}

// DEACTIVATION
function plugin_deactivate() { 
}

register_activation_hook(
    __FILE__, 
    'plugin_activate'
);
register_deactivation_hook(
    __FILE__,
    'plugin_deactivate'
);
?>