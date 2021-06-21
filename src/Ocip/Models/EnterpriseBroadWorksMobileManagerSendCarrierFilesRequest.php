<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobileManagerSendCarrierFilesRequest
 *
 * Sends an email with the carrier information and certificate files.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"5395c7df0157d44aa22f3351d1a5f3da:398","type":"sequence"}]
 */
class EnterpriseBroadWorksMobileManagerSendCarrierFilesRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:398
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName emailTo
     * @Type string
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:398
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $emailTo = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for emailTo
     *
     * @return string
     */
    public function getEmailTo()
    {
        return $this->emailTo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emailTo;
    }

    /**
     * Setter for emailTo
     *
     * @param string $emailTo
     * @return $this
     */
    public function setEmailTo($emailTo)
    {
        $this->emailTo = $emailTo;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmailTo()
    {
        $this->emailTo = null;
        return $this;
    }


}

