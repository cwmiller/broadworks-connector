<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderMeetMeConferencingGetRequest
 *
 * Request the service provider/enterprise level data associated with Meet-Me
 * Conferencing functions.
 *         The response is either a ServiceProviderMeetMeConferencingGetResponse or
 * an ErrorResponse.
 *
 * @see ServiceProviderMeetMeConferencingGetResponse
 * @see ErrorResponse
 */
class ServiceProviderMeetMeConferencingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
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

