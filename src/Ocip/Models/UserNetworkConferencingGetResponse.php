<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserNetworkConferencingGetResponse
 *
 * Response to UserNetworkConferencingGetRequest.
 *
 * @see UserNetworkConferencingGetRequest
 */
class UserNetworkConferencingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName conferenceURI
     * @Type string
     * @var string|null
     */
    private $conferenceURI = null;

    /**
     * @ElementName maxConferenceParties
     * @Type int
     * @var int|null
     */
    private $maxConferenceParties = null;

    /**
     * Getter for conferenceURI
     *
     * @return string
     */
    public function getConferenceURI()
    {
        return $this->conferenceURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceURI;
    }

    /**
     * Setter for conferenceURI
     *
     * @param string $conferenceURI
     * @return $this
     */
    public function setConferenceURI($conferenceURI)
    {
        $this->conferenceURI = $conferenceURI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceURI()
    {
        $this->conferenceURI = null;
        return $this;
    }

    /**
     * Getter for maxConferenceParties
     *
     * @return int
     */
    public function getMaxConferenceParties()
    {
        return $this->maxConferenceParties instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxConferenceParties;
    }

    /**
     * Setter for maxConferenceParties
     *
     * @param int $maxConferenceParties
     * @return $this
     */
    public function setMaxConferenceParties($maxConferenceParties)
    {
        $this->maxConferenceParties = $maxConferenceParties;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxConferenceParties()
    {
        $this->maxConferenceParties = null;
        return $this;
    }


}

