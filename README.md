# BroadWorks Connector

PHP library for connecting to BroadWorks APIs.

**Currently a Work in Progress** and only supports OCI-P over SOAP.

## Installation
Using Composer:

```
composer require cwm/broadworks-connector
```

Due to this being a WIP, you'll need to set your project's `minimum-stability` to `dev`. Also consider setting `prefer-stable` to `true` so not all your requirements are developmental versions. 

## OCI-P Example

```php
<?php
use CWM\BroadWorksConnector\Ocip\Models\UserGetListInGroupRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserGetListInGroupResponse;
use CWM\BroadWorksConnector\OcipClient;

require __DIR__ . '/vendor/autoload.php';

// Initialize by passing the OCI-P API's WSDL along with your BroadWorks portal username and password.
$ocip = new OcipClient('https://your-service-provider-portal.com/webservice/services/ProvisioningService?wsdl', 'portal-username', 'portal-password');

// Execute a single request to get all users in a group.
$request1 = (new UserGetListInGroupRequest())
    ->setServiceProviderId('test-service-provider')
    ->setGroupId('test-group');
    
// Response will either be the object corresponding to your request or ErrorResponse if there was an error with your input.
$response = $ocip->call($request1);

if ($response instanceof UserGetListInGroupResponse) {
    foreach ($response->getUserTable()->getRow() as $row) {
        echo $row->getCol()[0] . PHP_EOL;
    }
} else if ($response instanceof ErrorResponse) {
    echo $response->getSummary() . PHP_EOL;
    exit();
}

// Multiple requests can be executed in a single call to the API too.
$request2 = (new UserGetListInGroupRequest())
    ->setServiceProviderId('test-service-provider')
    ->setGroupId('another-test-group');
    
$responses = $ocip->callAll([$request1, $request2]);

foreach ($responses as $response) {
    if ($response instanceof UserGetListInGroupResponse) {
        foreach ($response->getUserTable()->getRow() as $row) {
            echo $row->getCol()[0] . PHP_EOL;
        }
    } 
}
```

## TODO
* OCI-P over TCP
* XSI
* Tests
* Actually test the thing.. 