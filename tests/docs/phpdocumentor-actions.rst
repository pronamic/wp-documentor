Actions
=======

	Actions allow you to add data or change how WordPress operates. Callback functions for Actions will run at a specific point in the execution of WordPress, and can perform some kind of a task, like echoing output to the user or inserting something into the database. Actions do not return anything back to the calling hook.

https://developer.wordpress.org/plugins/hooks/actions/

good_static_filter
------------------

*This is a well documented filter.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $mce_translation | array | Key/value pairs of strings. |
| $mce_locale | string | Locale. |
+----------+------+-------------+

good_dynamic_filter_{$option}
-----------------------------

*This is a well documented dynamic filter.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $value | mixed | The new, unserialized option value. |
| $old_value | mixed | The old option value. |
+----------+------+-------------+

good_double_quotes_dynamic_filter_{$option}
-------------------------------------------

*This is a well documented dynamic filter.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $value | mixed | The new, unserialized option value. |
| $old_value | mixed | The old option value. |
+----------+------+-------------+

missing_since_static_filter
---------------------------

*This is a filter missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $mce_translation |  |  |
| $mce_locale | string | Locale. |
+----------+------+-------------+

missing_since_dynamic_filter_{$option}
--------------------------------------

*This is a dynamic filter missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $value | mixed | The new, unserialized option value. |
| $old_value | mixed | The old option value. |
+----------+------+-------------+

missing_since_double_quotes_dynamic_filter_{$option}
----------------------------------------------------

*This is a dynamic filter missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $value | mixed | The new, unserialized option value. |
| $old_value | mixed | The old option value. |
+----------+------+-------------+

missing_param_static_filter
---------------------------

*This is a filter missing one "param" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $mce_translation |  |  |
| $mce_locale | string | Locale. |
+----------+------+-------------+

missing_param_dynamic_filter_{$option}
--------------------------------------

*This is a dynamic filter missing one "param" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $value |  |  |
| $old_value |  |  |
+----------+------+-------------+

missing_param_double_quotes_dynamic_filter_{$option}
----------------------------------------------------

*This is a dynamic filter missing one "param" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $value |  |  |
| $old_value |  |  |
+----------+------+-------------+

multiple_since_tags
-------------------

*This is a filter with multiple since tags*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $first_parameter | string |  |
| $second_parameter | string |  |
+----------+------+-------------+

no_doc_static_filter
--------------------

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $mce_translation |  |  |
| $mce_locale |  |  |
+----------+------+-------------+

no_doc_dynamic_filter_{$option}
-------------------------------

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $value |  |  |
| $old_value |  |  |
+----------+------+-------------+

no_doc_double_quotes_dynamic_filter_{$option}
---------------------------------------------

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $value |  |  |
| $old_value |  |  |
+----------+------+-------------+


