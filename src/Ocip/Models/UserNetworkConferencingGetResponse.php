<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserNetworkConferencingGetResponse
 *
 * Response to UserNetworkConferencingGetRequest.
 */
class UserNetworkConferencingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName conferenceURI
     * @var string|null
     */
    private $conferenceURI = null;

    /**
     * @ElementName maxConferenceParties
     * @var int|null
     */
    private $maxConferenceParties = null;

    /**
     * Getter for conferenceURI
     *
     * @ElementName conferenceURI
     * @return string|null
     */
    public function getConferenceURI()
    {
        return $this->conferenceURI;
    }

    /**
     * Setter for conferenceURI
     *
     * @ElementName conferenceURI
     * @param string|null $conferenceURI
     * @return $this
     */
    public function setConferenceURI($conferenceURI)
    {
        $this->conferenceURI = $conferenceURI;
        return $this;
    }

    /**
     * Getter for maxConferenceParties
     *
     * @ElementName maxConferenceParties
     * @return int|null
     */
    public function getMaxConferenceParties()
    {
        return $this->maxConferenceParties;
    }

    /**
     * Setter for maxConferenceParties
     *
     * @ElementName maxConferenceParties
     * @param int|null $maxConferenceParties
     * @return $this
     */
    public function setMaxConferenceParties($maxConferenceParties)
    {
        $this->maxConferenceParties = $maxConferenceParties;
        return $this;
    }


}

