<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobileManagerSendCarrierFilesRequest
 *
 * Sends an email with the carrier information and certificate files.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class EnterpriseBroadWorksMobileManagerSendCarrierFilesRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName emailTo
     * @var string|null
     */
    private $emailTo = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for emailTo
     *
     * @ElementName emailTo
     * @return string|null
     */
    public function getEmailTo()
    {
        return $this->emailTo;
    }

    /**
     * Setter for emailTo
     *
     * @ElementName emailTo
     * @param string|null $emailTo
     * @return $this
     */
    public function setEmailTo($emailTo)
    {
        $this->emailTo = $emailTo;
        return $this;
    }


}

