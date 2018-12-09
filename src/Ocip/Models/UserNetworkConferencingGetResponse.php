<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserNetworkConferencingGetResponse
 *
 * Response to UserNetworkConferencingGetRequest.
 *
 * @see UserNetworkConferencingGetRequest
 * @Groups [{"id":"ee3830ce42f01a3ef2a105d473fc3b17:2111","type":"sequence"}]
 */
class UserNetworkConferencingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName conferenceURI
     * @Type string
     * @Optional
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:2111
     * @var string|null
     */
    private $conferenceURI = null;

    /**
     * @ElementName maxConferenceParties
     * @Type int
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:2111
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

