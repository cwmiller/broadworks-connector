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
 * @Groups [{"id":"435c279b3e6710f4ada60ed66a93d278:257","type":"sequence"}]
 */
class SystemSecurityClassificationGetResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName meetMeAnncThreshold
     * @Type int
     * @Group 435c279b3e6710f4ada60ed66a93d278:257
     * @MinInclusive 1
     * @MaxInclusive 30
     * @var int|null
     */
    protected $meetMeAnncThreshold = null;

    /**
     * @ElementName playTrunkUserSecurityClassificationAnnouncement
     * @Type bool
     * @Group 435c279b3e6710f4ada60ed66a93d278:257
     * @var bool|null
     */
    protected $playTrunkUserSecurityClassificationAnnouncement = null;

    /**
     * @ElementName SecurityClassificationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 435c279b3e6710f4ada60ed66a93d278:257
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $SecurityClassificationTable = null;

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

