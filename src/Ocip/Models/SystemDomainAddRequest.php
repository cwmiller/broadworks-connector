<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDomainAddRequest
 *
 * Add a system or reseller domain to the system.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:9533","type":"sequence"}]
 */
class SystemDomainAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName domain
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:9533
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $domain = null;

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9533
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * Getter for domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->domain;
    }

    /**
     * Setter for domain
     *
     * @param string $domain
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDomain()
    {
        $this->domain = null;
        return $this;
    }

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
}

