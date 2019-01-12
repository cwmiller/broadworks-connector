<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerServiceAuthorizationModifyRequest
 *
 * Modify the reseller service authorization file.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b009175f2a2a9d38115e319a6ad64d7f:624","type":"sequence"}]
 */
class ResellerServiceAuthorizationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group b009175f2a2a9d38115e319a6ad64d7f:624
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @ElementName serviceOffering
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FileResource
     * @Nillable
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:624
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileResource|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serviceOffering = null;

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }

    /**
     * Getter for serviceOffering
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\FileResource|null
     */
    public function getServiceOffering()
    {
        return $this->serviceOffering instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceOffering;
    }

    /**
     * Setter for serviceOffering
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FileResource|null $serviceOffering
     * @return $this
     */
    public function setServiceOffering(\CWM\BroadWorksConnector\Ocip\Models\FileResource $serviceOffering)
    {
        if ($serviceOffering === null) {
            $this->serviceOffering = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->serviceOffering = $serviceOffering;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceOffering()
    {
        $this->serviceOffering = null;
        return $this;
    }


}

