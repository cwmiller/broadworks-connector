# BroadWorks Connector

PHP library for connecting to BroadWorks OCI-P API

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
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;
use CWM\BroadWorksConnector\OcipClient;

require __DIR__ . '/vendor/autoload.php';

// Initialize by passing the OCI-P API's WSDL (if using SOAP) along with your BroadWorks portal username and password.
$ocip = new OcipClient('https://your-service-provider-portal.com/webservice/services/ProvisioningService?wsdl', 'portal-username', 'portal-password');

// .. or if connecting via TCP:
//$ocip = new OcipClient('tcp://your-service-provider-portal.com:2208', 'portal-username', 'portal-password');

// In this example, a single request is made to get all users in a group.

$request1 = (new UserGetListInGroupRequest())
    ->setServiceProviderId('test-service-provider')
    ->setGroupId('test-group');

$response = $ocip->userGetListInGroupRequest($request1);

// Response will either be the object corresponding to your request or ErrorResponse if there was an error with your input.

if ($response instanceof ErrorResponse) {
    echo $response->getSummary() . PHP_EOL;
    exit();
} 

foreach ($response->getUserTable()->getRow() as $row) {
    echo $row->getCol()[0] . PHP_EOL;
}

// Multiple requests can be executed in a single call to the API too via the callAll method.

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