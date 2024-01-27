# BroadWorks Connector

PHP library for connecting to BroadWorks OCI-P API.

Built using `Rel_2022_08_1_350` schema files.

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