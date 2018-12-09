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
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:24131","type":"sequence"}]
 */
class SystemSecurityClassificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName meetMeAnncThreshold
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:24131
     * @var int|null
     */
    private $meetMeAnncThreshold = null;

    /**
     * @ElementName SecurityClassificationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:24131
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

