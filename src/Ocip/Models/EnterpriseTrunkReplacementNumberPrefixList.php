<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseTrunkReplacementNumberPrefixList
 *
 * A list of prefixes that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"3f28429898a57a7f7846d3877b22df9f:840","type":"sequence"}]
 */
class EnterpriseTrunkReplacementNumberPrefixList
{

    /**
     * @ElementName numberPrefix
     * @Type string
     * @Array
     * @Group 3f28429898a57a7f7846d3877b22df9f:840
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    private $numberPrefix = array(
        
    );

    /**
     * Getter for numberPrefix
     *
     * @return string[]
     */
    public function getNumberPrefix()
    {
        return $this->numberPrefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberPrefix;
    }

    /**
     * Setter for numberPrefix
     *
     * @param string[] $numberPrefix
     * @return $this
     */
    public function setNumberPrefix(array $numberPrefix)
    {
        $this->numberPrefix = $numberPrefix;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberPrefix()
    {
        $this->numberPrefix = null;
        return $this;
    }

    /**
     * Adder for numberPrefix
     *
     * @param string $numberPrefix
     * @return $this
     */
    public function addNumberPrefix(string $numberPrefix)
    {
        $this->numberPrefix[] = $numberPrefix;
        return $this;
    }


}

