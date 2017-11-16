# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)

## - SC
### Added
- converted some tasks to xml

## [Unreleased] - YR
### Added
- Many more tests in tasktest.php

## [Unreleased] - YR
### Changed
- Fixed models/Task.php to check if string for task name

### Added
- Many more tests in tasktest.php

## [Unreleased] - YR
### Moved
- Entity.php from application/models to application/core

### Added
- Get magic method to entity class
- Get methods for each variable in task class
- Require Once to Task class as Entity was moved to core folder from models

## Changed
- Autoload to remove Entity from models array
- TaskTest to utilise the magic methods, as before they were using the methods directly

## [Unreleased] - SC
### Added
- .travis.yml

## [Unreleased] - YR
### Changed
- PHPunitxml.dist, to generate report

### Added
- Report generated

## [Unreleased] - YR
### Added
- TaskListTest, finished to test tasks class

## [Unreleased] - YR
### Changed
- Commented out exceptions in Task Class
- Added entity to autoload
### Added
- TaskTest, finished to test task class

## [Unreleased] - SC
### Changed
- Added exceptions to Task class
- made properties public

## [Unreleased] - SC
### Added
- Entity Class
- Task class that extends entity and has setter methods

## [Unreleased] - YR 
### Update
- Size, group, and status in form to add a new todo item

## [Unreleased] - SC
### Added
- Mtce add/edit/delete methods

### Changed
- Fixed some core/memory_model bugs
- Fixed some models/App bugs

## [Unreleased] - SC
### Added
- Role specific maintenance list: list appears different to guests and owners

## [Unreleased] - YR 
### Update
- controller/views.php complete function which allows for the completion of tasks

### Fixed
- core/memory_model to fix php error

## [Unreleased] - YR 
### Added
- views/itemnav.php

### Updated
- view/itemlist.php
- mtce controller for pagination handling
- mtce controller reworking to work with merge conflict (moved role code into show_page)

## [Unreleased] - SC
### Added
- Roles controller

### Changed
- Changed project to use sessions

## [Unreleased] - SC
### Added
- Mtce (Maintanence Controller)
- views/itemlist.php

### Fixed
- Bootstrap bug

## [Unreleased] - YR
### Added
- Jobs.md
- Added parsedown library
- Helpme controller

## [Unreleased] - SC
### Changed
- Fixed template_secondary to have menubar and copyright

## [Unreleased] - SC
### Added
- Views controller
- by_priority view
- by_category view

## [Unreleased] - YR
### Added
- Completed Job 2 (Shows tasks in table, and number of tasks remaining)

## [Unreleased] - SC
### Added
- changelog.md
- Tasks model

