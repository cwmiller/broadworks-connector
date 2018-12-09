<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSecurityClassificationModifyRequest
 *
 * Modify security classification parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         NOTE: The security classifications must be specified in order of priority. The command fails if all the security classifications defined for the system are not provided.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"03b1e8852a59a842f834331786163273:294","type":"sequence"}]
 */
class SystemSecurityClassificationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName meetMeAnncThreshold
     * @Type int
     * @Optional
     * @Group 03b1e8852a59a842f834331786163273:294
     * @var int|null
     */
    private $meetMeAnncThreshold = null;

    /**
     * @ElementName playTrunkUserSecurityClassificationAnnouncement
     * @Type bool
     * @Optional
     * @Group 03b1e8852a59a842f834331786163273:294
     * @var bool|null
     */
    private $playTrunkUserSecurityClassificationAnnouncement = null;

    /**
     * @ElementName securityClassificationName
     * @Type string
     * @Array
     * @Optional
     * @Group 03b1e8852a59a842f834331786163273:294
     * @var string[]
     */
    private $securityClassificationName = array(
        
    );

    /**
     * Getter for meetMeAnncThreshold
     *
     * @return int
     */
    public function getMeetMeAnncThreshold()
    {
        return $this->meetMeAnncThreshold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->meetMeAnncThreshold;
    }

    /**
     * Setter for meetMeAnncThreshold
     *
     * @param int $meetMeAnncThreshold
     * @return $this
     */
    public function setMeetMeAnncThreshold($meetMeAnncThreshold)
    {
        $this->meetMeAnncThreshold = $meetMeAnncThreshold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMeetMeAnncThreshold()
    {
        $this->meetMeAnncThreshold = null;
        return $this;
    }

    /**
     * Getter for playTrunkUserSecurityClassificationAnnouncement
     *
     * @return bool
     */
    public function getPlayTrunkUserSecurityClassificationAnnouncement()
    {
        return $this->playTrunkUserSecurityClassificationAnnouncement instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playTrunkUserSecurityClassificationAnnouncement;
    }

    /**
     * Setter for playTrunkUserSecurityClassificationAnnouncement
     *
     * @param bool $playTrunkUserSecurityClassificationAnnouncement
     * @return $this
     */
    public function setPlayTrunkUserSecurityClassificationAnnouncement($playTrunkUserSecurityClassificationAnnouncement)
    {
        $this->playTrunkUserSecurityClassificationAnnouncement = $playTrunkUserSecurityClassificationAnnouncement;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayTrunkUserSecurityClassificationAnnouncement()
    {
        $this->playTrunkUserSecurityClassificationAnnouncement = null;
        return $this;
    }

    /**
     * Getter for securityClassificationName
     *
     * @return string[]
     */
    public function getSecurityClassificationName()
    {
        return $this->securityClassificationName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->securityClassificationName;
    }

    /**
     * Setter for securityClassificationName
     *
     * @param string[] $securityClassificationName
     * @return $this
     */
    public function setSecurityClassificationName(array $securityClassificationName)
    {
        $this->securityClassificationName = $securityClassificationName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecurityClassificationName()
    {
        $this->securityClassificationName = null;
        return $this;
    }

    /**
     * Adder for securityClassificationName
     *
     * @param string $securityClassificationName
     * @return $this
     */
    public function addSecurityClassificationName(string $securityClassificationName)
    {
        $this->securityClassificationName[] = $securityClassificationName;
        return $this;
    }


}

