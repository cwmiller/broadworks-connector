<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringGetResponse21sp1
 *
 * Response to SystemCommunicationBarringGetRequest21sp1.
 *         The following elements are only used in AS data mode:
 *         vmCallbackScreening, value "false" is returned in XS data mode.
 */
class SystemCommunicationBarringGetResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName directTransferScreening
     * @var bool|null
     */
    private $directTransferScreening = null;

    /**
     * @ElementName vmCallbackScreening
     * @var bool|null
     */
    private $vmCallbackScreening = null;

    /**
     * Getter for directTransferScreening
     *
     * @ElementName directTransferScreening
     * @return bool|null
     */
    public function getDirectTransferScreening()
    {
        return $this->directTransferScreening;
    }

    /**
     * Setter for directTransferScreening
     *
     * @ElementName directTransferScreening
     * @param bool|null $directTransferScreening
     * @return $this
     */
    public function setDirectTransferScreening($directTransferScreening)
    {
        $this->directTransferScreening = $directTransferScreening;
        return $this;
    }

    /**
     * Getter for vmCallbackScreening
     *
     * @ElementName vmCallbackScreening
     * @return bool|null
     */
    public function getVmCallbackScreening()
    {
        return $this->vmCallbackScreening;
    }

    /**
     * Setter for vmCallbackScreening
     *
     * @ElementName vmCallbackScreening
     * @param bool|null $vmCallbackScreening
     * @return $this
     */
    public function setVmCallbackScreening($vmCallbackScreening)
    {
        $this->vmCallbackScreening = $vmCallbackScreening;
        return $this;
    }


}

