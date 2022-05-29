<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCallRecordingModifyRequest
 *
 * Modify the Call Recording attribute for a reseller.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"9741e074fbfeb4c7312bfa4dfbaee3d3:191","type":"sequence"}]
 */
class ResellerCallRecordingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:191
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * @ElementName FQDN
     * @Type string
     * @Nillable
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:191
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $FQDN = null;

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
     * Getter for FQDN
     *
     * @return string|null
     */
    public function getFQDN()
    {
        return $this->FQDN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->FQDN;
    }

    /**
     * Setter for FQDN
     *
     * @param string|null $FQDN
     * @return $this
     */
    public function setFQDN($FQDN = null)
    {
        if ($FQDN === null) {
            $this->FQDN = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->FQDN = $FQDN;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFQDN()
    {
        $this->FQDN = null;
        return $this;
    }


}

