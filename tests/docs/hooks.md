# Hooks

- [Actions](#actions)
- [Filters](#filters)

## Actions

### `good_doc_static_action`

*This is a well documented action.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$option` | `string` | Name of the option to update.
`$old_value` | `mixed` | The old option value.
`$value` | `mixed` | The new option value.

**Changelog**

Version | Description
------- | -----------
`2.9.0` | 

Source: [tests/source/actions.php](../source/actions.php), [line 11](../source/actions.php#L11-L23)

### `good_doc_dynamic_action_{$option}`

*This is a well documented dynamic action.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$old_value` | `mixed` | The old option value.
`$value` | `mixed` | The new option value.

**Changelog**

Version | Description
------- | -----------
`2.9.0` | 

Source: [tests/source/actions.php](../source/actions.php), [line 25](../source/actions.php#L25-L37)

### `good_doc_double_quotes_dynamic_action_{$option}`

*This is a well documented dynamic action.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$old_value` | `mixed` | The old option value.
`$value` | `mixed` | The new option value.

**Changelog**

Version | Description
------- | -----------
`2.9.0` | 

Source: [tests/source/actions.php](../source/actions.php), [line 39](../source/actions.php#L39-L51)

### `missing_since_static_action`

*This is an action missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$option` | `string` | Name of the option to update.
`$old_value` | `mixed` | The old option value.
`$value` | `mixed` | The new option value.

Source: [tests/source/actions.php](../source/actions.php), [line 53](../source/actions.php#L53-L63)

### `missing_since_dynamic_action_{$option}`

*This is a dynamic action missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$old_value` | `mixed` | The old option value.
`$value` | `mixed` | The new option value.

Source: [tests/source/actions.php](../source/actions.php), [line 65](../source/actions.php#L65-L75)

### `missing_since_double_quotes_dynamic_action_{$option}`

*This is a dynamic action missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$old_value` | `mixed` | The old option value.
`$value` | `mixed` | The new option value.

Source: [tests/source/actions.php](../source/actions.php), [line 77](../source/actions.php#L77-L87)

### `missing_param_static_action`

*This is an action missing a "param" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$option` | `string` | Name of the option to update.
`$old_value` |  | 
`$value` | `mixed` | The new option value.

**Changelog**

Version | Description
------- | -----------
`2.9.0` | 

Source: [tests/source/actions.php](../source/actions.php), [line 89](../source/actions.php#L89-L100)

### `missing_param_dynamic_action_{$option}`

*This is a well documented dynamic action.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$old_value` |  | 
`$value` | `mixed` | The new option value.

**Changelog**

Version | Description
------- | -----------
`2.9.0` | 

Source: [tests/source/actions.php](../source/actions.php), [line 102](../source/actions.php#L102-L113)

### `missing_param_double_quotes_dynamic_action_{$option}`

*This is a well documented dynamic action.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$old_value` |  | 
`$value` | `mixed` | The new option value.

**Changelog**

Version | Description
------- | -----------
`2.9.0` | 

Source: [tests/source/actions.php](../source/actions.php), [line 115](../source/actions.php#L115-L126)

### `no_doc_static_action`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$option` |  | 
`$old_value` |  | 
`$value` |  | 

Source: [tests/source/actions.php](../source/actions.php), [line 128](../source/actions.php#L128-L128)

### `no_doc_dynamic_action_{$option}`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$old_value` |  | 
`$value` |  | 

Source: [tests/source/actions.php](../source/actions.php), [line 129](../source/actions.php#L129-L129)

### `no_doc_double_quotes_dymanic_action_{$option}`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$old_value` |  | 
`$value` |  | 

Source: [tests/source/actions.php](../source/actions.php), [line 130](../source/actions.php#L130-L130)

### `test`

*Test action.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$test` | `\Pronamic\WordPress\Documentor\TestClass` | Test object.

Source: [tests/source/tests.php](../source/tests.php), [line 34](../source/tests.php#L34-L39)

### `test_{$dummy}`

*Test tag with method call.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$test` | `\Pronamic\WordPress\Documentor\TestClass` | Test object.

Source: [tests/source/tests.php](../source/tests.php), [line 57](../source/tests.php#L57-L62)

### `test_{$from}_to_{$to}`

*Test tag with var and underscores in markdown.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$test` | `\Pronamic\WordPress\Documentor\TestClass` | Test object.

Source: [tests/source/tests.php](../source/tests.php), [line 72](../source/tests.php#L72-L77)

### `test_{$this->dummy}`

*Test tag with property fetch.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$test` | `\Pronamic\WordPress\Documentor\TestClass` | Test object.

Source: [tests/source/tests.php](../source/tests.php), [line 84](../source/tests.php#L84-L89)

### `test_since`

*Test tag with property fetch.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$test` | `\Pronamic\WordPress\Documentor\TestClass` | Test object.

**Changelog**

Version | Description
------- | -----------
`1.0.1` | Improved documentation.
`1.0.0` | Introduced.

Source: [tests/source/tests.php](../source/tests.php), [line 98](../source/tests.php#L98-L106)

### `test_union_types`

*Test union types.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$value` | `int\|string` | Union type value, integer or string.

**Changelog**

Version | Description
------- | -----------
`2.9.0` | 

Source: [tests/source/union-types.php](../source/union-types.php), [line 11](../source/union-types.php#L11-L20)

## Filters

### `good_static_filter`

*This is a well documented filter.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$mce_translation` | `array` | Key/value pairs of strings.
`$mce_locale` | `string` | Locale.

**Changelog**

Version | Description
------- | -----------
`3.9.0` | 

Source: [tests/source/filters.php](../source/filters.php), [line 11](../source/filters.php#L11-L22)

### `good_dynamic_filter_{$option}`

*This is a well documented dynamic filter.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$value` | `mixed` | The new, unserialized option value.
`$old_value` | `mixed` | The old option value.

**Changelog**

Version | Description
------- | -----------
`2.6.0` | 

Source: [tests/source/filters.php](../source/filters.php), [line 24](../source/filters.php#L24-L35)

### `good_double_quotes_dynamic_filter_{$option}`

*This is a well documented dynamic filter.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$value` | `mixed` | The new, unserialized option value.
`$old_value` | `mixed` | The old option value.

**Changelog**

Version | Description
------- | -----------
`2.6.0` | 

Source: [tests/source/filters.php](../source/filters.php), [line 37](../source/filters.php#L37-L48)

### `missing_since_static_filter`

*This is a filter missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$mce_translation` |  | 
`$mce_locale` | `string` | Locale.

Source: [tests/source/filters.php](../source/filters.php), [line 50](../source/filters.php#L50-L59)

### `missing_since_dynamic_filter_{$option}`

*This is a dynamic filter missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$value` | `mixed` | The new, unserialized option value.
`$old_value` | `mixed` | The old option value.

Source: [tests/source/filters.php](../source/filters.php), [line 61](../source/filters.php#L61-L70)

### `missing_since_double_quotes_dynamic_filter_{$option}`

*This is a dynamic filter missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$value` | `mixed` | The new, unserialized option value.
`$old_value` | `mixed` | The old option value.

Source: [tests/source/filters.php](../source/filters.php), [line 72](../source/filters.php#L72-L81)

### `missing_param_static_filter`

*This is a filter missing one "param" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$mce_translation` |  | 
`$mce_locale` | `string` | Locale.

**Changelog**

Version | Description
------- | -----------
`2.6.0` | 

Source: [tests/source/filters.php](../source/filters.php), [line 83](../source/filters.php#L83-L93)

### `missing_param_dynamic_filter_{$option}`

*This is a dynamic filter missing one "param" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$value` |  | 
`$old_value` |  | 

**Changelog**

Version | Description
------- | -----------
`2.6.0` | 

Source: [tests/source/filters.php](../source/filters.php), [line 95](../source/filters.php#L95-L105)

### `missing_param_double_quotes_dynamic_filter_{$option}`

*This is a dynamic filter missing one "param" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$value` |  | 
`$old_value` |  | 

**Changelog**

Version | Description
------- | -----------
`2.6.0` | 

Source: [tests/source/filters.php](../source/filters.php), [line 107](../source/filters.php#L107-L117)

### `multiple_since_tags`

*This is a filter with multiple since tags*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$first_parameter` | `string` | 
`$second_parameter` | `string` | 

**Changelog**

Version | Description
------- | -----------
`1.9` | Added a new parameter to the filter
`1.0` | 

Source: [tests/source/filters.php](../source/filters.php), [line 119](../source/filters.php#L119-L131)

### `no_doc_static_filter`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$mce_translation` |  | 
`$mce_locale` |  | 

Source: [tests/source/filters.php](../source/filters.php), [line 133](../source/filters.php#L133-L133)

### `no_doc_dynamic_filter_{$option}`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$value` |  | 
`$old_value` |  | 

Source: [tests/source/filters.php](../source/filters.php), [line 135](../source/filters.php#L135-L135)

### `no_doc_double_quotes_dynamic_filter_{$option}`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$value` |  | 
`$old_value` |  | 

Source: [tests/source/filters.php](../source/filters.php), [line 137](../source/filters.php#L137-L137)


<p align="center"><a href="https://github.com/pronamic/wp-documentor"><img src="https://cdn.jsdelivr.net/gh/pronamic/wp-documentor@main/logos/pronamic-wp-documentor.svgo-min.svg" alt="Pronamic WordPress Documentor" width="32" height="32"></a><br><em>Generated by <a href="https://github.com/pronamic/wp-documentor">Pronamic WordPress Documentor</a> <code>1.1.0</code></em><p>

