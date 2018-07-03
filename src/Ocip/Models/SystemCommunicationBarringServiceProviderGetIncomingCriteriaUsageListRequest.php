<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringServiceProviderGetIncomingCriteriaUsageListRequest
 *
 * Get the list of Service Providers that use a specific
 *         Communication Barring Incoming Criteria.
 *         The response is either a
 * SystemCommunicationBarringServiceProviderGetIncomingCriteriaUsageListResponse
 *         or an ErrorResponse.
 *
 * @see
 * SystemCommunicationBarringServiceProviderGetIncomingCriteriaUsageListResponse
 * @see ErrorResponse
 */
class SystemCommunicationBarringServiceProviderGetIncomingCriteriaUsageListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

