# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.3.0] - 2022-07-18
### Fixed
- Files can now also be excluded via the `--exclude` option. ( [#13](https://github.com/pronamic/wp-documentor/issues/13) )

### Added
- Added support for the `@ignore` tag. ( [#14](https://github.com/pronamic/wp-documentor/issues/14) )

## [1.2.0] - 2022-01-27
### Fixed
- List of arguments is empty when `apply_filters` is returned instead of assigned to variable (props [@LuigiPulcini](https://github.com/LuigiPulcini)). ( [#11](https://github.com/pronamic/wp-documentor/issues/11) )

### Added
- Added `--prefix` option (props [@LuigiPulcini](https://github.com/LuigiPulcini)). ( [#10](https://github.com/pronamic/wp-documentor/pull/10) )

## [1.1.1] - 2021-06-10
### Changed
- Progress bar now shows the file being processed.

## [1.1.0] - 2014-04-16
### Added
- Added `--exclude` option.
- Added `--ignore-vcs-ignored` option.
- Added progress bar.

### Changed.
- Improved coding standards.

## [1.0.0] - 2021-04-14
### Added
- First Release.

[Unreleased]: https://github.com/pronamic/wp-documentor/compare/1.3.0...HEAD
[1.3.0]: https://github.com/pronamic/wp-documentor/compare/1.2.0...1.3.0
[1.2.0]: https://github.com/pronamic/wp-documentor/compare/1.1.1...1.2.0
[1.1.1]: https://github.com/pronamic/wp-documentor/compare/1.1.0...1.1.1
[1.1.0]: https://github.com/pronamic/wp-documentor/compare/1.0.0...1.1.0
[1.0.0]: https://github.com/pronamic/wp-documentor/releases/tag/1.0.0
