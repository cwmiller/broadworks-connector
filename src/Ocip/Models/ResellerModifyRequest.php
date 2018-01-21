<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerModifyRequest
 *
 * Modify the reseller profile.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ResellerModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @ElementName resellerName
     * @var string|null
     */
    private $resellerName = null;

    /**
     * Getter for resellerId
     *
     * @ElementName resellerId
     * @return string|null
     */
    public function getResellerId()
    {
        return $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @ElementName resellerId
     * @param string|null $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * Getter for resellerName
     *
     * @ElementName resellerName
     * @return string|null
     */
    public function getResellerName()
    {
        return $this->resellerName;
    }

    /**
     * Setter for resellerName
     *
     * @ElementName resellerName
     * @param string|null $resellerName
     * @return $this
     */
    public function setResellerName($resellerName)
    {
        $this->resellerName = $resellerName;
        return $this;
    }


}

