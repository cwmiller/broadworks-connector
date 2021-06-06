# Changelog

## [3.1.4] - 2021-06-06
### Added
- Added missing commands UserAnnouncementFileLocationGetRequest and GroupAnnouncementFileLocationGetRequest.

## [3.1.3] - 2021-02-21
### Fixed
- Fixed comments on Enum types being word wrapped and breaking method annotations.

## [3.1.2] - 2020-04-10
### Fixed
- Fixed serialization error when setting a property to NULL when the property's type is abstract.

## [3.1.1] - 2019-07-24
### Fixed
- Fixed login when targeting R22.

## [3.1.0] - 2019-04-06
### Added
- Additional validation checks for fields
  - `LengthException` is thrown when a field's fixed length restriction is not met.
  - `MinLengthException` is thrown when a field's minimum length restriction is not met.
  - `MaxLengthException` is thrown when a field's maximum length restriction is not met.
  - `MinInclusiveException` is thrown when field's value is set below an allowed range.
  - `MaxInclusiveException` is thrown when field's value is set above an allowed range.
  - `PatternException` is thrown when a field's value doesn't match a required pattern.

## [3.0.4] - 2019-03-03
### Fixed
- Fixed issue where the `Validator` was treating array fields as being set when they were empty.

## [3.0.3] - 2019-02-23
### Fixed
- Fixed issue where `ChoiceNotSetException` was being thrown when all members are optional and none are set.

## [3.0.2] - 2019-02-03
### Fixed
- Fixed missing & incorrect return types on traits
- Restored request types that were removed from latest XSD files

## [3.0.1] - 2019-01-14
### Fixed
- Setters for nillable types now have a default value of NULL to fix an issue with passing NULL to a type-hinted setter.
- Fixed some class names on helper methods' @return annotations.

## [3.0.0] - 2019-01-13
### Added
- `ValidationException` is now thrown if a request does not meet requirements. This has child exceptions that are thrown for each case:
  - `FieldNotSetException` is thrown when a required field is not set.
  - `ChoiceNotSetException` is thrown when no fields have been set that are part of a choice.
  - `InvalidChoiceException` is thrown when multiple fields in a choice have been set instead of just one.

### Changed
- Enumerated Types are now represented by a class (utilizing [php-enum](https://github.com/myclabs/php-enum)) instead of just being a string.
- Fields set to `NULL` no longer are omitted from the generated XML. Instead, they are set as a `nil` value in the XML.
- Unsetters have been added for each field. If you wish to unset a field after calling it's setter, use its corresponding unsetter. 
- Models have been rebuilt off of `Rel_23.0_1.1075` XSD files to target BroadWorks Release 23.

## [2.2.2] - 2018-12-27
### Fixed
- Nillable properties on response objects were incorrectly getting set to an instance of Nil when they shouldn't have been.

## [2.2.1] - 2018-12-19
### Fixed
- `TcpTransport` was not sending requests to the server after connecting. 

## [2.2.0] - 2018-12-15
### Added
- SSL support for TCP connections. 

## [2.1.2] - 2018-11-22
### Fixed
- Chance of `BadResponseException` being thrown randomly when using TCP due to not accounting for the newline that follows a response.

## [2.1.1] - 2018-11-12
### Changed
- composer.json now suggest soap & socket extensions instead of requiring them. You need at least one.

## [2.1.0] - 2018-11-04
### Added
- `Nil` class added. Fields that are nillable can have their value set as an instance of `Nil`.
- `Options` class added as the 4th argument for `OcipClient`'s constructor. This `Options` class has two setters:
  - `setServerVersion` sets the BroadWorks server version. Options are `Options::VERSION_14SP4` (default) or `Options::VERSION_22`. This impacts the information set on the `UserDetails` object (see below).
  - `setSoapClientOptions` sets the `$options` argument of `SoapClient` if using SOAP.
- `OcipClient::login` now returns a `UserDetails` object containing information about the logged in user. `OcipClient::getUserDetails` returns the same object. If using BW release 22, make sure you set `Options::setServerVersion` to `Options::VERSION_22` to include reseller details.
- `XmlException` exception that can be thrown during serialization or deserialization of XML.

## [2.0.3] - 2018-11-03
### Fixed
- `ErrorResponseException` was being thrown during login failure instead of `LoginException`.

## [2.0.2] - 2018-10-07
### Fixed
- Fixed object serialization so it casts values to the their appropriate type. 

## [2.0.1] - 2018-09-20
### Fixed
- Fixed issue with abstract classes not including an xsi:type attribute when converted to XML.
- Fixed issue with XML generation on some versions of PHP not properly setting text elements.

## [2.0.0] - 2018-07-22
### Changed
- Instances of `ErrorResponse` are no longer returned by request calls. If the server returns an `ErrorResponse`, an instance of `ErrorResponseException` is now thrown.

## [1.1.0] - 2018-07-03
### Fixed
- Fixed mistakes in comments and phpdoc annotations caused by errors in source XSD files.

### Added
- `OcipClient` now exposes helper methods for every request object.

[3.1.4]: https://github.com/cwmiller/broadworks-connector/compare/3.1.3...3.1.4
[3.1.3]: https://github.com/cwmiller/broadworks-connector/compare/3.1.2...3.1.3
[3.1.2]: https://github.com/cwmiller/broadworks-connector/compare/3.1.1...3.1.2
[3.1.1]: https://github.com/cwmiller/broadworks-connector/compare/3.1.0...3.1.1
[3.1.0]: https://github.com/cwmiller/broadworks-connector/compare/3.0.4...3.1.0
[3.0.4]: https://github.com/cwmiller/broadworks-connector/compare/3.0.3...3.0.4
[3.0.3]: https://github.com/cwmiller/broadworks-connector/compare/3.0.2...3.0.3
[3.0.2]: https://github.com/cwmiller/broadworks-connector/compare/3.0.1...3.0.2
[3.0.1]: https://github.com/cwmiller/broadworks-connector/compare/3.0.0...3.0.1
[3.0.0]: https://github.com/cwmiller/broadworks-connector/compare/2.2.2...3.0.0
[2.2.2]: https://github.com/cwmiller/broadworks-connector/compare/2.2.1...2.2.2
[2.2.1]: https://github.com/cwmiller/broadworks-connector/compare/2.2.0...2.2.1
[2.2.0]: https://github.com/cwmiller/broadworks-connector/compare/2.1.2...2.2.0
[2.1.2]: https://github.com/cwmiller/broadworks-connector/compare/2.1.1...2.1.2
[2.1.1]: https://github.com/cwmiller/broadworks-connector/compare/2.1.0...2.1.1
[2.1.0]: https://github.com/cwmiller/broadworks-connector/compare/2.0.3...2.1.0
[2.0.3]: https://github.com/cwmiller/broadworks-connector/compare/2.0.2...2.0.3
[2.0.2]: https://github.com/cwmiller/broadworks-connector/compare/2.0.1...2.0.2
[2.0.1]: https://github.com/cwmiller/broadworks-connector/compare/2.0...2.0.1
[2.0.0]: https://github.com/cwmiller/broadworks-connector/compare/1.1...2.0
[1.1.0]: https://github.com/cwmiller/broadworks-connector/compare/1.0...1.1