# Hooks

- [Actions](#actions)
- [Filters](#filters)

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

Source: [tests/source/actions.php](../../tests/source/actions.php), [line 3](../../tests/source/actions.php#L3-15)

### good_doc_dynamic_action_{$option}

*This is a well documented dynamic action.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$old_value | mixed | The old option value.
$value | mixed | The new option value.

Source: [tests/source/actions.php](../../tests/source/actions.php), [line 17](../../tests/source/actions.php#L17-29)

### good_doc_double_quotes_dynamic_action_{$option}

*This is a well documented dynamic action.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$old_value | mixed | The old option value.
$value | mixed | The new option value.

Source: [tests/source/actions.php](../../tests/source/actions.php), [line 31](../../tests/source/actions.php#L31-43)

### missing_since_static_action

*This is an action missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$option | string | Name of the option to update.
$old_value | mixed | The old option value.
$value | mixed | The new option value.

Source: [tests/source/actions.php](../../tests/source/actions.php), [line 45](../../tests/source/actions.php#L45-55)

### missing_since_dynamic_action_{$option}

*This is a dynamic action missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$old_value | mixed | The old option value.
$value | mixed | The new option value.

Source: [tests/source/actions.php](../../tests/source/actions.php), [line 57](../../tests/source/actions.php#L57-67)

### missing_since_double_quotes_dynamic_action_{$option}

*This is a dynamic action missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$old_value | mixed | The old option value.
$value | mixed | The new option value.

Source: [tests/source/actions.php](../../tests/source/actions.php), [line 69](../../tests/source/actions.php#L69-79)

### missing_param_static_action

*This is an action missing a "param" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$option | string | Name of the option to update.
$old_value |  | 
$value | mixed | The new option value.

Source: [tests/source/actions.php](../../tests/source/actions.php), [line 81](../../tests/source/actions.php#L81-92)

### missing_param_dynamic_action_{$option}

*This is a well documented dynamic action.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$old_value |  | 
$value | mixed | The new option value.

Source: [tests/source/actions.php](../../tests/source/actions.php), [line 94](../../tests/source/actions.php#L94-105)

### missing_param_double_quotes_dynamic_action_{$option}

*This is a well documented dynamic action.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$old_value |  | 
$value | mixed | The new option value.

Source: [tests/source/actions.php](../../tests/source/actions.php), [line 107](../../tests/source/actions.php#L107-118)

### no_doc_static_action

Argument | Type | Description
-------- | ---- | -----------
$option |  | 
$old_value |  | 
$value |  | 

Source: [tests/source/actions.php](../../tests/source/actions.php), [line 120](../../tests/source/actions.php#L120-120)

### no_doc_dynamic_action_{$option}

Argument | Type | Description
-------- | ---- | -----------
$old_value |  | 
$value |  | 

Source: [tests/source/actions.php](../../tests/source/actions.php), [line 121](../../tests/source/actions.php#L121-121)

### no_doc_double_quotes_dymanic_action_{$option}

Argument | Type | Description
-------- | ---- | -----------
$old_value |  | 
$value |  | 

Source: [tests/source/actions.php](../../tests/source/actions.php), [line 122](../../tests/source/actions.php#L122-122)

## Filters

### good_static_filter

*This is a well documented filter.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$mce_translation | array | Key/value pairs of strings.
$mce_locale | string | Locale.

Source: [tests/source/filters.php](../../tests/source/filters.php), [line 2](../../tests/source/filters.php#L2-13)

### good_dynamic_filter_{$option}

*This is a well documented dynamic filter.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$value | mixed | The new, unserialized option value.
$old_value | mixed | The old option value.

Source: [tests/source/filters.php](../../tests/source/filters.php), [line 15](../../tests/source/filters.php#L15-26)

### good_double_quotes_dynamic_filter_{$option}

*This is a well documented dynamic filter.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$value | mixed | The new, unserialized option value.
$old_value | mixed | The old option value.

Source: [tests/source/filters.php](../../tests/source/filters.php), [line 28](../../tests/source/filters.php#L28-39)

### missing_since_static_filter

*This is a filter missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$mce_translation |  | 
$mce_locale | string | Locale.

Source: [tests/source/filters.php](../../tests/source/filters.php), [line 41](../../tests/source/filters.php#L41-50)

### missing_since_dynamic_filter_{$option}

*This is a dynamic filter missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$value | mixed | The new, unserialized option value.
$old_value | mixed | The old option value.

Source: [tests/source/filters.php](../../tests/source/filters.php), [line 52](../../tests/source/filters.php#L52-61)

### missing_since_double_quotes_dynamic_filter_{$option}

*This is a dynamic filter missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$value | mixed | The new, unserialized option value.
$old_value | mixed | The old option value.

Source: [tests/source/filters.php](../../tests/source/filters.php), [line 63](../../tests/source/filters.php#L63-72)

### missing_param_static_filter

*This is a filter missing one "param" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$mce_translation |  | 
$mce_locale | string | Locale.

Source: [tests/source/filters.php](../../tests/source/filters.php), [line 74](../../tests/source/filters.php#L74-84)

### missing_param_dynamic_filter_{$option}

*This is a dynamic filter missing one "param" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$value |  | 
$old_value |  | 

Source: [tests/source/filters.php](../../tests/source/filters.php), [line 86](../../tests/source/filters.php#L86-96)

### missing_param_double_quotes_dynamic_filter_{$option}

*This is a dynamic filter missing one "param" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$value |  | 
$old_value |  | 

Source: [tests/source/filters.php](../../tests/source/filters.php), [line 98](../../tests/source/filters.php#L98-108)

### multiple_since_tags

*This is a filter with multiple since tags*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Argument | Type | Description
-------- | ---- | -----------
$first_parameter | string | 
$second_parameter | string | 

Source: [tests/source/filters.php](../../tests/source/filters.php), [line 110](../../tests/source/filters.php#L110-122)

### no_doc_static_filter

Argument | Type | Description
-------- | ---- | -----------
$mce_translation |  | 
$mce_locale |  | 

Source: [tests/source/filters.php](../../tests/source/filters.php), [line 124](../../tests/source/filters.php#L124-124)

### no_doc_dynamic_filter_{$option}

Argument | Type | Description
-------- | ---- | -----------
$value |  | 
$old_value |  | 

Source: [tests/source/filters.php](../../tests/source/filters.php), [line 126](../../tests/source/filters.php#L126-126)

### no_doc_double_quotes_dynamic_filter_{$option}

Argument | Type | Description
-------- | ---- | -----------
$value |  | 
$old_value |  | 

Source: [tests/source/filters.php](../../tests/source/filters.php), [line 128](../../tests/source/filters.php#L128-128)


