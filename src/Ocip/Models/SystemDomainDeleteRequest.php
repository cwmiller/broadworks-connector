<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDomainDeleteRequest
 *
 * Delete a system domain from the system.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemDomainDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

