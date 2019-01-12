<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOutgoingCallingPlanGetResponse
 *
 * Response to SystemOutgoingCallingPlanGetRequest.
 *
 * @see SystemOutgoingCallingPlanGetRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:21164","type":"sequence"}]
 */
class SystemOutgoingCallingPlanGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName directTransferScreening
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21164
     * @var bool|null
     */
    private $directTransferScreening = null;

    /**
     * Getter for directTransferScreening
     *
     * @return bool
     */
    public function getDirectTransferScreening()
    {
        return $this->directTransferScreening instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->directTransferScreening;
    }

    /**
     * Setter for directTransferScreening
     *
     * @param bool $directTransferScreening
     * @return $this
     */
    public function setDirectTransferScreening($directTransferScreening)
    {
        $this->directTransferScreening = $directTransferScreening;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDirectTransferScreening()
    {
        $this->directTransferScreening = null;
        return $this;
    }


}

