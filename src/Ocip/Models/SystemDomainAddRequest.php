<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDomainAddRequest
 *
 * Add a system domain to the system.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemDomainAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName domain
     * @var string|null
     */
    private $domain = null;

    /**
     * Getter for domain
     *
     * @ElementName domain
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Setter for domain
     *
     * @ElementName domain
     * @param string|null $domain
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }


}

