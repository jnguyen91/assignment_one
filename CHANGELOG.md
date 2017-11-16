# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## [Unreleased]

## 0.0.5 - 2017 -11 -12
### Added

  -Added phpunit testing for all models (Fleet, Plane, Flight).
  -Minor changes in the Airport and Flight entity classes
  -Added unit testing for the Airport entity class



## 0.0.4 - 2017-11-12
### Added
- View
  - User roles are now selectable from the navigation bar
  - User roles are indicated along with the page headings

- Controller
  - Added the Roles controller for the user roles using session

### Removed
- View
  - Unused views are deleted

## 0.0.3 - 2017-11-12
### Changed
- Other
  - Stylised the look of the web app

## 0.0.2 - 2017-11-12
### Added
- Model
  - Entity models (Airplane, Airport, Flight)
  - Model to retrieve shared data from the WACKY server

### Changed
- Model
  - Airplanes, Airports, and Flights models now extend CSV_Model, i.e., gets data from the CSV files
  - The models have CI rules based on constraints defined in the entity models

## 0.0.1 - 2017-11-12
### Added
- Other
  - Included the core models
  - Transformed mock data from v1.0.0 into CSV

[Unreleased]: https://github.com/comp4711-asn1/assignment_one
[1.0.0]: https://github.com/comp4711-asn1/assignment_one/releases/tag/1.0
