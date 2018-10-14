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
     * @var int|null
     */
    private $meetMeAnncThreshold = null;

    /**
     * @ElementName playTrunkUserSecurityClassificationAnnouncement
     * @var bool|null
     */
    private $playTrunkUserSecurityClassificationAnnouncement = null;

    /**
     * @ElementName SecurityClassificationTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $SecurityClassificationTable = null;

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
     * Getter for SecurityClassificationTable
     *
     * @ElementName SecurityClassificationTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getSecurityClassificationTable()
    {
        return $this->SecurityClassificationTable;
    }

    /**
     * Setter for SecurityClassificationTable
     *
     * @ElementName SecurityClassificationTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $SecurityClassificationTable
     * @return $this
     */
    public function setSecurityClassificationTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $SecurityClassificationTable)
    {
        $this->SecurityClassificationTable = $SecurityClassificationTable;
        return $this;
    }


}

