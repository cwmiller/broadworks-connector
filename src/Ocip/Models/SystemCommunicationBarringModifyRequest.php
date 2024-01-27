<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringModifyRequest
 *
 * Modify the system level data associated with Communication Barring.
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *          vmCallbackScreening
 *         
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:6313","type":"sequence"}]
 */
class SystemCommunicationBarringModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName directTransferScreening
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:6313
     * @var bool|null
     */
    protected $directTransferScreening = null;

    /**
     * @ElementName vmCallbackScreening
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:6313
     * @var bool|null
     */
    protected $vmCallbackScreening = null;

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

