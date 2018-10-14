<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSecurityClassificationModifyRequest
 *
 * Modify security classification parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         NOTE: The security classifications must be specified in order of
 * priority. The command fails if all the security classifications defined for the
 * system are not provided.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemSecurityClassificationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName meetMeAnncThreshold
     * @var int|null
     */
    private $meetMeAnncThreshold = null;

    /**
     * @ElementName playTrunkUserSecurityClassificationAnnouncement
     * @var bool|null
     */
    private $playTrunkUserSecurityClassificationAnnouncement = null;

    /**
     * @ElementName securityClassificationName
     * @var string[]
     */
    private $securityClassificationName = array(
        
    );

    /**
     * Getter for meetMeAnncThreshold
     *
     * @ElementName meetMeAnncThreshold
     * @return int|null
     */
    public function getMeetMeAnncThreshold()
    {
        return $this->meetMeAnncThreshold;
    }

    /**
     * Setter for meetMeAnncThreshold
     *
     * @ElementName meetMeAnncThreshold
     * @param int|null $meetMeAnncThreshold
     * @return $this
     */
    public function setMeetMeAnncThreshold($meetMeAnncThreshold)
    {
        $this->meetMeAnncThreshold = $meetMeAnncThreshold;
        return $this;
    }

    /**
     * Getter for playTrunkUserSecurityClassificationAnnouncement
     *
     * @ElementName playTrunkUserSecurityClassificationAnnouncement
     * @return bool|null
     */
    public function getPlayTrunkUserSecurityClassificationAnnouncement()
    {
        return $this->playTrunkUserSecurityClassificationAnnouncement;
    }

    /**
     * Setter for playTrunkUserSecurityClassificationAnnouncement
     *
     * @ElementName playTrunkUserSecurityClassificationAnnouncement
     * @param bool|null $playTrunkUserSecurityClassificationAnnouncement
     * @return $this
     */
    public function setPlayTrunkUserSecurityClassificationAnnouncement($playTrunkUserSecurityClassificationAnnouncement)
    {
        $this->playTrunkUserSecurityClassificationAnnouncement = $playTrunkUserSecurityClassificationAnnouncement;
        return $this;
    }

    /**
     * Getter for securityClassificationName
     *
     * @ElementName securityClassificationName
     * @return string[]
     */
    public function getSecurityClassificationName()
    {
        return $this->securityClassificationName;
    }

    /**
     * Setter for securityClassificationName
     *
     * @ElementName securityClassificationName
     * @param string[] $securityClassificationName
     * @return $this
     */
    public function setSecurityClassificationName(array $securityClassificationName)
    {
        $this->securityClassificationName = $securityClassificationName;
        return $this;
    }

    /**
     * Adder for securityClassificationName
     *
     * @ElementName securityClassificationName
     * @param string $securityClassificationName
     * @return $this
     */
    public function addSecurityClassificationName(string $securityClassificationName)
    {
        $this->securityClassificationName []= $securityClassificationName;
        return $this;
    }


}

