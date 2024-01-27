<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOutgoingCallingPlanGetResponse
 *
 * Response to SystemOutgoingCallingPlanGetRequest.
 *
 * @see SystemOutgoingCallingPlanGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:28672","type":"sequence"}]
 */
class SystemOutgoingCallingPlanGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName directTransferScreening
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:28672
     * @var bool|null
     */
    protected $directTransferScreening = null;

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

