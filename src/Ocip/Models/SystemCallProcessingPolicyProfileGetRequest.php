<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileGetRequest
 *
 * Request to get a call processing policy profile in system.
 *                 The response is either a SystemCallProcessingPolicyProfileGetResponse or an ErrorResponse.
 *
 *                 Replaced by SystemCallProcessingPolicyProfileGetRequest20.
 *
 * @see SystemCallProcessingPolicyProfileGetResponse
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileGetRequest20
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:31510","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:31510
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $name = null;

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

