# Hooks

- [Actions](#actions)
- [Filters](#filters)

## Actions

### pre_trackback_post

*Fires before the trackback is added to a post.*



Argument | Type | Description
-------- | ---- | -----------
`$tb_id` | `int` | Post ID related to the trackback.
`$tb_url` | `string` | Trackback URL.
`$charset` | `string` | Character Set.
`$title` | `string` | Trackback Title.
`$excerpt` | `string` | Trackback Excerpt.
`$blog_name` | `string` | Blog Name.

Source: [wordpress/wp-trackback.php](../../wordpress/wp-trackback.php), [line 98](../../wordpress/wp-trackback.php#L98-L110)

### trackback_post

*Fires after a trackback is added to a post.*



Argument | Type | Description
-------- | ---- | -----------
`$trackback_id` | `int` | Trackback ID.

Source: [wordpress/wp-trackback.php](../../wordpress/wp-trackback.php), [line 143](../../wordpress/wp-trackback.php#L143-L150)

### {$hook}

*Fires scheduled events.*



Argument | Type | Description
-------- | ---- | -----------
`$v['args']` |  | 

Source: [wordpress/wp-cron.php](../../wordpress/wp-cron.php), [line 129](../../wordpress/wp-cron.php#L129-L138)

### activate_header

*Fires before the Site Activation page is loaded.*




Source: [wordpress/wp-activate.php](../../wordpress/wp-activate.php), [line 74](../../wordpress/wp-activate.php#L74-L79)

### activate_wp_head

*Fires before the Site Activation page is loaded.*

Fires on the %1$s action.


Source: [wordpress/wp-activate.php](../../wordpress/wp-activate.php), [line 89](../../wordpress/wp-activate.php#L89-L96)

### xmlrpc_rsd_apis

*Add additional APIs to the Really Simple Discovery (RSD) endpoint.*




Source: [wordpress/xmlrpc.php](../../wordpress/xmlrpc.php), [line 48](../../wordpress/xmlrpc.php#L48-L55)

### opml_head

*Fires in the OPML header.*




Source: [wordpress/wp-links-opml.php](../../wordpress/wp-links-opml.php), [line 38](../../wordpress/wp-links-opml.php#L38-L43)

### wp-mail.php

*Fires to allow a plugin to do a complete takeover of Post by Email.*




Source: [wordpress/wp-mail.php](../../wordpress/wp-mail.php), [line 24](../../wordpress/wp-mail.php#L24-L29)

### publish_phone

*Fires after a post submitted by email is published.*



Argument | Type | Description
-------- | ---- | -----------
`$post_ID` | `int` | The post ID.

Source: [wordpress/wp-mail.php](../../wordpress/wp-mail.php), [line 235](../../wordpress/wp-mail.php#L235-L242)

### mu_plugin_loaded

*Fires once a single must-use plugin has loaded.*



Argument | Type | Description
-------- | ---- | -----------
`$mu_plugin` | `string` | Full path to the plugin's main file.

Source: [wordpress/wp-settings.php](../../wordpress/wp-settings.php), [line 324](../../wordpress/wp-settings.php#L324-L331)

### network_plugin_loaded

*Fires once a single network-activated plugin has loaded.*



Argument | Type | Description
-------- | ---- | -----------
`$network_plugin` | `string` | Full path to the plugin's main file.

Source: [wordpress/wp-settings.php](../../wordpress/wp-settings.php), [line 341](../../wordpress/wp-settings.php#L341-L348)

### muplugins_loaded

*Fires once all must-use and network-activated plugins have loaded.*




Source: [wordpress/wp-settings.php](../../wordpress/wp-settings.php), [line 353](../../wordpress/wp-settings.php#L353-L358)

### plugin_loaded

*Fires once a single activated plugin has loaded.*



Argument | Type | Description
-------- | ---- | -----------
`$plugin` | `string` | Full path to the plugin's main file.

Source: [wordpress/wp-settings.php](../../wordpress/wp-settings.php), [line 393](../../wordpress/wp-settings.php#L393-L400)

### plugins_loaded

*Fires once activated plugins have loaded.*

Pluggable functions are also available at this point in the loading order.


Source: [wordpress/wp-settings.php](../../wordpress/wp-settings.php), [line 416](../../wordpress/wp-settings.php#L416-L423)

### sanitize_comment_cookies

*Fires when comment cookies are sanitized.*




Source: [wordpress/wp-settings.php](../../wordpress/wp-settings.php), [line 431](../../wordpress/wp-settings.php#L431-L436)

### setup_theme

*Fires before the theme is loaded.*




Source: [wordpress/wp-settings.php](../../wordpress/wp-settings.php), [line 487](../../wordpress/wp-settings.php#L487-L492)

### after_setup_theme

*Fires after the theme is loaded.*




Source: [wordpress/wp-settings.php](../../wordpress/wp-settings.php), [line 533](../../wordpress/wp-settings.php#L533-L538)

### init

*Fires after WordPress has finished loading but before any headers are sent.*

Most of WP is loaded at this stage, and the user is authenticated. WP continues
to load on the %1$s hook that follows (e.g. widgets), and many plugins instantiate
themselves on it for all sorts of reasons (e.g. they need a user, a taxonomy, etc.).

If you wish to plug an action once WP is loaded, use the %2$s hook below.


Source: [wordpress/wp-settings.php](../../wordpress/wp-settings.php), [line 549](../../wordpress/wp-settings.php#L549-L560)

### wp_loaded

*This hook is fired once WP, all plugins, and the theme are fully loaded and instantiated.*

Ajax requests should use wp-admin/admin-ajax.php. admin-ajax.php can handle requests for
users not logged in.


Source: [wordpress/wp-settings.php](../../wordpress/wp-settings.php), [line 572](../../wordpress/wp-settings.php#L572-L582)

### set_comment_cookies

*Perform other actions when comment cookies are set.*



Argument | Type | Description
-------- | ---- | -----------
`$comment` | `\WP_Comment` | Comment object.
`$user` | `\WP_User` | Comment author's user object. The user may not exist.
`$cookies_consent` | `bool` | Comment author's consent to store cookies.

Source: [wordpress/wp-comments-post.php](../../wordpress/wp-comments-post.php), [line 45](../../wordpress/wp-comments-post.php#L45-L55)

### sidebar_admin_setup

*Fires early before the Widgets administration screen loads,
after scripts are enqueued.*




Source: [wordpress/wp-admin/widgets.php](../../wordpress/wp-admin/widgets.php), [line 41](../../wordpress/wp-admin/widgets.php#L41-L47)

### delete_widget

*Fires immediately after a widget has been marked for deletion.*



Argument | Type | Description
-------- | ---- | -----------
`$widget_id` | `string` | ID of the widget marked for deletion.
`$sidebar_id` | `string` | ID of the sidebar the widget was deleted from.
`$id_base` | `string` | ID base for the widget.

Source: [wordpress/wp-admin/widgets.php](../../wordpress/wp-admin/widgets.php), [line 176](../../wordpress/wp-admin/widgets.php#L176-L185)

### widgets_admin_page

*Fires before the Widgets administration page content loads.*




Source: [wordpress/wp-admin/widgets.php](../../wordpress/wp-admin/widgets.php), [line 429](../../wordpress/wp-admin/widgets.php#L429-L434)

### sidebar_admin_page

*Fires after the available widgets and sidebars have loaded, before the admin footer.*




Source: [wordpress/wp-admin/widgets.php](../../wordpress/wp-admin/widgets.php), [line 576](../../wordpress/wp-admin/widgets.php#L576-L581)

### update-custom_{$action}

*Fires when a custom plugin or theme update request is received.*

The dynamic portion of the hook name, `$action`, refers to the action
provided in the request for wp-admin/update.php. Can be used to
provide custom update functionality for themes and plugins.


Source: [wordpress/wp-admin/update.php](../../wordpress/wp-admin/update.php), [line 343](../../wordpress/wp-admin/update.php#L343-L352)

### admin_enqueue_scripts

*Enqueue scripts for all admin pages.*



Argument | Type | Description
-------- | ---- | -----------
`$hook_suffix` | `string` | The current admin page.

Source: [wordpress/wp-admin/admin-header.php](../../wordpress/wp-admin/admin-header.php), [line 95](../../wordpress/wp-admin/admin-header.php#L95-L102)

### admin_print_styles-{$hook_suffix}

*Fires when styles are printed for a specific admin page based on $hook_suffix.*




Source: [wordpress/wp-admin/admin-header.php](../../wordpress/wp-admin/admin-header.php), [line 104](../../wordpress/wp-admin/admin-header.php#L104-L109)

### admin_print_styles

*Fires when styles are printed for all admin pages.*




Source: [wordpress/wp-admin/admin-header.php](../../wordpress/wp-admin/admin-header.php), [line 111](../../wordpress/wp-admin/admin-header.php#L111-L116)

### admin_print_scripts-{$hook_suffix}

*Fires when scripts are printed for a specific admin page based on $hook_suffix.*




Source: [wordpress/wp-admin/admin-header.php](../../wordpress/wp-admin/admin-header.php), [line 118](../../wordpress/wp-admin/admin-header.php#L118-L123)

### admin_print_scripts

*Fires when scripts are printed for all admin pages.*




Source: [wordpress/wp-admin/admin-header.php](../../wordpress/wp-admin/admin-header.php), [line 125](../../wordpress/wp-admin/admin-header.php#L125-L130)

### admin_head-{$hook_suffix}

*Fires in head section for a specific admin page.*

The dynamic portion of the hook, `$hook_suffix`, refers to the hook suffix
for the admin page.


Source: [wordpress/wp-admin/admin-header.php](../../wordpress/wp-admin/admin-header.php), [line 132](../../wordpress/wp-admin/admin-header.php#L132-L140)

### admin_head

*Fires in head section for all admin pages.*




Source: [wordpress/wp-admin/admin-header.php](../../wordpress/wp-admin/admin-header.php), [line 142](../../wordpress/wp-admin/admin-header.php#L142-L147)

### in_admin_header

*Fires at the beginning of the content section in an admin page.*




Source: [wordpress/wp-admin/admin-header.php](../../wordpress/wp-admin/admin-header.php), [line 247](../../wordpress/wp-admin/admin-header.php#L247-L252)

### network_admin_notices

*Prints network admin screen notices.*




Source: [wordpress/wp-admin/admin-header.php](../../wordpress/wp-admin/admin-header.php), [line 269](../../wordpress/wp-admin/admin-header.php#L269-L274)

### user_admin_notices

*Prints user admin screen notices.*




Source: [wordpress/wp-admin/admin-header.php](../../wordpress/wp-admin/admin-header.php), [line 276](../../wordpress/wp-admin/admin-header.php#L276-L281)

### admin_notices

*Prints admin screen notices.*




Source: [wordpress/wp-admin/admin-header.php](../../wordpress/wp-admin/admin-header.php), [line 283](../../wordpress/wp-admin/admin-header.php#L283-L288)

### all_admin_notices

*Prints generic admin screen notices.*




Source: [wordpress/wp-admin/admin-header.php](../../wordpress/wp-admin/admin-header.php), [line 291](../../wordpress/wp-admin/admin-header.php#L291-L296)

### in_admin_footer

*Fires after the opening tag for the admin footer.*




Source: [wordpress/wp-admin/admin-footer.php](../../wordpress/wp-admin/admin-footer.php), [line 26](../../wordpress/wp-admin/admin-footer.php#L26-L31)

### admin_footer

*Prints scripts or data before the default footer scripts.*



Argument | Type | Description
-------- | ---- | -----------
`''` |  | 

Source: [wordpress/wp-admin/admin-footer.php](../../wordpress/wp-admin/admin-footer.php), [line 71](../../wordpress/wp-admin/admin-footer.php#L71-L78)

### admin_print_footer_scripts-{$hook_suffix}

*Prints scripts and data queued for the footer.*

The dynamic portion of the hook name, `$hook_suffix`,
refers to the global hook suffix of the current page.


Source: [wordpress/wp-admin/admin-footer.php](../../wordpress/wp-admin/admin-footer.php), [line 80](../../wordpress/wp-admin/admin-footer.php#L80-L88)

### admin_print_footer_scripts

*Prints any scripts and data queued for the footer.*




Source: [wordpress/wp-admin/admin-footer.php](../../wordpress/wp-admin/admin-footer.php), [line 90](../../wordpress/wp-admin/admin-footer.php#L90-L95)

### admin_footer-{$hook_suffix}

*Prints scripts or data after the default footer scripts.*

The dynamic portion of the hook name, `$hook_suffix`,
refers to the global hook suffix of the current page.


Source: [wordpress/wp-admin/admin-footer.php](../../wordpress/wp-admin/admin-footer.php), [line 97](../../wordpress/wp-admin/admin-footer.php#L97-L105)

### post_edit_form_tag

*Fires inside the post editor form tag.*



Argument | Type | Description
-------- | ---- | -----------
`$post` | `\WP_Post` | Post object.

Source: [wordpress/wp-admin/edit-form-advanced.php](../../wordpress/wp-admin/edit-form-advanced.php), [line 456](../../wordpress/wp-admin/edit-form-advanced.php#L456-L463)

### edit_form_top

*Fires at the beginning of the edit form.*

At this point, the required hidden fields and nonces have already been output.

Argument | Type | Description
-------- | ---- | -----------
`$post` | `\WP_Post` | Post object.

Source: [wordpress/wp-admin/edit-form-advanced.php](../../wordpress/wp-admin/edit-form-advanced.php), [line 491](../../wordpress/wp-admin/edit-form-advanced.php#L491-L500)

### edit_form_before_permalink

*Fires before the permalink field in the edit form.*



Argument | Type | Description
-------- | ---- | -----------
`$post` | `\WP_Post` | Post object.

Source: [wordpress/wp-admin/edit-form-advanced.php](../../wordpress/wp-admin/edit-form-advanced.php), [line 525](../../wordpress/wp-admin/edit-form-advanced.php#L525-L532)

### edit_form_after_title

*Fires after the title field.*



Argument | Type | Description
-------- | ---- | -----------
`$post` | `\WP_Post` | Post object.

Source: [wordpress/wp-admin/edit-form-advanced.php](../../wordpress/wp-admin/edit-form-advanced.php), [line 574](../../wordpress/wp-admin/edit-form-advanced.php#L574-L581)

### edit_form_after_editor

*Fires after the content editor.*



Argument | Type | Description
-------- | ---- | -----------
`$post` | `\WP_Post` | Post object.

Source: [wordpress/wp-admin/edit-form-advanced.php](../../wordpress/wp-admin/edit-form-advanced.php), [line 642](../../wordpress/wp-admin/edit-form-advanced.php#L642-L649)

### submitpage_box

*Fires before meta boxes with 'side' context are output for the 'page' post type.*

The submitpage box is a meta box with 'side' context, so this hook fires just before it is output.

Argument | Type | Description
-------- | ---- | -----------
`$post` | `\WP_Post` | Post object.

Source: [wordpress/wp-admin/edit-form-advanced.php](../../wordpress/wp-admin/edit-form-advanced.php), [line 657](../../wordpress/wp-admin/edit-form-advanced.php#L657-L666)

### submitpost_box

*Fires before meta boxes with 'side' context are output for all post types other than 'page'.*

The submitpost box is a meta box with 'side' context, so this hook fires just before it is output.

Argument | Type | Description
-------- | ---- | -----------
`$post` | `\WP_Post` | Post object.

Source: [wordpress/wp-admin/edit-form-advanced.php](../../wordpress/wp-admin/edit-form-advanced.php), [line 668](../../wordpress/wp-admin/edit-form-advanced.php#L668-L677)

### edit_page_form

*Fires after 'normal' context meta boxes have been output for the 'page' post type.*



Argument | Type | Description
-------- | ---- | -----------
`$post` | `\WP_Post` | Post object.

Source: [wordpress/wp-admin/edit-form-advanced.php](../../wordpress/wp-admin/edit-form-advanced.php), [line 691](../../wordpress/wp-admin/edit-form-advanced.php#L691-L698)

### edit_form_advanced

*Fires after 'normal' context meta boxes have been output for all post types other than 'page'.*



Argument | Type | Description
-------- | ---- | -----------
`$post` | `\WP_Post` | Post object.

Source: [wordpress/wp-admin/edit-form-advanced.php](../../wordpress/wp-admin/edit-form-advanced.php), [line 700](../../wordpress/wp-admin/edit-form-advanced.php#L700-L707)

### dbx_post_sidebar

*Fires after all meta box sections have been output, before the closing #post-body div.*



Argument | Type | Description
-------- | ---- | -----------
`$post` | `\WP_Post` | Post object.

Source: [wordpress/wp-admin/edit-form-advanced.php](../../wordpress/wp-admin/edit-form-advanced.php), [line 716](../../wordpress/wp-admin/edit-form-advanced.php#L716-L723)

### blog_privacy_selector

*This action is documented in wp-admin/options-reading.php*




Source: [wordpress/wp-admin/install.php](../../wordpress/wp-admin/install.php), [line 195](../../wordpress/wp-admin/install.php#L195-L196)

### welcome_panel

*Add content to the welcome panel on the admin dashboard.*

To remove the default welcome panel, use remove_action():

remove_action( 'welcome_panel', 'wp_welcome_panel' );


Source: [wordpress/wp-admin/index.php](../../wordpress/wp-admin/index.php), [line 166](../../wordpress/wp-admin/index.php#L166-L175)

### wp_authorize_application_password_form_approved_no_js

*Fires in the Authorize Application Password new password section in the no-JS version.*

In most cases, this should be used in combination with the %1$s
action to ensure that both the JS and no-JS variants are handled.

Argument | Type | Description
-------- | ---- | -----------
`$new_password` | `string` | The newly generated application password.
`$request` | `array` | The array of request data. All arguments are optional and may be empty.
`$user` | `\WP_User` | The user authorizing the application.

Source: [wordpress/wp-admin/authorize-application.php](../../wordpress/wp-admin/authorize-application.php), [line 202](../../wordpress/wp-admin/authorize-application.php#L202-L215)

### wp_authorize_application_password_form

*Fires in the Authorize Application Password form before the submit buttons.*



Argument | Type | Description
-------- | ---- | -----------
`$request` | `array` | {
    The array of request data. All arguments are optional and may be empty.

    @type string $app_name    The suggested name of the application.
    @type string $success_url The url the user will be redirected to after approving the application.
    @type string $reject_url  The url the user will be redirected to after rejecting the application.
}
`$user` | `\WP_User` | The user authorizing the application.

Source: [wordpress/wp-admin/authorize-application.php](../../wordpress/wp-admin/authorize-application.php), [line 231](../../wordpress/wp-admin/authorize-application.php#L231-L245)

### post_action_{$action}

*Fires for a given custom post action request.*

The dynamic portion of the hook name, `$action`, refers to the custom post action.

Argument | Type | Description
-------- | ---- | -----------
`$post_id` | `int` | Post ID sent with the request.

Source: [wordpress/wp-admin/post.php](../../wordpress/wp-admin/post.php), [line 354](../../wordpress/wp-admin/post.php#L354-L363)

### media_upload_{$type}

*Fires inside specific upload-type views in the legacy (pre-3.5.0)
media popup based on the current tab.*

The dynamic portion of the hook name, `$type`, refers to the specific
media upload type. Possible values include 'image', 'audio', 'video',
'file', etc.

The hook only fires if the current `$tab` is 'type' (From Computer),
'type_url' (From URL), or, if the tab does not exist (i.e., has not
been registered via the %1$s filter.


Source: [wordpress/wp-admin/media-upload.php](../../wordpress/wp-admin/media-upload.php), [line 85](../../wordpress/wp-admin/media-upload.php#L85-L99)

### media_upload_{$tab}

*Fires inside limited and specific upload-tab views in the legacy
(pre-3.5.0) media popup.*

The dynamic portion of the hook name, `$tab`, refers to the specific
media upload tab. Possible values include 'library' (Media Library),
or any custom tab registered via the %1$s filter.


Source: [wordpress/wp-admin/media-upload.php](../../wordpress/wp-admin/media-upload.php), [line 101](../../wordpress/wp-admin/media-upload.php#L101-L111)

### blog_privacy_selector

*Enable the legacy 'Site visibility' privacy options.*

By default the privacy options form displays a single checkbox to 'discourage' search
engines from indexing the site. Hooking to this action serves a dual purpose:
1. Disable the single checkbox in favor of a multiple-choice list of radio buttons.
2. Open the door to adding additional radio button choices to the list.

Hooking to this action also converts the 'Search engine visibility' heading to the more
open-ended 'Site visibility' heading.


Source: [wordpress/wp-admin/options-reading.php](../../wordpress/wp-admin/options-reading.php), [line 188](../../wordpress/wp-admin/options-reading.php#L188-L201)

### export_filters

*Fires at the end of the export filters form.*




Source: [wordpress/wp-admin/export.php](../../wordpress/wp-admin/export.php), [line 312](../../wordpress/wp-admin/export.php#L312-L317)

### wpmuadminedit

*This action is documented in wp-admin/network/edit.php*




Source: [wordpress/wp-admin/network/sites.php](../../wordpress/wp-admin/network/sites.php), [line 59](../../wordpress/wp-admin/network/sites.php#L59-L60)

### activate_blog

*Fires after a network site is activated.*



Argument | Type | Description
-------- | ---- | -----------
`$id` | `string` | The ID of the activated site.

Source: [wordpress/wp-admin/network/sites.php](../../wordpress/wp-admin/network/sites.php), [line 258](../../wordpress/wp-admin/network/sites.php#L258-L265)

### deactivate_blog

*Fires before a network site is deactivated.*



Argument | Type | Description
-------- | ---- | -----------
`$id` | `string` | The ID of the site being deactivated.

Source: [wordpress/wp-admin/network/sites.php](../../wordpress/wp-admin/network/sites.php), [line 269](../../wordpress/wp-admin/network/sites.php#L269-L276)

### wpmuadminedit

*This action is documented in wp-admin/network/edit.php*




Source: [wordpress/wp-admin/network/settings.php](../../wordpress/wp-admin/network/settings.php), [line 68](../../wordpress/wp-admin/network/settings.php#L68-L69)

### update_wpmu_options

*Fires after the network options are updated.*




Source: [wordpress/wp-admin/network/settings.php](../../wordpress/wp-admin/network/settings.php), [line 127](../../wordpress/wp-admin/network/settings.php#L127-L132)

### wpmu_options

*Fires at the end of the Network Settings form, before the submit button.*




Source: [wordpress/wp-admin/network/settings.php](../../wordpress/wp-admin/network/settings.php), [line 495](../../wordpress/wp-admin/network/settings.php#L495-L500)

### pre_network_site_new_created_user

*Fires immediately before a new user is created via the network site-new.php page.*



Argument | Type | Description
-------- | ---- | -----------
`$email` | `string` | Email of the non-existent user.

Source: [wordpress/wp-admin/network/site-new.php](../../wordpress/wp-admin/network/site-new.php), [line 110](../../wordpress/wp-admin/network/site-new.php#L110-L117)

### network_site_new_created_user

*Fires after a new user has been created via the network site-new.php page.*



Argument | Type | Description
-------- | ---- | -----------
`$user_id` | `int` | ID of the newly created user.

Source: [wordpress/wp-admin/network/site-new.php](../../wordpress/wp-admin/network/site-new.php), [line 129](../../wordpress/wp-admin/network/site-new.php#L129-L136)

### network_site_new_form

*Fires at the end of the new site form in network admin.*




Source: [wordpress/wp-admin/network/site-new.php](../../wordpress/wp-admin/network/site-new.php), [line 268](../../wordpress/wp-admin/network/site-new.php#L268-L273)

### after_mu_upgrade

*Fires after the Multisite DB upgrade for each site is complete.*



Argument | Type | Description
-------- | ---- | -----------
`$response` | `array|\WP_Error` | The upgrade response array or WP_Error on failure.

Source: [wordpress/wp-admin/network/upgrade.php](../../wordpress/wp-admin/network/upgrade.php), [line 105](../../wordpress/wp-admin/network/upgrade.php#L105-L112)

### wpmu_upgrade_site

*Fires after each site has been upgraded.*



Argument | Type | Description
-------- | ---- | -----------
`$site_id` | `int` | The Site ID.

Source: [wordpress/wp-admin/network/upgrade.php](../../wordpress/wp-admin/network/upgrade.php), [line 114](../../wordpress/wp-admin/network/upgrade.php#L114-L121)

### wpmu_upgrade_page

*Fires before the footer on the network upgrade screen.*




Source: [wordpress/wp-admin/network/upgrade.php](../../wordpress/wp-admin/network/upgrade.php), [line 146](../../wordpress/wp-admin/network/upgrade.php#L146-L151)

### wpmuadminedit

*This action is documented in wp-admin/network/edit.php*




Source: [wordpress/wp-admin/network/users.php](../../wordpress/wp-admin/network/users.php), [line 18](../../wordpress/wp-admin/network/users.php#L18-L19)

### wpmu_update_blog_options

*Fires after the site options are updated.*



Argument | Type | Description
-------- | ---- | -----------
`$id` | `int` | The ID of the site being updated.

Source: [wordpress/wp-admin/network/site-settings.php](../../wordpress/wp-admin/network/site-settings.php), [line 52](../../wordpress/wp-admin/network/site-settings.php#L52-L60)

### wpmueditblogaction

*Fires at the end of the Edit Site form, before the submit button.*



Argument | Type | Description
-------- | ---- | -----------
`$id` | `int` | Site ID.

Source: [wordpress/wp-admin/network/site-settings.php](../../wordpress/wp-admin/network/site-settings.php), [line 166](../../wordpress/wp-admin/network/site-settings.php#L166-L173)

### network_user_new_created_user

*Fires after a new user has been created via the network user-new.php page.*



Argument | Type | Description
-------- | ---- | -----------
`$user_id` | `int` | ID of the newly created user.

Source: [wordpress/wp-admin/network/user-new.php](../../wordpress/wp-admin/network/user-new.php), [line 57](../../wordpress/wp-admin/network/user-new.php#L57-L64)

### network_user_new_form

*Fires at the end of the new user form in network admin.*




Source: [wordpress/wp-admin/network/user-new.php](../../wordpress/wp-admin/network/user-new.php), [line 140](../../wordpress/wp-admin/network/user-new.php#L140-L145)

### wpmuadminedit

*Fires just before the action handler in several Network Admin screens.*

This hook fires on multiple screens in the Multisite Network Admin,
including Users, Network Settings, and Site Settings.


Source: [wordpress/wp-admin/network/edit.php](../../wordpress/wp-admin/network/edit.php), [line 20](../../wordpress/wp-admin/network/edit.php#L20-L28)

### network_admin_edit_{$action}

*Fires the requested handler action.*

The dynamic portion of the hook name, `$action`, refers to the name
of the requested action derived from the `GET` request.


Source: [wordpress/wp-admin/network/edit.php](../../wordpress/wp-admin/network/edit.php), [line 30](../../wordpress/wp-admin/network/edit.php#L30-L38)

### network_site_info_form

*Fires at the end of the site info form in network admin.*



Argument | Type | Description
-------- | ---- | -----------
`$id` | `int` | The site ID.

Source: [wordpress/wp-admin/network/site-info.php](../../wordpress/wp-admin/network/site-info.php), [line 207](../../wordpress/wp-admin/network/site-info.php#L207-L214)

### network_site_users_created_user

*Fires after a user has been created via the network site-users.php page.*



Argument | Type | Description
-------- | ---- | -----------
`$user_id` | `int` | ID of the newly created user.

Source: [wordpress/wp-admin/network/site-users.php](../../wordpress/wp-admin/network/site-users.php), [line 81](../../wordpress/wp-admin/network/site-users.php#L81-L88)

### network_site_users_after_list_table

*Fires after the list table on the Users screen in the Multisite Network Admin.*




Source: [wordpress/wp-admin/network/site-users.php](../../wordpress/wp-admin/network/site-users.php), [line 288](../../wordpress/wp-admin/network/site-users.php#L288-L293)

### after_menu_locations_table

*Fires after the menu locations table is displayed.*




Source: [wordpress/wp-admin/nav-menus.php](../../wordpress/wp-admin/nav-menus.php), [line 814](../../wordpress/wp-admin/nav-menus.php#L814-L819)

### 