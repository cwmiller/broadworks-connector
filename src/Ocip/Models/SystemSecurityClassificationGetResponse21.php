<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSecurityClassificationGetResponse21
 *
 * Response to the SystemSecurityClassificationGetRequest21.
 *         Contains a table with column headings:
 *         "Name", "Priority".
 *
 * @see SystemSecurityClassificationGetRequest21
 */
class SystemSecurityClassificationGetResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName meetMeAnncThreshold
     * @Type int
     * @var int|null
     */
    private $meetMeAnncThreshold = null;

    /**
     * @ElementName playTrunkUserSecurityClassificationAnnouncement
     * @Type bool
     * @var bool|null
     */
    private $playTrunkUserSecurityClassificationAnnouncement = null;

    /**
     * @ElementName SecurityClassificationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $SecurityClassificationTable = null;

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
     * Getter for SecurityClassificationTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSecurityClassificationTable()
    {
        return $this->SecurityClassificationTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->SecurityClassificationTable;
    }

    /**
     * Setter for SecurityClassificationTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $SecurityClassificationTable
     * @return $this
     */
    public function setSecurityClassificationTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $SecurityClassificationTable)
    {
        $this->SecurityClassificationTable = $SecurityClassificationTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecurityClassificationTable()
    {
        $this->SecurityClassificationTable = null;
        return $this;
    }


}

