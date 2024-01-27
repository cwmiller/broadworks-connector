<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserNetworkConferencingGetResponse
 *
 * Response to UserNetworkConferencingGetRequest.
 *
 * @see UserNetworkConferencingGetRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:2640","type":"sequence"}]
 */
class UserNetworkConferencingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName conferenceURI
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2640
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $conferenceURI = null;

    /**
     * @ElementName maxConferenceParties
     * @Type int
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2640
     * @MinInclusive 4
     * @MaxInclusive 15
     * @var int|null
     */
    protected $maxConferenceParties = null;

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

