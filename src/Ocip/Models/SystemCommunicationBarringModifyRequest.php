<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringModifyRequest
 *
 * Modify the system level data associated with Communication Barring.
 *         The following elements are only used in AS data mode and ignored in XS
 * data mode:
 *          vmCallbackScreening
 *         
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemCommunicationBarringModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

