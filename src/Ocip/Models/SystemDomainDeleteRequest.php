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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:9429","type":"sequence"}]
 */
class SystemDomainDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName domain
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9429
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $domain = null;

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


}

