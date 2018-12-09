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
 * @Groups [{"id":"7a29c84abb8473449085e6657fc6948d:332","type":"sequence"}]
 */
class ServiceProviderMeetMeConferencingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 7a29c84abb8473449085e6657fc6948d:332
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

