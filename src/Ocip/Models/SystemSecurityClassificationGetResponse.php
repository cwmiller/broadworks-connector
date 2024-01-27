<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSecurityClassificationGetResponse
 *
 * Response to the SystemSecurityClassificationGetRequest.
 *         Contains a table with column headings:
 *         "Name", "Priority".
 *
 * @see SystemSecurityClassificationGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:29579","type":"sequence"}]
 */
class SystemSecurityClassificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName meetMeAnncThreshold
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:29579
     * @MinInclusive 1
     * @MaxInclusive 30
     * @var int|null
     */
    protected $meetMeAnncThreshold = null;

    /**
     * @ElementName SecurityClassificationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:29579
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

