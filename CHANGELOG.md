# Changelog

## [2.0.2] - 2018-10-07
### Fixed
- Fixed object serialization so it casts values to the their appropriate type. 

## [2.0.1] - 2018-09-20
### Fixed
- Fixed issue with abstract classes not including an xsi:type attribute when converted to XML.
- Fixed issue with XML generation on some versions of PHP not properly setting text elements.

## [2.0.0] - 2018-07-22
### Changed
- Instances of ErrorResponse are no longer returned by request calls. If the server returns an ErrorResponse, an instance of ErrorResponseException is now thrown.

## [1.1.0] - 2018-07-03
### Fixed
- Fixed mistakes in comments and phpdoc annotations caused by errors in source XSD files.

### Added
- OcipClient now exposes helper methods for every request object.

[2.0.2]: https://github.com/cwmiller/broadworks-connector/compare/2.0.1...2.0.2
[2.0.1]: https://github.com/cwmiller/broadworks-connector/compare/2.0...2.0.1
[2.0.0]: https://github.com/cwmiller/broadworks-connector/compare/1.1...2.0
[1.1.0]: https://github.com/cwmiller/broadworks-connector/compare/1.0...1.1