Actions
=======

	Actions allow you to add data or change how WordPress operates. Callback functions for Actions will run at a specific point in the execution of WordPress, and can perform some kind of a task, like echoing output to the user or inserting something into the database. Actions do not return anything back to the calling hook.

https://developer.wordpress.org/plugins/hooks/actions/

good_doc_static_action
----------------------

*This is a well documented action.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $option | string | Name of the option to update. |
| $old_value | mixed | The old option value. |
| $value | mixed | The new option value. |
+----------+------+-------------+

good_doc_dynamic_action_{$option}
---------------------------------

*This is a well documented dynamic action.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $old_value | mixed | The old option value. |
| $value | mixed | The new option value. |
+----------+------+-------------+

good_doc_double_quotes_dynamic_action_{$option}
-----------------------------------------------

*This is a well documented dynamic action.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $old_value | mixed | The old option value. |
| $value | mixed | The new option value. |
+----------+------+-------------+

missing_since_static_action
---------------------------

*This is an action missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $option | string | Name of the option to update. |
| $old_value | mixed | The old option value. |
| $value | mixed | The new option value. |
+----------+------+-------------+

missing_since_dynamic_action_{$option}
--------------------------------------

*This is a dynamic action missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $old_value | mixed | The old option value. |
| $value | mixed | The new option value. |
+----------+------+-------------+

missing_since_double_quotes_dynamic_action_{$option}
----------------------------------------------------

*This is a dynamic action missing the "since" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $old_value | mixed | The old option value. |
| $value | mixed | The new option value. |
+----------+------+-------------+

missing_param_static_action
---------------------------

*This is an action missing a "param" line.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $option | string | Name of the option to update. |
| $old_value |  |  |
| $value | mixed | The new option value. |
+----------+------+-------------+

missing_param_dynamic_action_{$option}
--------------------------------------

*This is a well documented dynamic action.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $old_value |  |  |
| $value | mixed | The new option value. |
+----------+------+-------------+

missing_param_double_quotes_dynamic_action_{$option}
----------------------------------------------------

*This is a well documented dynamic action.*

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $old_value |  |  |
| $value | mixed | The new option value. |
+----------+------+-------------+

no_doc_static_action
--------------------

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $option |  |  |
| $old_value |  |  |
| $value |  |  |
+----------+------+-------------+

no_doc_dynamic_action_{$option}
-------------------------------

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $old_value |  |  |
| $value |  |  |
+----------+------+-------------+

no_doc_double_quotes_dymanic_action_{$option}
---------------------------------------------

+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $old_value |  |  |
| $value |  |  |
+----------+------+-------------+

test
----

*Test action.*



+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $test | \Pronamic\WordPress\Documentor\TestClass | Test object. |
+----------+------+-------------+

test_{$dummy}
-------------

*Test tag with method call.*



+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $test | \Pronamic\WordPress\Documentor\TestClass | Test object. |
+----------+------+-------------+

test_{$from}_to_{$to}
---------------------

*Test tag with var and underscores in markdown.*



+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $test | \Pronamic\WordPress\Documentor\TestClass | Test object. |
+----------+------+-------------+

test_{$this->dummy}
-------------------

*Test tag with property fetch.*



+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $test | \Pronamic\WordPress\Documentor\TestClass | Test object. |
+----------+------+-------------+

test_since
----------

*Test tag with property fetch.*



+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $test | \Pronamic\WordPress\Documentor\TestClass | Test object. |
+----------+------+-------------+

test_union_types
----------------

*Test union types.*



+----------+------+-------------+
| Argument | Type | Description |
+==========+======+=============+
| $value | int|string | Union type value, integer or string. |
+----------+------+-------------+


