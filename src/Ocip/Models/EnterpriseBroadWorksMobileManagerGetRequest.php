<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobileManagerGetRequest
 *
 * Get the BroadWorks Mobile Manager.
 *         The response is either EnterpriseBroadWorksMobileManagerGetResponse or ErrorResponse.
 *
 * @see EnterpriseBroadWorksMobileManagerGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"889c8c305076ef39cc50c70d0c2dc820:309","type":"sequence"}]
 */
class EnterpriseBroadWorksMobileManagerGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 889c8c305076ef39cc50c70d0c2dc820:309
     * @var string|null
     */
    private $serviceProviderId = null;

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


}

