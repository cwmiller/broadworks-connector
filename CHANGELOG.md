# Changelog

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

[2.2.0]: https://github.com/cwmiller/broadworks-connector/compare/2.1.2...2.2.0
[2.1.2]: https://github.com/cwmiller/broadworks-connector/compare/2.1.1...2.1.2
[2.1.1]: https://github.com/cwmiller/broadworks-connector/compare/2.1.0...2.1.1
[2.1.0]: https://github.com/cwmiller/broadworks-connector/compare/2.0.3...2.1.0
[2.0.3]: https://github.com/cwmiller/broadworks-connector/compare/2.0.2...2.0.3
[2.0.2]: https://github.com/cwmiller/broadworks-connector/compare/2.0.1...2.0.2
[2.0.1]: https://github.com/cwmiller/broadworks-connector/compare/2.0...2.0.1
[2.0.0]: https://github.com/cwmiller/broadworks-connector/compare/1.1...2.0
[1.1.0]: https://github.com/cwmiller/broadworks-connector/compare/1.0...1.1