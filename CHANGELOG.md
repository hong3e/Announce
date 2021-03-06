# Announcements Plugin Change Log

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/)
specification.

--------------------------------------------------------------------------------

## [Unreleased]

### Added

- German translation
  ([#15](https://github.com/mantisbt-plugins/Announce/issues/15))
- Schema update to cleanup orphan records in dismissed table
  [#17](https://github.com/mantisbt-plugins/Announce/issues/17))

### Changed

- Improve error handling of announcements dismissals

### Removed

- Unused language strings

### Fixed

- Setting of Dismissable property when adding a new Context
  ([#18](https://github.com/mantisbt-plugins/Announce/issues/18),
  [#19](https://github.com/mantisbt-plugins/Announce/issues/19))
- Cascade delete Dismissals when removing a Context or Message
  [#17](https://github.com/mantisbt-plugins/Announce/issues/17))
- Time-to-live for non-dismissable announcements
  ([#16](https://github.com/mantisbt-plugins/Announce/issues/16))


## [2.1.0] - 2017-10-16

### Added

- Implement automatic delayed dismissal
  ([#10](https://github.com/mantisbt-plugins/Announce/issues/10))
- Logging errors on dismissal AJAX to javascript console
  ([#12](https://github.com/mantisbt-plugins/Announce/issues/12))
- Warn admin when configured threshold is lower than '$g_manage_site_threshold'
  ([#14](https://github.com/mantisbt-plugins/Announce/issues/14))

### Changed

- Increase and fix size of Title input field
  ([#13](https://github.com/mantisbt-plugins/Announce/issues/13))

### Fixed

- Markdown rendering in List view
  ([#9](https://github.com/mantisbt-plugins/Announce/issues/9))
- Announcement dismissal not working with detailed *$g_display_error_ settings
  ([#11](https://github.com/mantisbt-plugins/Announce/issues/11))


## [2.0.0] - 2017-07-02

### Added

- Support for MantisBT 2.0
- Screenshots to README file
  ([#4](https://github.com/mantisbt-plugins/Announce/issues/4))

### Removed

- Support for MantisBT 1.3

### Fixed

- Highlight menu item on manage page
  ([#8](https://github.com/mantisbt-plugins/Announce/issues/8))


## [1.0.0] - 2017-06-20

### Added

- Support for MantisBT 1.3

### Removed

- Support for MantisBT 1.2


## [0.3] - 2014-08-12

### Added

- Chinese translation


## [0.2] - 2014-03-19

### Added

- Dismissal timestamps, allowing edited announcements to be shown again,
  until users dismiss them a second time


## [0.1] - 2010-06-19

### Added

- Initial release


[Unreleased]: https://github.com/mantisbt-plugins/Announce/compare/v2.1.0...HEAD

[2.1.0]: https://github.com/mantisbt-plugins/Announce/compare/v2.0.0...v2.1.0
[2.0.0]: https://github.com/mantisbt-plugins/Announce/compare/v1.0.0...v2.0.0
[1.0.0]: https://github.com/mantisbt-plugins/Announce/compare/v0.3...v1.0.0
[0.3]: https://github.com/mantisbt-plugins/Announce/compare/v0.2...v0.3
[0.2]: https://github.com/mantisbt-plugins/Announce/compare/v0.1...v0.2
[0.1]: https://github.com/mantisbt-plugins/Announce/compare/2691884669c6cccf8b51bc1fdc1124d847dbd1d6...v0.1
