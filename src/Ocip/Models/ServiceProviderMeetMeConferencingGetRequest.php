<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderMeetMeConferencingGetRequest
 *
 * Request the service provider/enterprise level data associated with Meet-Me Conferencing functions.
 *         The response is either a ServiceProviderMeetMeConferencingGetResponse or an ErrorResponse.
 *
 * @see ServiceProviderMeetMeConferencingGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"adf25df72505d1c476ebb480b6cce18d:399","type":"sequence"}]
 */
class ServiceProviderMeetMeConferencingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group adf25df72505d1c476ebb480b6cce18d:399
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

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

