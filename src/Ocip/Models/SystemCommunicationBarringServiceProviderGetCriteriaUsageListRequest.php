<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringServiceProviderGetCriteriaUsageListRequest
 *
 * Get the list of Service Providers that use a specific
 *         Communication Barring Criteria.
 *         The response is either a SystemCommunicationBarringServiceProviderGetCriteriaUsageListResponse
 *         or an ErrorResponse.
 *
 * @see SystemCommunicationBarringServiceProviderGetCriteriaUsageListResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:6617","type":"sequence"}]
 */
class SystemCommunicationBarringServiceProviderGetCriteriaUsageListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:6617
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }
}

