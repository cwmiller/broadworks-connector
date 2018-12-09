<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerModifyRequest
 *
 * Modify the reseller profile.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"c542c6e8c7bdabb9276b67d4d39efb85:275","type":"sequence"}]
 */
class ResellerModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group c542c6e8c7bdabb9276b67d4d39efb85:275
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @ElementName resellerName
     * @Type string
     * @Nillable
     * @Optional
     * @Group c542c6e8c7bdabb9276b67d4d39efb85:275
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $resellerName = null;

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
     * Getter for resellerName
     *
     * @return string|null
     */
    public function getResellerName()
    {
        return $this->resellerName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerName;
    }

    /**
     * Setter for resellerName
     *
     * @param string|null $resellerName
     * @return $this
     */
    public function setResellerName($resellerName)
    {
        if ($resellerName === null) {
            $this->resellerName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->resellerName = $resellerName;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerName()
    {
        $this->resellerName = null;
        return $this;
    }


}

