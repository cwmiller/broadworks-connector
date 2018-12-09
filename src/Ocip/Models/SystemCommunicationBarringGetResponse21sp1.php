<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringGetResponse21sp1
 *
 * Response to SystemCommunicationBarringGetRequest21sp1.
 *         The following elements are only used in AS data mode:
 *         vmCallbackScreening, value "false" is returned in XS data mode.
 *
 * @see SystemCommunicationBarringGetRequest21sp1
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:5334","type":"sequence"}]
 */
class SystemCommunicationBarringGetResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName directTransferScreening
     * @Type bool
     * @Group b5f5416d9e71f8e4246cda16c4723744:5334
     * @var bool|null
     */
    private $directTransferScreening = null;

    /**
     * @ElementName vmCallbackScreening
     * @Type bool
     * @Group b5f5416d9e71f8e4246cda16c4723744:5334
     * @var bool|null
     */
    private $vmCallbackScreening = null;

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

    /**
     * Getter for vmCallbackScreening
     *
     * @return bool
     */
    public function getVmCallbackScreening()
    {
        return $this->vmCallbackScreening instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->vmCallbackScreening;
    }

    /**
     * Setter for vmCallbackScreening
     *
     * @param bool $vmCallbackScreening
     * @return $this
     */
    public function setVmCallbackScreening($vmCallbackScreening)
    {
        $this->vmCallbackScreening = $vmCallbackScreening;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVmCallbackScreening()
    {
        $this->vmCallbackScreening = null;
        return $this;
    }


}

