<p align="center">
	<a href="https://github.com/pronamic/wp-documentor">
		<img src="logos/pronamic-wp-documentor.svgo-min.svg" alt="Pronamic WordPress Documentor" width="128" height="128">
	</a>
</p>

<h1 align="center">Pronamic WordPress Documentor</h3>

<p align="center">
	Pronamic WordPress Documentor is a tool to automatically extract data about the <strong>actions</strong> and <strong>filters</strong> of your WordPress theme or plugin.	
</p>

[![Latest Stable Version](https://poser.pugx.org/pronamic/wp-documentor/v)](//packagist.org/packages/pronamic/wp-documentor)
[![Total Downloads](https://poser.pugx.org/pronamic/wp-documentor/downloads)](//packagist.org/packages/pronamic/wp-documentor)
[![Latest Unstable Version](https://poser.pugx.org/pronamic/wp-documentor/v/unstable)](//packagist.org/packages/pronamic/wp-documentor)
[![License](https://poser.pugx.org/pronamic/wp-documentor/license)](//packagist.org/packages/pronamic/wp-documentor)

## Table of contents

- [Getting Started](#getting-started)
- [Examples](#examples)
- [Alternatives](#alternatives)
- [Links](#links)

## Getting Started

### Installation

To start documenting your WordPress filters and actions, require Pronamic WordPress Documentor in Composer:

```
composer require pronamic/wp-documentor --dev
```

### First Run

To let Pronamic WordPress Documentor analyse your codebase, you have to use the `parse` command and point it to the right directory:

```
vendor/bin/wp-documentor parse src
```

## Command Line Usage

### `--memory-limit`

Specifies the memory limit in the same format `php.ini` accepts.

Example: `--memory-limit=-1`

### `--exclude`

Exclude the specified folders/files.

Example: `--exclude=vendor,wordpress`

### `--ignore-vcs-ignored`

If the search directory contains a .gitignore file, you can reuse those rules to exclude files and directories from the results with this option.

Example: `--ignore-vcs-ignored`

## Examples

```
bin/wp-documentor parse tests/source
bin/wp-documentor parse tests/source --format=hookster-actions
bin/wp-documentor parse tests/source --format=hookster-filters
```

```
bin/wp-documentor parse tests/source --format=hookster --type=actions --output=tests/docs/hookster-actions.json
bin/wp-documentor parse tests/source --format=hookster --type=filters --output=tests/docs/hookster-filters.json
bin/wp-documentor parse tests/source --format=markdown --output=tests/docs/hooks.md
```

```
bin/wp-documentor parse tests/source --format=phpdocumentor-rst --type=actions --output=tests/docs/phpdocumentor-actions.rst
bin/wp-documentor parse tests/source --format=phpdocumentor-rst --type=filters --output=tests/docs/phpdocumentor-filters.rst
```

## Alternatives

Here is a list of alternatives that we found. However, none of these satisfied our requirements.

*If you know other similar projects, feel free to edit this section!*

- [WP Parser](https://github.com/WordPress/phpdoc-parser) by [WordPress](https://github.com/WordPress)
- [Hookster](https://github.com/themeblvd/hookster) by [Theme Blvd](https://github.com/themeblvd)
- [WordPress HookDoc](https://github.com/matzeeable/wp-hookdoc) by [Matthias Günter](https://github.com/matzeeable)
- [GitHub Actions for WordPress](https://github.com/10up/actions-wordpress/blob/stable/hookdocs-workflow.md) by [10up](https://github.com/10up)
- [Yoast Parser](https://github.com/Yoast/code-documentation-extractor) by [Yoast](https://github.com/Yoast)
- [WooCommerce Code Reference Generator](https://github.com/woocommerce/code-reference) by [WooCommerce](https://github.com/woocommerce)

*Inspiration from https://github.com/TypistTech/imposter-plugin#alternatives*

## Links

- https://developer.wordpress.org/plugins/hooks/
- https://developer.wordpress.org/plugins/hooks/actions/
- https://developer.wordpress.org/reference/functions/do_action/
- https://developer.wordpress.org/reference/functions/add_action/
- https://developer.wordpress.org/plugins/hooks/filters/
- https://developer.wordpress.org/reference/functions/apply_filters/
- https://developer.wordpress.org/reference/functions/add_filter/
- https://developer.wordpress.org/reference/hooks/
- https://www.phpdoc.org/
- https://github.com/phpdocumentor/phpdocumentor
- https://symfony.com/doc/current/console.html
- https://symfony.com/doc/current/components/finder.html
- https://developer.wordpress.org/cli/commands/i18n/make-pot/
- https://developer.wordpress.org/cli/commands/i18n/make-json/
- https://github.com/pronamic/deployer/blob/master/bin/pronamic-deployer
- https://gitlab.com/pronamic/wp-updates/-/blob/master/index.php
- https://github.com/wp-pay/core/issues/45
- https://github.com/phpDocumentor/phpDocumentor/issues/2865
- https://github.com/themeblvd/hookster
