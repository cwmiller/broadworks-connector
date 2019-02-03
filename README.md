# BroadWorks Connector

PHP library for connecting to BroadWorks OCI-P API

## What's New in Version 3?

Version 3 of the library contains several new features:

* Client-Side validation. Previously if requirements were not met, an `ErrorResponseException` would be thrown containing a generic validation error from the server. With v3, requests are validated before being sent to the server and will throw a `ValidationException` containing information about which requirements failed.
* Enum support. Previously, fields for enumerated types were just strings requiring the user to know the exact string to use. With v3, these fields now expect an instance of an enumerated type class.
* Better handling of Nillable types. Previously, if you needed to set a value as `nil`, you had to pass an instance of the `Nil` class. With v3, you just have to pass `NULL` to the setter.
* BroadWorks Release 23 support. Models have been generated from version `Rel_23.0_1.1075` XSD files with some modifications for backwards compatibility.


## Installation
Using Composer:

```
composer require cwm/broadworks-connector
```

## Usage Example

```php
<?php
use CWM\BroadWorksConnector\Ocip\Models\UserGetListInGroupRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserGetListInGroupResponse;
use CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName;
use CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName;
use CWM\BroadWorksConnector\Ocip\Models\SearchMode;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\OcipClient;

require __DIR__ . '/vendor/autoload.php';

// Initialize by passing the OCI-P API's WSDL (if using SOAP) along with your BroadWorks portal username and password.
$ocip = new OcipClient('https://your-service-provider-portal.com/webservice/services/ProvisioningService?wsdl', 'portal-username', 'portal-password');

// .. or if connecting via TCP:
//$ocip = new OcipClient('tcp://your-service-provider-portal.com:2208', 'portal-username', 'portal-password');

// .. or if connecting via TCP+SSL/TLS:
//$ocip = new OcipClient('tls://your-service-provider-portal.com:2209', 'portal-username', 'portal-password');

// In this example, a single request is made to get all users in a group whose first name is John.

$request1 = (new UserGetListInGroupRequest())
    ->setServiceProviderId('test-service-provider')
    ->setGroupId('test-group')
    ->setSearchCriteriaUserFirstName([
        (new SearchCriteriaUserFirstName())
            ->setIsCaseInsensitive(false)
            ->setMode(SearchMode::EQUAL_TO())
            ->setValue('John')
    ]);

try {
    $response = $ocip->userGetListInGroupRequest($request1);

    foreach ($response->getUserTable()->getRow() as $row) {
        echo $row->getCol()[0] . PHP_EOL;
    }
} catch (ErrorResponseException $e) {
    echo 'Server Error: ' . $e->getMessage() . PHP_EOL;
    exit();
} catch (ValidationException $e) {
    echo 'Validation Error: ' . $e->getMessage() . PHP_EOL;
    exit();
}

// Multiple requests can be executed in a single call to the API too via the callAll method.
// Here we'll add another request that retrieves all users from another group whose last name starts with an M.

$request2 = (new UserGetListInGroupRequest())
    ->setServiceProviderId('test-service-provider')
    ->setGroupId('another-test-group')
    ->setSearchCriteriaUserFirstName([
        (new SearchCriteriaUserLastName())
            ->setIsCaseInsensitive(false)
            ->setMode(SearchMode::STARTS_WITH())
            ->setValue('M')
    ]);

try {
    /** @var UserGetListInGroupResponse[] $responses */
    $responses = $ocip->callAll([$request1, $request2]);

    foreach ($responses as $response) {
        foreach ($response->getUserTable()->getRow() as $row) {
            echo $row->getCol()[0] . PHP_EOL;
        }
    }
} catch (ErrorResponseException $e) {
    echo 'Server Error: ' . $e->getMessage() . PHP_EOL;
    exit();
} catch (ValidationException $e) {
    echo 'Validation Error: ' . $e->getMessage() . PHP_EOL;
    exit();
}
```