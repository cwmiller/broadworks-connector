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
 */
class SystemSecurityClassificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName meetMeAnncThreshold
     * @var int|null
     */
    private $meetMeAnncThreshold = null;

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
    public function setSecurityClassificationTable($SecurityClassificationTable)
    {
        $this->SecurityClassificationTable = $SecurityClassificationTable;
        return $this;
    }


}

