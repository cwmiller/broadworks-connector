<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkClassOfServiceGetRequest19sp1
 *
 * Get an existing Network Class of Service.
 *         The response is either a SystemNetworkClassOfServiceGetResponse19sp1
 *         or an ErrorResponse.
 *
 * @see SystemNetworkClassOfServiceGetResponse19sp1
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:12694","type":"sequence"}]
 */
class SystemNetworkClassOfServiceGetRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:12694
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

