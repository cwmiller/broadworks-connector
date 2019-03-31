<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserNetworkConferencingGetResponse
 *
 * Response to UserNetworkConferencingGetRequest.
 *
 * @see UserNetworkConferencingGetRequest
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:2652","type":"sequence"}]
 */
class UserNetworkConferencingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName conferenceURI
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2652
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $conferenceURI = null;

    /**
     * @ElementName maxConferenceParties
     * @Type int
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2652
     * @MinInclusive 4
     * @MaxInclusive 15
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

