# Hooks

## Actions

### good_doc_static_action

*This is a well documented action.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$option | string | Name of the option to update.
$old_value | mixed | The old option value.
$value | mixed | The new option value.

### good_doc_dynamic_action_{$option}

*This is a well documented dynamic action.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$old_value | mixed | The old option value.
$value | mixed | The new option value.

### good_doc_double_quotes_dynamic_action_{$option}

*This is a well documented dynamic action.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$old_value | mixed | The old option value.
$value | mixed | The new option value.

### missing_since_static_action

*This is an action missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$option | string | Name of the option to update.
$old_value | mixed | The old option value.
$value | mixed | The new option value.

### missing_since_dynamic_action_{$option}

*This is a dynamic action missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$old_value | mixed | The old option value.
$value | mixed | The new option value.

### missing_since_double_quotes_dynamic_action_{$option}

*This is a dynamic action missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$old_value | mixed | The old option value.
$value | mixed | The new option value.

### missing_param_static_action

*This is an action missing a "param" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$option | string | Name of the option to update.
$old_value |  | 
$value | mixed | The new option value.

### missing_param_dynamic_action_{$option}

*This is a well documented dynamic action.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$old_value |  | 
$value | mixed | The new option value.

### missing_param_double_quotes_dynamic_action_{$option}

*This is a well documented dynamic action.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$old_value |  | 
$value | mixed | The new option value.

### no_doc_static_action

Argument | Type | Description
-------- | ---- | -----------
$option |  | 
$old_value |  | 
$value |  | 

### no_doc_dynamic_action_{$option}

Argument | Type | Description
-------- | ---- | -----------
$old_value |  | 
$value |  | 

### no_doc_double_quotes_dymanic_action_{$option}

Argument | Type | Description
-------- | ---- | -----------
$old_value |  | 
$value |  | 

## Filters

### good_static_filter

*This is a well documented filter.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$mce_translation | array | Key/value pairs of strings.
$mce_locale | string | Locale.

### good_dynamic_filter_{$option}

*This is a well documented dynamic filter.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$value | mixed | The new, unserialized option value.
$old_value | mixed | The old option value.

### good_double_quotes_dynamic_filter_{$option}

*This is a well documented dynamic filter.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$value | mixed | The new, unserialized option value.
$old_value | mixed | The old option value.

### missing_since_static_filter

*This is a filter missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$mce_translation |  | 
$mce_locale | string | Locale.

### missing_since_dynamic_filter_{$option}

*This is a dynamic filter missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$value | mixed | The new, unserialized option value.
$old_value | mixed | The old option value.

### missing_since_double_quotes_dynamic_filter_{$option}

*This is a dynamic filter missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$value | mixed | The new, unserialized option value.
$old_value | mixed | The old option value.

### missing_param_static_filter

*This is a filter missing one "param" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$mce_translation |  | 
$mce_locale | string | Locale.

### missing_param_dynamic_filter_{$option}

*This is a dynamic filter missing one "param" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$value |  | 
$old_value |  | 

### missing_param_double_quotes_dynamic_filter_{$option}

*This is a dynamic filter missing one "param" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$value |  | 
$old_value |  | 

### multiple_since_tags

*This is a filter with multiple since tags*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$first_parameter | string | 
$second_parameter | string | 

### no_doc_static_filter

Argument | Type | Description
-------- | ---- | -----------
$mce_translation |  | 
$mce_locale |  | 

### no_doc_dynamic_filter_{$option}

Argument | Type | Description
-------- | ---- | -----------
$value |  | 
$old_value |  | 

### no_doc_double_quotes_dynamic_filter_{$option}

Argument | Type | Description
-------- | ---- | -----------
$value |  | 
$old_value |  | 


